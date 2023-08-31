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
  <router-view v-slot="{ Component }">
    <transition name="v" mode=”out-in”>
      <Component :is="Component" />
    </transition>
  </router-view>
</template>

<style scoped>
.v-enter {
  transform: translate(-100px, 0);
  opacity: 0;
}
.v-enter-to {
  opacity: 1;
}
.v-enter-active {
  transition: all 1s 0s ease;
}
.v-leave {
  transform: translate(0, 0);
  opacity: 1;
}
.v-leave-to {
  transform: translate(100px, 0);
  opacity: 0;
}
.v-leave-active {
  transition: all .5s 0s ease;
}
</style>