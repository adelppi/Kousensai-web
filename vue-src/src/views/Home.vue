<script>
import MenuBar from '../components/MenuBar.vue'
export default {
    components: {
        MenuBar,
    }
}
</script>

<template>
    <div class="layout">
        <div class="left-column">
            <MenuBar />
        </div>
        <div class="right-column">
            <h1>ホーム</h1>
            <h2>最初に開く画面</h2>
        </div>
    </div>
</template>

<style scoped></style>