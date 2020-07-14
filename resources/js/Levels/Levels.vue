<template>

    <container>

        <navigation></navigation>

        <div class="h-screen w-full flex flex-col justify-center items-center montserrat-bold">

            <div class="w-full text-50 montserrat-bold mb-50 text-center">Hier kun je een overzicht zien van al je levels!</div>

            <div class="progression flex w-1/2 rounded-20 bg-white p-50 shadow-md justify-center items-center flex-row flex-no-wrap grid grid-cols-2 gap-50">
                <div class="col-span-1 flex flex-col justify-center items-center">
                    <div class="montserrat-regular text-25 mb-10">
                        Levels
                    </div>
                    <div class="montserrat-bold text-50">
                        2
                    </div>
                </div>
                <div class="col-span-1 flex flex-col justify-center items-center">
                    <div class="montserrat-regular text-25 mb-10">
                        Modules
                    </div>
                    <div class="montserrat-bold text-50">
                        3
                    </div>
                </div>
            </div>
        </div>

        <level v-for="level in levels" :key="level.id" :index="level.id" :level="level"></level>

    </container>

</template>

<script>
export default {
    props: ['levels'],
}
</script>
