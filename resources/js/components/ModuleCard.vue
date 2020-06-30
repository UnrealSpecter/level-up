<template>
    <div class="rounded-20 p-25 h-300 shadow-md text-black flex flex-col items-center justify-center">
        <div class="w-full flex justify-center montserrat-bold text-black text-30 whitespace-no-wrap mb-25 truncate">{{ module.title }}</div>
        <p class="w-full flex-grow text-center">{{ module.description }}</p>
        <a :href="`/modules/${ module.id }`" class="w-full rounded-20 h-50 shadow-md flex justify-center items-center uppercase font-bold text-white bg-black">start module</a>
    </div>
</template>

<script>
    export default {
        props: ['module'],
    }
</script>
