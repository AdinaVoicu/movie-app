<template>
	<TheNav />
	<div class="card-group">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12 mt-3">
					<div class="card shadow shadow-inner rounded-2">
						<div class="card-horizontal">
							<div class="p-2">
								<img class="" src="storage/movies/space-force.jpg" alt="Card image cap">
							</div>
							<div class="card-body d-flex flex-column">
								<span class="card-title fw-bold title">Movie title</span>
								<p class="card-text">
									<font-awesome-icon class="main-color" icon="fa-solid fa-star" />
									Stars
								</p>
								<p class="card-text">Artists</p>
								<button type="button" class="mt-auto btn btn-lg btn-block title bk-color fw-bold">View
									more</button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import TheNav from '@/components/TheNav.vue'
export default {
	components: { TheNav }
}
</script>