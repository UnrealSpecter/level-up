<template>

    <container>

        <navigation></navigation>

        <div class="h-screen w-full flex flex-col justify-center items-center montserrat-bold">

            <div class="progression flex w-1/2 justify-center items-center flex-row flex-no-wrap grid grid-cols-3 gap-50">
                <div class="col-span-3 flex flex-col justify-center items-center rounded-20 shadow-lg bg-white text-black p-50">
                    <div class="montserrat-regular text-25 mb-10">
                        Dit is het module overzicht
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
