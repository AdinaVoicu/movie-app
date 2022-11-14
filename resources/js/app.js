import './bootstrap'
import { createApp } from 'vue'
import App from './layouts/App.vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faUser, faBars, faStar, faArrowLeft } from '@fortawesome/free-solid-svg-icons'
import VueLazyLoad from 'vue3-lazyload'

library.add(faUser, faArrowLeft, faBars, faStar)

import router from './routes/index.js'

const app = createApp(App)
app.use(router)
app.component('font-awesome-icon', FontAwesomeIcon)
app.use(VueLazyLoad)
app.mount('#app')