import './bootstrap'
import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './layouts/App.vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faUser, faBars, faStar, faArrowLeft } from '@fortawesome/free-solid-svg-icons'
import VueLazyLoad from 'vue3-lazyload'

library.add(faUser, faArrowLeft, faBars, faStar)

import MoviesIndex from '@/components/Main.vue'
import MoviesDetails from '@/components/Details.vue'
import { create } from 'lodash'

const routes = [
	{ path: '/', component: MoviesIndex },
	{ path: '/movies/details/:id', name: 'movies.details', component: MoviesDetails, meta: { title: 'Details' } }
]
const router = createRouter({
	history: createWebHistory(),
	routes
})

const app = createApp(App)
app.use(router)
app.component('font-awesome-icon', FontAwesomeIcon)
app.use(VueLazyLoad)
app.mount('#app')