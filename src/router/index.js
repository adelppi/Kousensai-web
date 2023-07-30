import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Greet from '../views/Greet.vue'
import Test from '../views/Test.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/Home',
            component: Home
        },
        {
            path: '/Greet',
            component: Greet
        },
        {
            path: '/Test',
            component: Test
        }
    ]
})

export default router