<script>
import MenuBar from './components/MenuBar.vue'
export default {
  components: {
    MenuBar,
  }
}
</script>

<template>
  <MenuBar v-if="$route.path != '/Preparing'" />
  <router-view />
</template>