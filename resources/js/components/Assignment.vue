<template>

    <div class="assignment w-full flex flex-col justify-center bg-white shadow-md rounded-20 p-50 mb-50">

        <!-- ASSIGNMENT HEADER -->
        <div class="montserrat-regular w-full text-25 text-black flex justify-start items-center mb-25">

            <!-- ASSIGNMENT IS DONE -->
            <div v-if="test.pivot.is_done" class="h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                </svg>
            </div>

            <!-- ASSIGNMENT IS NOT DONE -->
            <div v-else class="montserrat-bold h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                {{ index }}
            </div>
            Opdracht {{ index }}
        </div>

        <!-- ASSIGNMENT DESCRIPTION -->
        <div class="w-full mb-25">
            <div class="lesson-description-title montserrat-bold text-25 text-black">{{ assignment.title }}</div>
            <p class="lesson-description montserrat-regular text-20 text-black">Hier zou nog een uitgebreide inleiding kunnen komen bij de opdrachten die horen bij deze les. Zoals tips of hints of aandachtspunten.</p>
        </div>

        <!-- ASSIGNMENT -->
        <div class="multiple-choice-assignment">
            <div class="assignment-question montserrat-bold text-25">Multiple Choice:</div>
            <div class="assignment-question montserrat-regular mb-25 text-20">{{ assignment.question }}</div>
            <div class="answers flex flex-col">
                <!-- ANSWERS -->
                <answer v-for="(answer, index) in assignment.answers" :key="index" :answer="answer"></answer>
            </div>
            <button @click="submitAssignment()">submit</button>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['index', 'assignment'],
        data() {
            return {
                test: this.assignment,
                selectedAnswer: null
            }
        },
        methods: {
            submitAssignment: function(){
                this.test.pivot.is_done = 1;
            }
        }
    }
</script>
