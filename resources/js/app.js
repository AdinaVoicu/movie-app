// app.js
/* import './bootstrap';

import { createApp } from 'vue'

import App from './components/App.vue'

createApp(App).mount("#app")
 */

import { createApp } from 'vue'

import MoviesIndex from './components/App.vue'

const app = createApp({})
app.component('moviesindex', MoviesIndex)
app.mount('#app')