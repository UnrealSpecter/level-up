<template>
    <main class="w-screen min-h-screen flex">
        <div class="w-75 bg-black rounded-r-lg flex-shrink-0 fixed h-screen">
            <img class="mx-auto mt-5 mb-16" src="https://i.imgur.com/0eAT8tQ.png" alt="Level up!">
            <a href="/dashboard" class="text-white w-12 h-12 my-4 mx-auto block fill-current">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z"/></svg>
            </a>
            <a href="/levels" class="text-white w-12 h-12 my-4 mx-auto block fill-current">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M4 14h2c.55 0 1-.45 1-1v-2c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1zm0 5h2c.55 0 1-.45 1-1v-2c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1zM4 9h2c.55 0 1-.45 1-1V6c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1zm5 5h10c.55 0 1-.45 1-1v-2c0-.55-.45-1-1-1H9c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1zm0 5h10c.55 0 1-.45 1-1v-2c0-.55-.45-1-1-1H9c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1zM8 6v2c0 .55.45 1 1 1h10c.55 0 1-.45 1-1V6c0-.55-.45-1-1-1H9c-.55 0-1 .45-1 1z"/></svg>
            </a>
            <a href="/courses" class="text-white w-12 h-12 my-4 mx-auto block fill-current">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v2.81c0 .73.4 1.41 1.04 1.76l5 2.73c.6.33 1.32.33 1.92 0l5-2.73c.64-.35 1.04-1.03 1.04-1.76v-2.81l-6.04 3.3c-.6.33-1.32.33-1.92 0L5 13.18zm6.04-9.66l-8.43 4.6c-.69.38-.69 1.38 0 1.76l8.43 4.6c.6.33 1.32.33 1.92 0L21 10.09V16c0 .55.45 1 1 1s1-.45 1-1V9.59c0-.37-.2-.7-.52-.88l-9.52-5.19c-.6-.32-1.32-.32-1.92 0z"/></svg>
            </a>
            <a href="/logout" class="text-white w-12 h-12 my-4 mx-auto block fill-current">
                <svg xmlns="http://www.w3.org/2000/svg" width="41.823" height="38.338" viewBox="0 0 41.823 38.338">
                    <path id="iconmonstr-arrow-20" d="M22.7,1,17.737,5.928,28.5,16.691H0v6.957H28.5L17.737,34.41,22.7,39.338,41.824,20.169Z" transform="translate(0 -1)" fill="#fff"/>
                </svg>
            </a>
        </div>
        <slot></slot>
    </main>
</template>
