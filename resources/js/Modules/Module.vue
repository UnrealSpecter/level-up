<template>

        <container>

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
        }
    }
</script>
