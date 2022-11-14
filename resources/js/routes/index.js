
import { createRouter, createWebHistory } from 'vue-router'


import MoviesIndex from '@/components/Main.vue'
import MoviesDetails from '@/components/Details.vue'


const routes = [
	{
		path: '/',
		name: 'movies.index',
		component: MoviesIndex
	},
	{
		path: '/movies/details/:id',
		name: 'movies.details',
		component: MoviesDetails
	}
]


export default createRouter({
	history: createWebHistory(),
	routes
})