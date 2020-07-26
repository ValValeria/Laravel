import Vue from 'vue'
import VueRouter, { RouteConfig } from 'vue-router'
import Banner from '../views/Home.vue';
import Post from '../components/Post.vue';
import SignUp from '../components/SignUp.vue';
import Products from '../components/Products.vue';
import Admin from '../views/Admin.vue';
import AboutMe from '../views/AboutMe.vue';
import Login from '../components/Login.vue';


Vue.use(VueRouter)

const routes: Array<RouteConfig> = [
  {
    path:'/',
    component:Banner
  },
  {
    path:'/articles/:title',
    component:Post
  },
  {
    path:'/signup',
    component:SignUp
  },
  {
    path:'/products',
    component:Products
  },
  {
    path:'/adminpage',
    component:Admin
  },
  {
    path:'/aboutme',
    component:AboutMe
  },
  {
    path:'/login',
    component:Login
  },
  {
    path:'*',
    redirect:'/'
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
