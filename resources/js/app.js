// import Vue from 'vue';
// import axios from 'axios';
//
// window.axios = axios;
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
//
// // Register all the Vue components
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
//
// // Boot the current Vue component
// const root = document.getElementById('app');
//
// // create the event bus
// window.eventBus = new Vue ();
//
// //istantiate the vue component
// const app = new Vue({
//     el: '#app',
// });

import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'

Vue.use(plugin)
Vue.mixin({ methods: { route: window.route } })

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)
