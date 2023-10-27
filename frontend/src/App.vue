<script>
import MenuBar from './components/MenuBar.vue'
import MenuBarMobile from './components/MenuBarMobile.vue'
import Footer from './components/Footer.vue'
export default {
	components: {
		MenuBar,
		MenuBarMobile,
		Footer
	},
	data() {
		return {
			isMobile: false,
		}
	},
	methods: {
		checkIfMobile() {
			this.isMobile = window.innerWidth <= 950;
		}
	},
	mounted() {
		this.checkIfMobile()
		window.addEventListener("resize", this.checkIfMobile);
	}
}
</script>

<template>
	<link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
	
	<MenuBar :currentPage="$route.path" v-if="$route.path != '/Preparing' && !isMobile" />
	<MenuBarMobile :currentPage="$route.path" v-if="$route.path != '/Preparing' && isMobile" />
	<router-view />
	<Footer></Footer>
</template>