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
  <router-view v-slot="{ Component }">
    <transition name="fade">
      <component :is="Component" />
    </transition>
  </router-view>
</template>