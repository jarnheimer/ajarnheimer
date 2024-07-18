import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/kontakt',
      name: 'contact',
      component: () => import('../views/ContactView.vue')
    },
    {
      path: '/kompetens',
      name: 'competence',
      component: () => import('../views/CompetencesView.vue')
    },
    {
      path: '/forelasningar',
      name: 'presentations',
      component: () => import('../views/PresentationsView.vue')
    },
    {
      path: '/kurser',
      name: 'courses',
      component: () => import('../views/CoursesView.vue')
    }
  ]
})

export default router
