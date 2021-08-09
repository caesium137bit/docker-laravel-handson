import { createRouter, createWebHistory } from 'vue-router'

import Home from './components/Home.vue'
import About from './components/About.vue'
import Contact from './components/Contact.vue'
import Gallery from './components/Gallery.vue'
import Quizzes from './components/Quizzes.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/about',
    name: 'about',
    component: About
  },
  {
    path: '/contact',
    name: 'contact',
    component: Contact
  },
  {
    path: '/gallery',
    name: 'gallery',
    component: Gallery
  },
  {
    path: '/quizzes',
    name: 'quizzes',
    component: Quizzes
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router