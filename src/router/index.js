import { createRouter, createWebHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'
import NotFound from '../views/NotFound.vue'
import ProjectView from '../views/ProjectView.vue'
import CurriculumVitae from '../views/CurriculumVitae.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('@/views/HomeView.vue'), 
      meta: { layout : 'DefaultLayout'}
    },
    {
      path: '/:pathMatch(.*)*',
      name: 'NotFound',
      component: NotFound,
    },
    {
      path: '/projects',
      name: 'projects',
      component: ProjectView,
      meta: { layout : 'DefaultLayout'}
    },
    {
      path: '/curriculum-vitae',
      name: 'cv',
      component: CurriculumVitae,
      meta: { layout : 'CVLayout'}
    }
  ],
})

export default router
