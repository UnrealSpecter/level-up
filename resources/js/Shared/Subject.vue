<template>

    <div class="w-full flex flex-col items-end">

        <div class="montserrat-regular w-full rounded-20 h-100 bg-white text-25 text-black mb-50 shadow-md flex justify-start items-center">

            <!-- NUMBER OR CHECKMARK INDICATOR -->
            <div class="h-full w-1/6 flex justify-center items-center">

                <!-- SUBJECT IS DONE -->
                <div v-if="subject.is_done" class="h-50 w-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                    <!-- CHECKMARK SVG -->
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                    </svg>
                </div>

                <!-- SUBJECT IS NOT DONE -->
                <div v-else class="montserrat-bold h-50 w-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">{{ index }}</div>

            </div>

            <div class="w-4/6 truncate">{{ subject.title }}</div>

            <div class="w-1/6 flex justify-center items-center" @click="toggleOpen()">
                <img v-if="!open" src="/assets/icons/accordion/closed.svg" class="w-25 h-25 cursor-pointer">
                <img v-else src="/assets/icons/accordion/open.svg" class="w-25 h-25 cursor-pointer">
            </div>

        </div>

        <div v-show="open" class="subject-wrapper w-5/6 flex justify-start flex-col">

            <!-- SUBJECT DESCRIPTION -->
            <div class="w-full mb-50">
                <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">Theorie</div>
                <p class="lesson-description montserrat-regular text-20 text-black" v-html="subject.description"></p>
            </div>

            <!-- MATERIALS WRAPPER -->
            <div v-if="subject.materials.length" class="flex flex-col">

                <div class="material-title montserrat-bold text-40 text-black mb-25">Bronnen</div>

                <!-- MATERIAL TAG FILTER -->
                <!-- <div class="tag-wrapper overflow-hidden flex flex-row justify-start items-center mb-25 shadow-md rounded-10">
                    <div class="mr-25 p-25 montserrat-bold text-20 uppercase bg-black text-white">tag filter</div>
                    <div v-for="(tag, index) in subject.tags" :key="index" class="shadow mr-10 flex flex-row flex-no-wrap rounded-20 pl-10 pr-15 py-5 justify-center items-center">
                        <img :src="`../storage/${ tag.icon }`" class="w-25 mr-10">
                        <div class="montserrat-bold mt-5">{{ tag.label }}</div>
                    </div>
                </div> -->

                <!-- MATERIALS -->
                <div class="w-full grid grid-cols-3 gap-50 mb-50">
                    <material v-for="(material, index) in subject.materials" :key="index" :material="material"></material>
                </div>

            </div>

            <!-- ASSIGNMENTS WRAPPER -->
            <div v-if="subject.assignments.length" class="flex flex-col p-50 shadow-lg rounded-20 bg-white mb-50">

                <!-- ASSIGNMENT DESCRIPTION -->
                <div v-if="subject.assignments.length" class="w-full">
                    <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">Opdrachten</div>
                    <p class="lesson-description montserrat-regular text-20 text-black">Hier zou nog een uitgebreide inleiding kunnen komen bij de opdrachten die horen bij deze les. Zoals tips of hints of aandachtspunten.</p>
                </div>

                <div v-if="subject.assignments.length" id="assignment-wrapper" class="w-full">
                    <assignment v-for="(assignment, index) in subject.assignments" :key="index" :index="index + 1" :assignment="assignment"></assignment>
                </div>

            </div>

        </div>

    </div>

</template>

<script>
    import Material from '@/Shared/Material'
    import Assignment from '@/Shared/Assignment'

    export default {
        components: {
            Material,
            Assignment
        },
        props: ['subject', 'index'],
        data() {
            return {
                open: false,
            }
        },
        methods: {
            toggleOpen: function() {
                this.open = !this.open;
            }
        },
        computed: {
            // totalLessons: function () {
            //     return this.module.lessons.length;
            // },
            // lessonsDone: function () {
            //     let lessonsDone = 0;
            //     for (let index = 0; index < this.module.lessons.length; index++) {
            //         if(this.module.lessons[index].is_done){
            //             lessonsDone++;
            //         }
            //     }
            //     return lessonsDone;
            // },
            // is_done: function(){
            //     let is_done = true;
            //     for(let index = 0; index < this.subject.assignments.length; index++){
            //             var assignment = this.subject.assignments[index];
            //             console.log(assignment);
            //             if(!assignment.pivot.is_done){
            //                 is_done = false;
            //             }
            //     }
            //     return is_done;
            // },
        },
    }
</script>
