<template>
    <layout>
        <container>
            <div class="h-screen w-3/4  flex flex-col justify-center items-center montserrat-bold">

                <div class="w-full shadow-lg rounded-20 p-50 flex flex-col">

                    <!-- PROFILE PIC AND BUTTONS -->
                    <div class="w-full h-full flex flex-row flex-grow flex-no-wrap mb-50">

                        <!-- NO PROFILE PIC -->
                        <!-- <div class="w-1/2 h-full shadow-md rounded-20 overflow-hidden mr-50 flex justify-center items-center">
                            <img src="/assets/icons/user.svg" class="object-fill h-full" />
                        </div> -->

                        <!-- PROFILE PIC -->
                        <div class="w-1/2 h-full shadow-md rounded-20 overflow-hidden mr-50 flex justify-center items-center">
                            <img src="/assets/user/tomi-ristic.png" class="object-fill h-full" />
                        </div>

                        <!-- USER DATA AND CTA -->
                        <div class="w-1/2 h-full flex flex-col">

                            <!-- USER LEVEL -->
                            <div class="flex flex-col p-50 shadow-md justify-center items-center rounded-20 mb-50">

                                <div class="montserrat text-gray-700 text-30 whitespace-no-wrap text-center">Level 1 - Javscript Grunt</div>

                                <!-- USER NAME -->
                                <div class="w-full truncate montserrat-bold text-black text-50 whitespace-no-wrap text-center">{{ user.full_name }}</div>

                            </div>

                            <!-- USER ACTIONS -->
                            <div class="w-full h-full flex flex-row">

                                <a href="/courses" class="h-full w-full rounded-20 shadow-md flex flex-col flex-no-wrap justify-center items-center p-50 mr-50">
                                    <div class="montserrat-bold text-40 text-center mb-25">Bekijk Leerlijnen</div>
                                    <img class="icon-50" src="/assets/icons/arrow.svg" />
                                </a>

                                <!-- <a href="/levels" class="w-full rounded-20 shadow-md flex flex-row flex-no-wrap justify-between  items-center mb-25 py-25 px-50">
                                    <div class="montserrat-bold text-25">
                                        Bekijk Level Overzicht
                                    </div>
                                    <img class="icon-50" src="/assets/icons/arrow.svg" />
                                </a> -->

                                <a href="/modules/1" class="w-full rounded-20 shadow-md flex flex-col flex-no-wrap justify-center items-center p-50">
                                    <div class="montserrat-bold text-40 text-center mb-25">Ga verder</div>
                                    <img class="icon-50" src="/assets/icons/arrow.svg" />
                                </a>

                            </div>


                        </div>

                    </div>

                    <!-- PROGRESS WRAPPER -->
                    <div class="w-full h-75 rounded-10 overflow-hidden flex flex-row justify-between shadow-md flex-no-wrap relative">

                        <!-- CURRENT LEVEL TEXT -->
                        <div class="z-20 px-25 py-11 flex justify-center items-center bg-black text-white montserrat-bold whitespace-no-wrap">Level 1</div>

                        <!-- PROGRESS BAR AND COUNTER WRAPPER -->
                        <div class="w-full flex">

                            <!-- PROGRESS BAR -->
                            <div id="progress-bar" v-bind:style="{ 'width': progress }" class="z-10 relative transition-all h-full bg-black duration-1000">
                                <!-- PROGRESS COUNTER -->
                                <div class="z-20 px-25 text-white h-full flex justify-center items-center text-20 montserrat-bold absolute right-0 absolute"> {{ progress }} </div>
                            </div>

                        </div>

                        <!-- NEXT LEVEL TEXT -->
                        <div class="z-20 px-25 py-11 flex justify-center items-center bg-black text-white montserrat-bold whitespace-no-wrap">Level 2 </div>

                    </div>

                </div>

            </div>
        </container>
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
        Container
    },
    data: function(){
        return {
            // progress: this.user.current_level.progress + "%"
            progress: "50%"
        }
    }
}
</script>
