<template>

    <div class="w-full flex flex-col z-10">

        <!-- LESSON HEADING -->
        <div class="montserrat-bold w-full rounded-20 h-150 bg-white shadow-lg text-white text-40 mb-50 flex flex-row flex-no-wrap items-center whitespace-no-wrap truncate">

            <!-- CHECKMARK AND LESSON NUMBER CONTAINER -->
            <div class="h-full w-1/6 flex justify-center items-center">

                <!-- LESSON IS DONE -->
                <div v-if="lesson.is_done" class="h-75 w-75 rounded-75 flex justify-center items-center text-white bg-black font-bold">
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                    </svg>
                </div>
                <!-- LESSON IS NOT DONE. -->
                <div v-else class="h-75 w-75 rounded-75 flex justify-center items-center text-white bg-black font-bold">{{ index }}</div>

            </div>

            <!-- LESSON TITLE -->
            <div class="w-4/6 truncate text-black">{{ lesson.title }}</div>

            <div class="w-1/6 flex justify-center items-center" @click="toggleOpen()">
                <img v-if="!open" src="/assets/icons/accordion/closed.svg" class="w-50 h-50 cursor-pointer">
                <img v-else src="/assets/icons/accordion/open.svg" class="w-50 h-50 cursor-pointer">
            </div>

        </div>

        <!-- SUBJECT SLOT -->
        <div v-show="open" class="subjects-wrapper w-full flex flex-col">

            <subject v-for="(subject, index) in lesson.subjects" :key="index" :index="index + 1 " :subject="subject"></subject>

        </div>

    </div>

</template>

<script>
    export default {
        props: ['lesson', 'index'],
        data() {
            return {
                open: true
            }
        },
        methods: {
            toggleOpen: function() {
                this.open = !this.open;
            }
        }
    }
</script>
