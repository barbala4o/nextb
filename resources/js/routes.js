import  Dashboard from './vue/dashboard';
import Login from './vue/login';

export default {
	mode: 'history',
	base: '/',
	fallback: false,
	routes: [
		{
			path: '/',
			component: Dashboard,
			name: 'Welcome',
			meta: {requiresAuth: true}
		},
		{
			path: '/login',
			component: Login,
			name: 'login',
			meta: {guest: true}
		},
	]
}