<template>
	<!-- <TheNav /> -->
	<div class="card-group">

		<div v-for="movie in movies.data" class="container-fluid">
			<div class="row">
				<div class="col-12 mt-3">
					<div class="card shadow shadow-inner rounded-2">
						<div class="card-horizontal">
							<div class="p-2">
								<img class=""
									v-lazy="{ src: movie.image, loading: 'storage/movies/empty.png', error: 'storage/movies/empty.png', delay: 200 }">
							</div>
							<div class="card-body d-flex flex-column">
								<span class="card-title fw-bold title">{{ movie.name }}</span>
								<p class="card-text">
									<font-awesome-icon class="main-color" icon="fa-solid fa-star" />
									{{ movie.rating }}
								</p>
								<p class="card-text">
									<span v-if="movie.directors"><b>Director:</b> {{ movie.directors }}</span>
								</p>
								<p class="card-text">
									<span v-if="movie.writers"><b>Writers: </b>{{ movie.writers }}</span>
								</p>
								<p class="card-text">
									<span v-if="movie.stars"><b>Stars: </b>{{ movie.stars }}</span>
								</p>
								<router-link :to="{ name: 'movies.details', params: { id: movie.id } }" tag="button"
									class="mt-auto btn btn-lg btn-block title bk-color fw-bold">View
									more</router-link>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>
		<Pagination class="pagination justify-content-center" :data="movies" @pagination-change-page="getMovies" />
	</p>
</template>
<script>
import { onMounted } from 'vue';
import useMovies from '@/composables/movies.js'
import { Bootstrap5Pagination } from 'laravel-vue-pagination';
export default {
	setup() {
		const { movies, getMovies } = useMovies()
		onMounted(getMovies)

		return { movies, getMovies }
	},
	components: {
		'Pagination': Bootstrap5Pagination
	}
}
</script>