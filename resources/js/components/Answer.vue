<template>
    <div class="montserrat-bold text-18 flex items-center" :class="{ 'bg-green-400' : answer.is_correct }">
        <input checked="false" class="mr-10" type="radio" :value="answer" name="answer">{{ answer.answer }}</input>
    </div>
</template>

<script>
    export default {
        props: ['answer'],
    }
</script>
