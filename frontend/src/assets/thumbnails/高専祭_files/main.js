import { createApp } from "/node_modules/.vite/deps/vue.js?v=6ee544a3"
import "/src/style.css"
import App from "/src/App.vue"
import router from "/src/router/index.js"

createApp(App)
    .use(router)
    .mount('#app')
