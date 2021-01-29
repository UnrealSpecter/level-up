<template>
    <layout>
        <div class="flex flex-col ml-48 pr-40 flex-grow overflow-x-hidden">
            <header class="mt-20 flex-start">
                <h4 class="text-3xl uppercase text-gray-500 montserrat-bold">dashboard</h4>
                <h2 class="text-6xl -mt-6 -ml-1 text-black montserrat-bold">DOMEINEN</h2>
            </header>
            <div class="flex">
                <div v-for="course in courses" :key="course.id" class="w-1/2 mt-20">
                    <div class="flex h-32">
                        <div class="w-20 relative overflow-hidden flex-shrink-0">
                            <div class="w-12 h-12 mx-auto bg-black rounded-full shadow-lg"></div>
                            <div class="w-3 h-screen bg-black mx-auto -mt-10 shadow-lg"></div>
                        </div>
                        <div>
                            <div>
                                <span class="py-1 px-4 bg-black rounded-full montserrat-medium text-white">{{ course.levels.length }} levels</span>
                            </div>
                            <h4 class="text-5xl montserrat-bold -mt-2">{{ course.title }}</h4>
                        </div>
                    </div>
                    <div v-for="level in course.levels" :key="level.id" class="flex">
                        <div class="w-20 h-auto flex-shrink-0 relative">
                            <div class="w-10 h-10 mx-auto bg-black rounded-full shadow-lg absolute" style="left:50%;top:50%;transform:translate(-50%)"></div>
                            <div class="w-3 h-full bg-black mx-auto shadow-lg"></div>
                        </div>
                        <div class="flex-grow mb-5 relative">
                            <h6 class="montserrat-bold text-3xl">{{ level.title }}</h6>
                            <span class="py-1 px-4 bg-black rounded-full montserrat-medium text-white">{{ level.modules.length}} modules</span>
                            <div class="p-8 shadow-lg mt-2 rounded-lg">
                                <span class="text-xl montserrat-medium block mb-2">Compententies</span>
                                <ul>
                                    <li class="flex">
                                        <div class="bg-black rounded-full w-3 h-3 inline-block mt-2 mr-2 flex-shrink-0"></div>
                                        <div class="inline-block">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quo culpa sapiente eveniet ducimus nobis, blanditiis dolores, aspernatur necessitatibus mollitia, consequuntur et commodi qui quaerat asperiores. Exercitationem suscipit accusantium corrupti?</div>
                                    </li>
                                    <li class="flex">
                                        <div class="bg-black rounded-full w-3 h-3 inline-block mt-2 mr-2 flex-shrink-0"></div>
                                        <div class="inline-block">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quo culpa sapiente eveniet ducimus nobis, blanditiis dolores, aspernatur necessitatibus mollitia, consequuntur et commodi qui quaerat asperiores. Exercitationem suscipit accusantium corrupti?</div>
                                    </li>
                                </ul>
                                <span class="text-xl montserrat-medium mt-4 block">Modules</span>
                                <ul>
                                    <li v-for="module in level.modules" :key="module.id" class="flex my-3">
                                        <div class="montserrat-semibold bg-black rounded-lg text-white inline-block flex-shrink-0 uppercase w-10 h-10 text-center text-2xl">a1</div>
                                        <div class="inline-block my-auto ml-5">{{ module.title }}</div>
                                    </li>
                                </ul>
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
      courses: Object,
    },
    components: {
        Layout,
    }
}
</script>
