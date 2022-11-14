<template>

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