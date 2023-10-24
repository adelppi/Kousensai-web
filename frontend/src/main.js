import { createApp } from 'vue'
import './style.css'
import 'budoux/module/webcomponents/budoux-ja';
import App from './App.vue'
import router from './router'

createApp(App)
    .use(router)
    .mount('#app')
