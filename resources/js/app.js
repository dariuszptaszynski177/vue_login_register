require('./bootstrap');
   
window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
  
Vue.use(VueRouter);

import { isLoggedIn } from "./utils/jwt";


import Login from './components/auth/Login';
import Register from './components/auth/Register';

import Home from './components/static/Home';

const routes = [
    {
        path: '/login',
        name: 'login',
        component: Login,
    },

    {
        path: '/register',
        name: 'register',
        component: Register,
    },

    {
        path: '/home',
        name: 'home',
        component: Home,
    },
]
  
const router = new VueRouter({
    mode: 'history', //removes # (hashtag) from url
    base: '/',
    fallback: true, //router should fallback to hash (#) mode when the browser does not support history.pushState
    routes 
})
  
const app = new Vue({
  router
}).$mount('#app')

