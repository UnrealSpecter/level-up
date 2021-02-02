<template>

    <div class="h-75 px-50 shadow-md text-15 flex flex-row justify-between items-center mb-5 rounded-5">

        <!-- TAGS -->
        <!-- <div v-if="material.tags.length" class="tag-wrapper flex flex-row justify-center mb-25">
            <div v-for="(tag, index) in material.tags" :key="index" class="mr-10 flex flex-row flex-no-wrap rounded-20 pl-10 pr-15 py-5 shadow justify-center items-center">
                <img :src="`../storage/${ tag.icon }`" class="w-25 mr-10">
                <div class="montserrat-bold mt-5">{{ tag.label }}</div>
            </div>
        </div> -->

        <!-- VOTE SYSTEM -->
        <!-- <div class="shadow bg-white p-10 rounded-20 likes w-3/4 montserrat-regular text-center mb-25 flex flex-row flex-no-wrap justify-center items-center">

            <img src="/assets/icons/vote-icons/upvote.svg" class="w-25 h-25 cursor-pointer z-10">

            <div class="mx-10">69</div>

            <img src="/assets/icons/vote-icons/upvote.svg" class="w-25 h-25 cursor-pointer z-10">

        </div> -->

        <!-- TITLE -->
        <div class="text-20 montserrat-regular flex justify-center items-center">{{ material.title }}</div>

        <!-- LINK -->
        <a :href="`${ material.link }`" target="_blank" class="w-1/5 rounded-20 h-50 shadow flex justify-center items-center uppercase font-bold text-white bg-black">bekijk</a>

    </div>

</template>

<script>
    export default {
        props: ['material']
    }
</script>
