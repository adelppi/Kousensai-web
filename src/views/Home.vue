<script>
import MenuBar from '../components/MenuBar.vue'
export default {
    components: {
        MenuBar,
    }
}
</script>

<template>
    <MenuBar />
    <h1>てすとぺえじ</h1>
    <h2>あんどれいのてすと</h2>
    <RouterLink to="/Test">
        <span class="largeButton">
            わーい
        </span>
    </RouterLink>
</template>

<style scoped>
.largeButton {
    padding: 18px 30px;
    color: white;
    background: linear-gradient(to bottom right, #f09e41, #e6488f, #4ab1d0);
    background-size: 150% auto;
    border-radius: 8px;
    border: 2.5px solid transparent;
    border-color: #ffffff;
    font-size: 35px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    cursor: pointer;
    transition: 0.5s;
}

.largeButton:hover {
    background-position: right;
    border-color: #646cff;
}
</style>