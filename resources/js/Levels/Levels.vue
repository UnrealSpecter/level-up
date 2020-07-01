<template>
    <container>
        <level v-for="level in levels" :key="level.id" :index="level.id" :level="level"></level>
    </container>
</template>

<script>
export default {
    props: ['levels'],
}
</script>
