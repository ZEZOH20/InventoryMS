import './bootstrap';
/*import { createApp } from 'vue/dist/vue.esm-bundler.js';
// import the root component App from a single-file component.
import App from "./components/app.vue";

const app = createApp(App).mount('#app');
/*app.component('example-Component',exampleComponent);
app.mount(rootContainer:'#app');*/
require('./bootstrap');

import Vue from 'vue';
import App from '../components/app.vue';

const app = new Vue({
    el: '#app',
    components: { App }
});
