import './bootstrap'
import { createApp } from 'vue'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faUser } from '@fortawesome/free-solid-svg-icons'

library.add(faUser)

import MoviesIndex from './components/App.vue'

const app = createApp({})
app.component('moviesindex', MoviesIndex)
app.component('font-awesome-icon', FontAwesomeIcon)
app.mount('#app')