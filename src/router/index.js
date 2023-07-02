import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AreasView from '../views/AreasView.vue'
import NotFoundView from '../views/NotFoundView'
const routes = [
{
path: "/",
name: "HomeView",
component:HomeView
},

{
path: '/AreasView',
name: 'AreasView',
component: AreasView
},

{ 
path: '/:pathMatch(.*)*',
name: 'NotFoundView',
component: NotFoundView 
}
]
const router = createRouter({
history: createWebHistory(process.env.BASE_URL),
routes
})
export default router
