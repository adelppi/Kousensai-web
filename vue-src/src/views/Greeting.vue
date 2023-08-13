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
            <h1>ごあいさつ</h1>
            <h2>こんにちは</h2>
        </div>
    </div>
</template>

<style scoped></style>