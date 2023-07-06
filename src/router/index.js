import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AreasView from '../views/AreasView.vue'
import BlogView from '../views/BlogView.vue'
import BlogdetalleView from '../views/BlogdetalleView.vue'
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
    path: '/BlogView',
    name: 'BlogView',
    component: BlogView
    },
    {
        path: '/BlogdetalleView',
        name: 'BlogdetalleView',
        component: BlogdetalleView
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
