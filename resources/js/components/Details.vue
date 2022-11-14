<template>
	<div class="card-group">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12 mt-3 pt-5">
					<div class="card shadow shadow-inner rounded-2">
						<div class="card-horizontal">
							<div class="p-2">
							</div>
							<div class="card-body d-flex flex-column">
								<span class="card-title fw-bold title">{{ movie.name }}</span>
								<p class="card-text">
									<font-awesome-icon class="main-color" icon="fa-solid fa-star" />
									{{ movie.rating }}
								</p>
								<p class="card-text">
									<span v-if="movie.directors"><b>Director: </b> {{ movie.directors }}</span>
								</p>
								<p class="card-text">
									<span v-if="movie.writers"><b>Writers: </b>{{ movie.writers }}</span>
								</p>
								<p class="card-text">
									<span v-if="movie.stars"><b>Stars: </b>{{ movie.stars }}</span>
								</p>
								<p class="card-text">
									<span v-if="movie.description"><b>Description:<br></b>{{ movie.description }}</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import { onMounted } from 'vue';
import { useRoute } from 'vue-router';
import useMovies from '@/composables/movies.js'
export default {
	setup() {
		const { movie, getMovie } = useMovies()
		const route = useRoute()
		onMounted(() => {
			getMovie(route.params.id)
		})

		return { movie }
	},
}
</script>