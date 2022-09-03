//require('./bootstrap');

import { createApp } from "vue/dist/vue.esm-bundler";
import ProductsGrid from './components/ProductsGrid.vue'

const app = createApp({})
app.component('products-grid', ProductsGrid);
app.mount('#app')