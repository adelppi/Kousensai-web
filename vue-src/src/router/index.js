import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Introduction from '../views/Introduction.vue'
import Greeting from '../views/Greeting.vue'
import Brochure from '../views/Brochure.vue'
import Access from '../views/Access.vue'
import Vote from '../views/Vote.vue'
import Test from '../views/Test.vue'

const router = createRouter({
    history: createWebHistory(),
    base: '/Kousensai-web/',
    routes: [
        {
            path: '/Kousensai-web',
            redirect: '/Home'
        },
        {
            path: '/Home',
            component: Home
        },
        {
            path: '/Introduction',
            component: Introduction
        },
        {
            path: '/Greeting',
            component: Greeting
        },
        {
            path: '/Brochure',
            component: Brochure
        },
        {
            path: '/Access',
            component: Access
        },
        {
            path: '/Vote',
            component: Vote
        },
        {
            path: '/Test',
            component: Test
        }
    ]
})

export default router