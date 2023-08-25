<script>
export default {
    props: {
        name: String,
        imagelink: String,
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
        <img class="image" :src="imagelink">
        <div class="info">
            <div class="name">{{ name }}</div>
            <div class="description">{{ description }}</div>
        </div>
    </div>
</template>


<style scoped>
.card {
    position: relative;
    width: clamp(200px,100%,45%);
    color: black;
    background-color: whitesmoke;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.5) -5px 5px 10px;
}

img {
    aspect-ratio: initial;
    width: 100%;
}

.info {
    box-sizing: border-box;
    padding: 0.5rem;
}

.name {
    font-size: x-large;
    margin-bottom: 0.5rem;
}

</style>