<template>

    <!-- MODULE CONTAINER -->
    <div class="w-3/4 flex flex-col items-center">

        <introduction v-if="module.introduction" :introduction="module.introduction"></introduction>

        <!-- LESSON CONTENT -->
        <div class="w-full flex flex-col items-end relative">

            <!-- PROGRESSION LINE -->
            <div class="w-1/6 h-full absolute left-0 top-0 flex justify-center z-0 pb-50">
                <div id="decorative-line" class="bg-black h-full w-20"></div>
            </div>

            <lesson v-for="(lesson, index) in module.lessons" :key="index" :index="index + 1" :lesson="lesson"></lesson>

        </div>

    </div>

</template>

<script>
    export default {
        props: ['data'],
        data(){
            return {
                module: this.data
            }
        }
    }
</script>
