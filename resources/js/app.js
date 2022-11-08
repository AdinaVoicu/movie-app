import './bootstrap'
import { createApp } from 'vue'

import MoviesIndex from './components/App.vue'

const app = createApp({})
app.component('moviesindex', MoviesIndex)
app.mount('#app')