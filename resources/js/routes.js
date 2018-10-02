import Dashboard from './pages/Dashboard.vue'
import About from './pages/About.vue'
import NotFound from './pages/NotFound.vue'
import Login from './pages/Login.vue'

const routes = [
  {
    path: '*',
    redirect: {
      path: '/404'
    }
  },
  {
    path: '/404',
    name: 'NotFound',
    component: NotFound,
    meta: {
      public: true,
    },
  },
  {
    path: '/',
    name: 'Login',
    component: Login,
    meta: {
      public: true,
    },
  },
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: Dashboard
  },
  {
    path: '/about',
    name: 'About',
    component: About
  }
]

// exports the routes const
export default routes;
