<template>
    <container>
        <course v-for="(course, index) in courses" :key="index" :index="index" :course="course"></course>
    </container>
</template>

<script>
export default {
    props: ['courses'],
}
</script>
