<script>
export default {
	// reactive state
	data() {
		return {

		}
	},

	// functions that mutate state of nav
	methods: {
		openNav() {
			document.getElementById("theNav").style.width = "100%";
		},
		closeNav() {
			document.getElementById("theNav").style.width = "0%";
		}
	},

	// lifecycle hooks
	mounted() {
		console.log(`mounted`)
	}
}
</script>
<template>

	<div id="theNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn ps-2 pt-2 h2" @click="closeNav">
			<font-awesome-icon icon="fa-solid fa-arrow-left" />
		</a>
		<div class="overlay-content">
			<p>This is a full screen menu<br><br>Close me from the<br>upper "Back Arrow"</p>
		</div>
	</div>

	<!-- <span style="font-size:30px;cursor:pointer" @click="openNav">&#9776; open</span> -->

	<div class="row menu">
		<div @click="openNav" class="col ps-4 pt-2 h2 text-white">
			<font-awesome-icon icon="fa-solid fa-bars" />
		</div>
		<div class="col text-center pt-2">
			<img src="/build/assets/logo-imdb.png" style="height: 30px;">
		</div>
		<div class="col text-end pe-4 pt-2 h2 text-white">
			<font-awesome-icon icon="fa-solid fa-user" />
		</div>
	</div>



	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-warning">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
			aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<font-awesome-icon icon="fa-solid fa-user" />
		</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
		</div>
	</nav> -->
</template>
