<script>
import MenuBar from './components/MenuBar.vue'
export default {
    components: {
        MenuBar,
    }
}
</script>

<template>
  <MenuBar />
  <router-view />
</template>