<template>
    <nav class="z-50 h-100 w-screen fixed top-0 left-0 shadow-lg bg-white flex justify-between px-50 items-center montserrat-bold uppercase">
        <a href="/">Level Up!</a>
        <a href="/dashboard">Profile</a>
        <a href="/modules">Level Overzicht</a>
        <a href="/courses">Course Overzicht</a>
        <a href="/logout" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
        <form id="frm-logout" action="/logout" method="POST" class="hidden">
            <input type="hidden" name="_token" :value="csrf">
        </form>
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    }
</script>
