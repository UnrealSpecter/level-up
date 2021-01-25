<template>
  <!-- <div class="p-6 bg-indigo-800 min-h-screen flex justify-center items-center">
    <div class="w-full max-w-md">
      <logo class="block mx-auto w-full max-w-xs fill-white" height="50" />
      <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" @submit.prevent="submit">
        <div class="px-10 py-12">
          <h1 class="text-center font-bold text-3xl">Welcome Back!</h1>
          <div class="mx-auto mt-6 w-24 border-b-2" />
          <text-input v-model="form.email" :error="errors.email" class="mt-10" label="Email" type="email" autofocus autocapitalize="off" />
          <text-input v-model="form.password" class="mt-6" label="Password" type="password" />
          <label class="mt-6 select-none flex items-center" for="remember">
            <input id="remember" v-model="form.remember" class="mr-1" type="checkbox">
            <span class="text-sm">Remember Me</span>
          </label>
        </div>
        <div class="px-10 py-4 bg-gray-100 border-t border-gray-200 flex justify-between items-center">
          <a class="hover:underline" tabindex="-1" href="#reset-password">Forget password?</a>
          <loading-button :loading="sending" class="btn-indigo" type="submit">Login</loading-button>
        </div>
      </form>
    </div>
  </div> -->

  <main class="w-screen h-screen px-auto flex">
      <div class="w-1/4 mx-auto my-auto">
          <div class="flex flex-col">
              <div class="w-full bg-black rounded-lg p-10 shadow-lg">
                  <img src="https://i.imgur.com/HrIpONK.png" alt="Level up!" class="w-full">
              </div>
          </div>
          <form @submit.prevent="submit">
              <div class="w-full shadow-lg text-base font-bold flex mt-5 rounded-lg flex-baseline">
                  <span class="w-48 pl-10 my-auto rounded-lg uppercase bg-black p-2 text-white">email</span>
                  <input v-model="form.email" autofocus autocapitalize="off" type="email" class="ml-2 font-bold flex-grow outline-none p-2" placeholder="student@drenthecollege.nl"/>
              </div>
              <div class="w-full shadow-lg text-base font-bold flex mt-5 rounded-lg flex-baseline">
                  <span class="w-48 pl-10 my-auto rounded-lg uppercase bg-black p-2 text-white">wachtwoord</span>
                  <input v-model="form.password" type="password" class="ml-2 font-bold flex-grow outline-none p-2" placeholder=""/>
              </div>
              <button class="w-auto float-right shadow-lg text-base font-bold uppercase flex mt-5 p-2 rounded-lg flex-baseline outline-none">
                  <span class="ml-2 mr-8 my-auto">Inloggen</span>
                  <div class="h-6 w-6 bg-black text-white fill-current rounded-full ml-auto">
                      <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"/></svg>
                  </div>
              </button>
          </form>
      </div>
  </main>
</template>

<script>

export default {
  props: {
    errors: Object,
  },
  data() {
    return {
      sending: false,
      form: {
        email: 'johndoe@example.com',
        password: 'secret',
        remember: null,
      },
    }
  },
  methods: {
    submit() {
      const data = {
        email: this.form.email,
        password: this.form.password,
        remember: this.form.remember,
      }

      this.$inertia.post('/login', data, {
        onStart: () => this.sending = true,
        onFinish: () => this.sending = false,
      })
    },
  },
}
</script>
