import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import 'aos/dist/aos.css' // Import AOS CSS
import AOS from 'aos'

/* Import FontAwesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* Import FontAwesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* Import all FontAwesome icons */
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'

/* Add all icons to the library */
library.add(fas, far, fab)

const app = createApp(App)

app.use(router)
AOS.init()
app.component('fai', FontAwesomeIcon)

app.mount('#app')
