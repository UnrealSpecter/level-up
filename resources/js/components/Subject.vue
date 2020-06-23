

<template>

    <div class="w-full flex flex-col items-end">

        <div class="montserrat-regular w-full rounded-20 h-100 bg-white text-25 text-black mb-50 shadow-md flex justify-start items-center">

            <!-- NUMBER OR CHECKMARK INDICATOR -->
            <div class="h-full w-1/6 flex justify-center items-center">

                <!-- SUBJECT IS DONE -->
                <div v-if="subject.pivot.is_done" class="h-50 w-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                    <!-- CHECKMARK SVG -->
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                    </svg>
                </div>

                <!-- SUBJECT IS NOT DONE -->
                <div v-else class="montserrat-bold h-50 w-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">{{ index }}</div>

            </div>

            <div class="w-4/6 truncate">{{ subject.title }}</div>

            <div class="w-1/6 flex justify-center items-center" @click="toggleAccordion()">
                <img v-if="isOpen" src="/assets/icons/accordion/closed.svg" class="w-25 h-25 cursor-pointer">
                <img v-else src="/assets/icons/accordion/open.svg" class="w-25 h-25 cursor-pointer">
            </div>

        </div>

        <div :class="{ hidden : isOpen }" class="subject-wrapper w-5/6 flex justify-start flex-col">

            <!-- SUBJECT DESCRIPTION -->
            <div class="w-full mb-50">
                <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">De Theorie</div>
                <p class="lesson-description montserrat-regular text-20 text-black">{{ subject.description }}</p>
            </div>

            <slot></slot>

        </div>

    </div>

</template>

<script>
    export default {
        props: ['subject', 'index'],
        data() {
            return {
                isOpen: true
            }
        },
        methods: {
            toggleAccordion: function() {
                this.isOpen = ! this.isOpen;
            }
        }
    }
</script>
