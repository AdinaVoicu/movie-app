import './bootstrap'
import { createApp } from 'vue'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faUser, faBars, faStar, faArrowLeft } from '@fortawesome/free-solid-svg-icons'
import VueLazyLoad from 'vue3-lazyload'
import { Bootstrap5Pagination } from 'laravel-vue-pagination';

library.add(faUser, faArrowLeft, faBars, faStar)

import MoviesIndex from '@/components/Main.vue'

const app = createApp({})
app.component('moviesindex', MoviesIndex)
app.component('font-awesome-icon', FontAwesomeIcon)
app.component('Pagination', Bootstrap5Pagination)
app.use(VueLazyLoad)
app.mount('#app')