<template>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title</title>
		<!-- @vite(['resources/sass/app.scss', 'resources/js/app.js'])
		@stack('scripts') -->
	</head>

	<body>
		<TheNav />
		<div id="app">
			<router-view></router-view>
		</div>
	</body>
</template>
<script>
import TheNav from '@/components/TheNav.vue'
export default {

	components: { TheNav }


}

</script>