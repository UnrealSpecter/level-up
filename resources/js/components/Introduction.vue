<template>

    <div class="w-full flex flex-col">

        <!-- LESSON HEADING -->
        <div class="relative montserrat-bold w-full rounded-20 h-150 bg-white shadow-lg text-white text-40 mb-50 flex flex-row flex-no-wrap items-center justify-end whitespace-no-wrap truncate">

            <!-- LESSON TITLE -->
            <div class="w-full truncate text-center text-black">introduction</div>

            <div class="w-1/6 flex justify-center items-center absolute" @click="toggleAccordion()">
                <img v-if="isOpen" src="/assets/icons/accordion/closed.svg" class="w-50 h-50 cursor-pointer">
                <img v-else src="/assets/icons/accordion/open.svg" class="w-50 h-50 cursor-pointer">
            </div>

        </div>

        <!-- SUBJECT SLOT -->
        <div :class="{ hidden: isOpen }" class="introduction-content p-50 w-full flex flex-col" v-html="introduction.body">

        </div>

    </div>

</template>

<script>
    export default {
        props: ['introduction'],
        data() {
            return {
                isOpen: false
            }
        },
        methods: {
            toggleAccordion: function() {
                this.isOpen = ! this.isOpen;
            }
        }
    }
</script>
