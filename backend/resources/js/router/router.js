import Vue from 'vue'
import VueRouter from 'vue-router'

import ExampleComponent from '../components/ExampleComponent.vue'
import ExampleComponenttwo from '../components/ExampleComponenttwo.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: ExampleComponent
  },
  {
    path: '/about',
    name: 'about',
    component: ExampleComponenttwo
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router