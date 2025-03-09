import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import 'aos/dist/aos.css' // Import AOS CSS
import AOS from 'aos'

const app = createApp(App)

app.use(router)
AOS.init()


app.mount('#app')
