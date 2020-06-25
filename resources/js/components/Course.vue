<template>

    <div class="w-full">

        <!-- LEVEL TITLE -->
        <div class="rounded-20 px-100 w-full mb-50 h-200 bg-black text-white flex justify-center items-center montserrat-bold text-50 truncate whitespace-no-wrap">

            <div class="montserrat-bold w-full rounded-20 h-200 bg-black text-white text-50 flex flex-row flex-no-wrap items-center whitespace-no-wrap truncate">

                <!-- LEVEL TITLE -->
                <div class="w-full text-center truncate">
                    {{ course.title }}
                </div>
            </div>

        </div>

        <!-- MODULE CARD -->
        <div class="w-full grid gap-50 grid-cols-3 mb-50">
             <module-card :module="module" v-for="(module, index) in course.modules" :key="index"></module-card>
        </div>

    </div>

</template>

<script>

    export default {
        props: ['course', 'index']
    }

</script>
