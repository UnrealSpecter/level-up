<template>

        <container>

            <navigation></navigation>

            <div class="h-screen w-full flex flex-col justify-center items-center montserrat-bold">

                <div class="w-full text-50 montserrat-bold mb-50 text-center">{{ module.title }}</div>

                <div class="progression flex w-1/2 justify-center items-center flex-row flex-no-wrap grid grid-cols-3 gap-50">
                    <div class="col-span-1 flex flex-col justify-center items-center rounded-20 shadow-lg bg-white text-black p-50">
                        <div class="montserrat-regular text-25 mb-10">
                            Lessen
                        </div>
                        <div class="montserrat-bold text-50">
                            {{ module.totalLessons  }} / {{ module.lessonsDone }}
                        </div>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center rounded-20 shadow-lg bg-white text-black p-50">
                        <div class="montserrat-regular text-25 mb-10">
                            Lessen
                        </div>
                        <div class="montserrat-bold text-50">
                            <!-- {{ module.totalSubjects  }} / {{ modules.subjectsDone }} -->
                        </div>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center rounded-20 shadow-lg bg-white text-black p-50">
                        <div class="montserrat-regular text-25 mb-10">
                            Lessen
                        </div>
                        <div class="montserrat-bold text-50">
                            {{ module.totalLessons  }} / {{ module.lessonsDone }}
                        </div>
                    </div>
                </div>
            </div>

            <introduction v-if="module.introduction" :introduction="module.introduction"></introduction>

            <!-- LESSON CONTENT -->
            <div class="w-full flex flex-col items-end relative">

                <!-- PROGRESSION LINE -->
                <div class="w-1/6 h-full absolute left-0 top-0 flex justify-center z-0 pb-50">
                    <div id="decorative-line" class="bg-black h-full w-20"></div>
                </div>

                <lesson v-for="lesson in module.lessons" :key="lesson.id" :index="lesson.id" :lesson="lesson"></lesson>

            </div>

        </container>

</template>

<script>
    export default {
        props: ['data'],
        data (){
            return {
                module: this.data
            }
        },
        created () {
            eventBus.$on('assignmentUpdated', this.fetchModule)  // 3.Listening
        },
        methods: {
            fetchModule(){
                axios.get(`/modules/fetch/${this.module.id}`)
                .then((response) => {
                    this.module = response.data;
                }).catch((error) => {
                    console.log(error.response.data.errors)
                });
            }
        },
        computed: {
            totalLessons: function () {
                return this.module.lessons.length;
            },
            lessonsDone: function () {
                let lessonsDone = 0;
                for (let index = 0; index < this.module.lessons.length; index++) {
                    if(this.module.lessons[index].is_done){
                        lessonsDone++;
                    }
                }
                return lessonsDone;
            },
        },
    }
</script>
