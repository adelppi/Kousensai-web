<script>
export default {
    props: {
        name: String,
        description: String
    },
    data() {
        return {
        }
    },
    created() {
    }
}
</script>

<template>
    <div class="card">
        <h1>{{ name }}</h1>
        <h2>{{ description }}</h2>
    </div>
</template>


<style scoped>
.card {
    width: 10rem;
    height: 10rem;
    color: black;
    background-color: whitesmoke;
}
</style>