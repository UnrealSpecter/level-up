<template>

        <container>

            <navigation></navigation>

            <div class="h-screen w-full flex flex-col justify-center items-center montserrat-bold">

                <div class="w-full text-50 montserrat-bold mb-50 text-center">{{ module.title }}</div>

                <div class="progression flex w-1/2 rounded-20 bg-white p-50 shadow-md justify-center items-center flex-row flex-no-wrap grid grid-cols-3 gap-50">
                    <div class="col-span-1 flex flex-col justify-center items-center">
                        <div class="montserrat-regular text-25 mb-10">
                            Lessen
                        </div>
                        <div class="montserrat-bold text-50">
                            {{ module.total_lessons  }}
                        </div>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center">
                        <div class="montserrat-regular text-25 mb-10">
                            Onderwerpen
                        </div>
                        <div class="montserrat-bold text-50">
                            {{ module.total_subjects  }}
                        </div>
                    </div>
                    <div class="col-span-1 flex flex-col justify-center items-center">
                        <div class="montserrat-regular text-25 mb-10">
                            Opdrachten
                        </div>
                        <div class="montserrat-bold text-50">
                            {{ module.total_assignments }}
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
    import { forEach } from "lodash";
    export default {
        props: ['data'],
        data (){
            return {
                module: null,
                progress: null
            }
        },
        created () {
            eventBus.$on('assignmentUpdated', this.fetchModule)
            this.calculateIsDone()
        },
        methods: {
            fetchModule(){
                axios.get(`/modules/fetch/${this.module.id}`)
                .then((response) => {
                    this.calculateIsDone(response.data);
                    // this.progress = this.calculateProgress();
                }).catch((error) => {
                    console.log(error.response.data.errors)
                });
            },
            calculateIsDone(module = this.data){

                let vm = this;
                let moduleIsDone = true;

                forEach(module.lessons, function(lesson, lessonIndex){
                    let lessonIsDone = true;
                    forEach(lesson.subjects, function(subject, subjectIndex){
                        let subjectIsDone = true;
                        forEach(subject.assignments, function(assignment){
                            if(!assignment.is_done){
                                subjectIsDone = false;
                            }
                        });
                        module.lessons[lessonIndex].subjects[subjectIndex].is_done = subjectIsDone;
                        if(!module.lessons[lessonIndex].subjects[subjectIndex].is_done){
                            lessonIsDone = false;
                        }
                    });
                    module.lessons[lessonIndex].is_done = lessonIsDone;
                    if(!module.lessons[lessonIndex].is_done){
                        moduleIsDone = false;
                    }
                });

                // public function getProgressAttribute(){
                //     $totalModules = count($this->modules);
                //     $modulesDone = count($this->modules->where('is_done', true));
                //     return round($modulesDone / $totalModules * 100);
                // }

                module.total_lessons = module.lessons.length;
                module.total_subjects = 0;
                module.total_assignments = 0;

                forEach(module.lessons, function(lesson){
                    let subjectCount = lesson.subjects.length;
                    module.total_subjects += subjectCount;
                    forEach(lesson.subjects, function(subject){
                        let assignmentCount = subject.assignments.length;
                        module.total_assignments += assignmentCount;
                    });
                });

                vm.module = module;
                vm.module.is_done = moduleIsDone;


            },
        },
        // computed: {
        //     totalLessons: function () {
        //         return this.module.lessons.length;
        //     },
        //     lessonsDone: function () {
        //         let lessonsDone = 0;
        //         for (let index = 0; index < this.module.lessons.length; index++) {
        //             if(this.module.lessons[index].is_done){
        //                 lessonsDone++;
        //             }
        //         }
        //         return lessonsDone;
        //     },
        // },


    }
</script>
