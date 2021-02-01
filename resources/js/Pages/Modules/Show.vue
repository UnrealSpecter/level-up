<template>
    <layout>
        <div class="flex flex-col ml-48 pr-40 flex-grow">
            <module-header>{{ module.title }}</module-header>
            <!-- LESSON CONTENT -->
            <div class="w-full flex flex-col items-end relative">

                <!-- PROGRESSION LINE -->
                <div class="w-1/6 h-full absolute left-0 top-0 flex justify-center z-0 pb-50">
                    <div id="decorative-line" class="bg-black h-full w-25"></div>
                </div>

                <lesson v-for="lesson in module.lessons" :key="lesson.id" :index="lesson.id" :lesson="lesson"></lesson>
            </div>
        </div>
    </layout>
</template>

<script>
    // import { forEach } from "lodash";
    import Layout from '@/Shared/Layout'
    import Container from '@/Shared/Container'
    import ModuleHeader from '@/Shared/ModuleHeader'
    import Lesson from '@/Shared/Lesson'

    export default {
        components: {
            Layout,
            Container,
            ModuleHeader,
            Lesson
        },
        props: {
            module: Array
        },
        // data (){
        //     return {
        //         module: null,
        //         progress: null
        //     }
        // },
        created () {
            // eventBus.$on('assignmentUpdated', this.fetchModule)
            // this.calculateIsDone()
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

    }
</script>
