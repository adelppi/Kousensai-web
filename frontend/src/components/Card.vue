<script>
export default {
    props: {
        team_name: String,
        project_name: String,
        project_description: String,
        project_space: String,
        description: String,
        imagelink: String,
    },
};
</script>

<template>
    <div class="card">
        <div class="image-container">
            <img class="image" :src="imagelink" alt="Project Image">
        </div>
        <div class="info">
            <div class="project-name">{{ project_name }}</div>
            <div class="team-name">{{ team_name }}</div>
            <div class="description">{{ project_description }}</div>
            <div class="project-space">{{ project_space }}</div>
            <div class="description">{{ description }}</div>
        </div>
    </div>
</template>
  
<style scoped>
.card {
    display: flex;
    flex-direction: column;
    border: 2px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
    max-width: 300px;
    /* Set a max width for the card */
    margin: 1rem;
    /* Add some margin */
}

.image-container {
    position: relative;
    overflow: hidden;
    padding-top: 75%;
    /* 4:3 aspect ratio */
}

.image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.info {
    box-sizing: border-box;
    padding: 1rem;
}

.project-name {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.team-name {
    color: #666;
    margin-bottom: 0.5rem;
}

.project-description,
.project-space,
.description {
    margin-bottom: 0.5rem;
}

.description {
    color: #888;
}
</style>
  