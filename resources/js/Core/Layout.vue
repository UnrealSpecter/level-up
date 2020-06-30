<template>
    <div class="w-screen">

        <!-- NAV -->
        <nav class="z-50 h-100 w-screen fixed top-0 left-0 shadow-lg bg-white flex justify-between px-50 items-center montserrat-bold uppercase">
            <a href="/">Level Up!</a>
            <a href="/modules">Dashboard</a>
            <a href="/logout" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
            <form id="frm-logout" action="/logout" method="POST" class="hidden">
                <input type="hidden" name="_token" :value="csrf">
            </form>
        </nav>

        <!-- MAIN -->
        <main>

            <!-- LANDING -->
            <div class="min-h-screen flex justify-center items-center relative">
                <div class="montserrat-black text-50">
                    Welkom! Bij de Module.
                </div>
            </div>

            <!-- CONTENT -->
            <div class="w-screen flex justify-center">
                <slot></slot>
            </div>

        </main>
    </div>

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
