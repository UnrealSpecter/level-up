<template>
    <div class="montserrat-bold text-15">
        <input class="mr-50" type="radio" :value="answer" name="answer">{{ answer.answer }}</input>
    </div>
</template>

<script>
    export default {
        props: ['answer']
    }
</script>
