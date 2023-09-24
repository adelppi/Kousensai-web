import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Introduction from '../views/Introduction.vue'
import Greeting from '../views/Greeting.vue'
import Brochure from '../views/Brochure.vue'
import Access from '../views/Access.vue'
import Vote from '../views/Vote.vue'
import Preparing from '../views/Preparing.vue'

const router = createRouter({
    history: createWebHistory(),
    base: '/',
    routes: [
        {
            path: '/',
            redirect: '/Preparing'
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
            path: '/Preparing',
            component: Preparing
        }
    ]
})

export default router