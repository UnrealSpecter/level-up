<template>

    <div class="w-full">

        <!-- LEVEL TITLE -->
        <div class="rounded-20 px-100 w-full mb-50 h-200 bg-black text-white flex justify-center items-center montserrat-bold text-50 truncate whitespace-no-wrap">

            <div class="montserrat-bold w-full rounded-20 h-200 bg-black text-white text-50 flex flex-row flex-no-wrap items-center whitespace-no-wrap truncate">

                <!-- LEVEL INDICATOR -->
                <div class="h-full w-1/6 flex justify-center items-center">

                    <!-- lEVEL IS DONE -->
                    <div v-if="level.pivot.is_done" class="h-100 w-100 rounded-100 flex justify-center items-center text-black bg-white font-bold">
                        <!-- CHECKMARK SVG -->
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                        </svg>
                    </div>

                    <!-- LEVEL IS NOT DONE -->
                    <div v-else class="h-100 w-100 rounded-100 flex justify-center items-center text-black bg-white font-bold">{{ index }}</div>

                </div>

                <!-- LEVEL TITLE -->
                <div class="w-4/6 truncate">
                    {{ level.title }}
                </div>
            </div>

        </div>

        <!-- MODULE CARD -->
        <div class="w-full grid gap-50 grid-cols-3 mb-50">
             <module-card :module="module" v-for="module in level.modules" :key="module.id"></module-card>
        </div>

    </div>

</template>

<script>

    export default {
        props: ['level', 'index']
    }

</script>
