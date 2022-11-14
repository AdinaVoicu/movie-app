import axios from 'axios'
import { ref } from 'vue'

export default function useMovies() {

	const movies = ref({})
	const movie = ref({})

	const getMovies = async (page = 1) => {
		await axios.get('/api/movies?page=' + page)
			.then(response => {
				movies.value = response.data;
			})
	}
	const getMovie = async (id) => {
		await axios.get('/api/movies/' + id)
			.then(response => {
				movie.value = response.data.data;
			})
	}

	return { movies, movie, getMovies, getMovie }
}