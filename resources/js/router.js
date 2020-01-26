import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: require('./pages/Home').default
        },
        {
            path: '/user',
            name: 'user',
            component: require('./pages/User').default
        }
    ]
})

export default router
