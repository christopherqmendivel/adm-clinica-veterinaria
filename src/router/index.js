// router/index.js


import { createRouter, createWebHistory } from 'vue-router';


import Home from '../views/Home.vue';
import Clinicas from '../views/Clinicas.vue';
import Empleados from '../views/Empleados.vue';


const routes = [
  { path: '/', component: Home },
  { path: '/clinicas', component: Clinicas },
  { path: '/empleados', component: Empleados },
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
