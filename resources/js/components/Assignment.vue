<template>

    <div class="assignment w-full flex flex-col justify-center bg-white shadow-md rounded-20 px-50 py-25 mb-50">

        <!-- ASSIGNMENT HEADER -->
        <div class="montserrat-regular w-full text-25 text-black flex justify-start items-center">

            <!-- ASSIGNMENT IS DONE -->
            <div class="flex-grow flex justify-start items-center">
                <div v-if="assignment.is_done" class="h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                    </svg>
                </div>

                <!-- ASSIGNMENT IS NOT DONE -->
                <div v-else class="montserrat-bold h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                    {{ index }}
                </div>

                <div class="justify-start truncate">Opdracht {{ index }} </div>

            </div>

            <div class="flex justify-center items-center" @click="toggleOpen()">
                <img v-if="!open" src="/assets/icons/accordion/closed.svg" class="w-25 h-25 cursor-pointer">
                <img v-else src="/assets/icons/accordion/open.svg" class="w-25 h-25 cursor-pointer">
            </div>

        </div>

        <!-- ASSIGNMENT CONTENT -->
        <div v-show="open" class="subject-wrapper w-full flex justify-start flex-col mt-25">

            <!-- ASSIGNMENT DESCRIPTION -->
            <div class="w-full mb-25">
                <div class="lesson-description-title montserrat-bold text-25 text-black">{{ assignment.title }}</div>
                <p class="lesson-description montserrat-regular text-20 text-black">Hier zou nog een uitgebreide inleiding kunnen komen bij de opdrachten die horen bij deze les. Zoals tips of hints of aandachtspunten.</p>
            </div>

            <!-- ASSIGNMENT -->
            <div class="multiple-choice-assignment">
                <div class="assignment-question montserrat-bold text-25">Multiple Choice:</div>
                <div class="assignment-question montserrat-regular mb-10 text-20">{{ assignment.question }}</div>
                <div v-if="this.assignment.is_done" class="answers flex flex-col mb-25">
                    <answer :answer="selectedAnswer"></answer>
                </div>
                <div v-else class="answers flex flex-col mb-25">
                    <form @submit.prevent="submit">
                        <div class="form-group">
                            <answer v-for="(answer, index) in assignment.answers" :key="index" :answer="answer"></answer>
                        </div>
                        <button class="rounded-20 w-200 h-50 shadow flex justify-center items-center uppercase font-bold text-white bg-black" type="submit">submit</button>
                    </form>
                </div>

            </div>

        </div>

    </div>

</template>

<script>
    export default {
        props: ['index', 'assignment'],
        data() {
            return {
                open: true,
                selectedAnswer: this.assignment.answers[0]
                // errors: new Errors(),
            }
        },
        methods: {
            toggleOpen: function() {
                this.open = !this.open;
            },

            submit() {
                // eventBus.$emit('submittingAssignment', this.selectedAnswer);
                // console.log(this.selectedAnswer);
                axios.put(`/assignments/${this.assignment.id}`, { answer: this.selectedAnswer })
                    .then((response) => {
                        eventBus.$emit('assignmentUpdated');
                    })
                    .catch((error) => {
                        console.log(error.response.data.errors)
                        // this.errors = new Errors(error.response.data.errors)
                    });
            },

        },
        computed: {
            correctAnswer: function() {
                console.log(this.assignment.answers);
                this.assignment.answers.filter(function(answer){
                    console.log('loggin asnwer', answer);
                    if(answer.is_correct) {
                        return answer;
                    }
                });
                return this.selectedAnswer;
            }
        }
    }
</script>
