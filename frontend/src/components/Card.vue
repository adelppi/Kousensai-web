<script>
export default {
    props: {
        team_name: String,
        project_name: String,
        project_description: String,
        project_space: String,
        description: String,
        imagelink: String
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
            <div class="project-name">{{ project_name }}</div>
            <div class="team-name">{{ team_name }}</div>
            <div class="description">{{ project_description }}</div>
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

.project-name {
    font-size: x-large;
    margin-bottom: 0.5rem;
}

</style>