<script>
import MenuBar from './components/MenuBar.vue'
import MenuBarMobile from './components/MenuBarMobile.vue'
export default {
	components: {
		MenuBar,
		MenuBarMobile,
	},
	data() {
		return {
			isMobile: false,
		}
	},
	methods: {
		checkIfMobile() {
			this.isMobile = window.innerWidth <= 800;
		}
	},
	mounted() {
		this.checkIfMobile()
		window.addEventListener("resize", this.checkIfMobile);
	}
}
</script>

<template>
	<MenuBar :currentPage="$route.path" v-if="$route.path != '/Preparing' && !isMobile" />
	<MenuBarMobile :currentPage="$route.path" v-if="$route.path != '/Preparing' && isMobile" />
	<router-view />
</template>