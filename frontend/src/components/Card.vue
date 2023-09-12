<script>
import axios from 'axios'

export default {
    props: {
        id: Number,
        vote: Number,
        team_name: String,
        project_name: String,
        project_description: String,
        project_space: String,
        description: String,
        imagelink: String,
    },
    data() {
        return {
            url: ""
        }
    },
    methods: {
        incrementVote(id) {
            this.url = "http://127.0.0.1:8000/api/projects/" + id + "/increment-vote"
            axios.post(this.url).then(function (response) {
                return response
            })
        }
    },
    mounted() {
    }
};
</script>

<template>
    <div class="card">
        <div>
            <img src="" alt="">
        </div>
        <div class="image-container">
            <img class="image" :src="imagelink" alt="Project Image">
        </div>
        <div class="info">
            <div class="project-name">{{ project_name }}</div>
            <div class="team-name">{{ team_name }}</div>
            <div class="description">{{ project_description }}</div>
            <div class="project-space">{{ project_space }}</div>
            <div class="description">{{ description }}</div>
            vote: {{ vote }}
            <button v-on:click="incrementVote(id)">投票</button>
        </div>
    </div>
</template>
  
<style scoped>
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    transition: transform 0.2s ease-in-out;
    max-width: 300px;
    /* Set a max width for the card */
    margin: 1rem;
    /* Add some margin */
    padding: 2rem;
    background-size: cover;
    background-image: url('src/assets/memopaper.jpg');
    box-shadow: 5px 5px 20px black;
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
  