import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Introduction from '../views/Introduction.vue'
import Greeting from '../views/Greeting.vue'
import Brochure from '../views/Brochure.vue'
import Access from '../views/Access.vue'
import Vote from '../views/Vote.vue'
import LostFound from '../views/LostFound.vue'
import Admin from '../views/Administrator.vue'
import Preparing from '../views/Preparing.vue'
import Help from '../views/Help.vue'
import NotFound from '../views/NotFound.vue'

const router = createRouter({
    history: createWebHistory(),
    scrollBehavior() {
        return new Promise((resolve) => {
            resolve({ left: 0, top: 0 })
        })
    },
    base: '/',
    routes: [
        {
            path: '/',
            redirect: '/Home'
        },
        {
            path: '/wordpress',
            redirect: '/Preparing'
        },
        {
            path: '/Preview',
            redirect: '/Home'
        },
        {
            path: '/Home',
            component: Home
        },
        {
            path: '/Introduction/:state?',
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
            path: '/LostFound',
            component: LostFound
        },
        {
            path: '/Admin/:password?',
            component: Admin
        },
        {
            path: '/Help',
            component: Help
        },
        {
            path: '/Preparing',
            component: Preparing
        },
        {
            path: '/:catchAll(.*)',
            component: NotFound
        }
    ]
})

export default router