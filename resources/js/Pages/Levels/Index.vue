<template>
    <layout>
        <div class="flex flex-col ml-48 pr-48 flex-grow">
            <header class="mt-20 flex-start">
                <h4 class="text-3xl uppercase text-gray-500 montserrat-bold">dashboard</h4>
                <h2 class="text-6xl -mt-6 -ml-1 text-black montserrat-extrabold">Levels</h2>
            </header>
            <div class="flex flex-col mt-12 flex-wrap">
                <div v-for="(level, index) in user.levels" :key="index" class="w-full p-6 shadow-lg rounded-lg mb-10">
                    <h2 class="text-5xl montserrat-bold inline-block">Level {{ index + 1 }}</h2><h3 class="inline-block text-3xl ml-5">Je hebt 1 van de 4 modules voltooid</h3>
                    <div class="flex mt-5 flex-wrap">
                        <div class="w-1/5 block p-25 shadow-lg rounded-lg mr-20 mb-5">
                            <span class="text-lg montserrat-semibold">Progammeren</span>
                            <div class="text-2xl montserrat-regular">Basis Programmeren in PHP</div>
                            <div class="flex h-10 mt-10">
                                <span class="my-2 text-lg text-center flex-grow">Cijfer: 8.6</span>
                                <a href="modules/1" class="ml-auto w-10 h-10 flex-shrink-0 bg-black fill-current text-white rounded-full">
                                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-1/5 block p-25 shadow-lg rounded-lg mr-20 mb-5">
                            <span class="text-lg montserrat-semibold">Progammeren</span>
                            <div class="text-2xl montserrat-regular">Basis Programmeren in PHP</div>
                            <div class="flex h-10 mt-10">
                                <span class="montserrat-regular my-2 text-lg text-center flex-grow">Je hebt 4 van de 8 lessen voltooid</span>
                                <a href="modules/1" class="ml-auto w-10 h-10 flex-shrink-0 bg-black fill-current text-white rounded-full">
                                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
                                </a>
                            </div>
                        </div>
                        <div class="w-1/5 block p-25 shadow-lg rounded-lg mr-20 mb-5">
                            <span class="text-lg montserrat-semibold">Progammeren</span>
                            <div class="text-2xl montserrat-regular">Basis Programmeren in PHP</div>
                            <div class="flex h-10 mt-10">
                                <span class="montserrat-regular my-2 text-lg text-center flex-grow">Cijfer: 8.6</span>
                                <a href="modules/1" class="ml-auto w-10 h-10 flex-shrink-0 bg-black fill-current text-white rounded-full">
                                    <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Container from '@/Shared/Container'
import Layout from '@/Shared/Layout'

export default {
    props: {
      user: Object,
    },
    components: {
        Layout,
    }
}
</script>
