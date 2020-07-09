<template>
    <container>
        <course v-for="(course, index) in courses" :key="index" :index="index" :course="course"></level>
    </container>
</template>

<script>
export default {
    props: ['courses'],
}
</script>
