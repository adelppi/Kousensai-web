<script>
import axios from 'axios'

export default {
    props: {
        id:Number,
        shownId: Number,
        vote: Number,
        team_name: String,
        project_name: String,
        project_description: String,
        project_space: String,
        imagePath: String
    },
    data() {
        return {
            url: "",
            isVoteButtonDisabled: false,
            votedProjects: []
        }
    },
    methods: {
        incrementVote(id) {
            this.getVotedProjects()
            this.url = import.meta.env.VITE_API_URL + `/projects/${id}/increment-vote`
            axios.post(this.url)
            this.pushVariableToLocalStorage(id)
            this.checkIfVoted()
        },
        decrementVote(id) {
            this.getVotedProjects()
            this.url = import.meta.env.VITE_API_URL + `/projects/${id}/decrement-vote`
            axios.post(this.url)
            this.deleteVariableFromLocalStorage(id)
            this.checkIfVoted()
        },
        getVotedProjects() {
            const storedData = localStorage.getItem('votedProjects');
            if (storedData) {
                this.votedProjects = JSON.parse(storedData);
            }
        },
        pushVariableToLocalStorage(id) {
            this.votedProjects.push(id)
            localStorage.setItem('votedProjects', JSON.stringify(this.votedProjects));
        },
        deleteVariableFromLocalStorage(id) {
            this.votedProjects = this.votedProjects.filter(item => item !== id);
            localStorage.setItem('votedProjects', JSON.stringify(this.votedProjects));
        },
        checkIfVoted() {
            if (this.votedProjects.includes(this.id)) {
                this.isVoteButtonDisabled = true
            } else {
                this.isVoteButtonDisabled = false
            }
        },
    },
    emits: ['overlayClicked'],
    mounted() {
        this.getVotedProjects()
        this.checkIfVoted()
    }
};
</script>

<template>
    <div class="module" @click="$emit('cardSelected', shownId)">
        {{ id }}
        <div class="image-container">
            <img class="image" :src="imagePath" alt="Project Image">
        </div>
        <div class="info">
            <div class="project-name">{{ project_name }}</div>
            <div class="team-name">{{ team_name }}</div>
            <div class="project-description">{{ project_description }}</div>
            <div class="project-space">{{ project_space }}</div>
            <div v-if="isVoteButtonDisabled">
                <button v-on:click.stop="decrementVote(id)" class="button-voted">投票取り消し</button>
            </div>
            <div v-else>
                <button v-on:click.stop="incrementVote(id)" class="button">投票する</button>
            </div>
        </div>
    </div>
    <div class="overlay" @click="$emit('overlayClicked')"></div>
</template>
  
<style scoped>

.module {
    position: fixed;
    display: flex;
    flex-direction: column;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-size: cover;
    background-image: url('../assets/memopaper.png');
    padding: 2rem;
    border: 1px solid #ccc;
    z-index: 9999;
    width: 80%;
    max-width: 400px;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    cursor: pointer;
    overflow: hidden;
    touch-action: none;
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
    font-family: 'Mochiy Pop One';
    font-size: 1.75rem;
    color: rgb(0, 0, 0);
    margin-bottom: 0.5rem;
}

.team-name {
    color: #666;
    margin-bottom: 0.5rem;
}

.project-description,
.project-space {
    margin-bottom: 0.5rem;
}

.description {
    color: #888;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0074d9;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'Mochiy Pop One';
    font-size: 1.25rem;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.1s ease;
}

.button:hover {
    background-color: #0056b3;
}

.button-voted {
    display: inline-block;
    padding: 10px 20px;
    background-color: #7e7e7e;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'Mochiy Pop One';
    font-size: 1.25rem;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.1s ease;
}

.button-voted:hover {
    background-color: #484848;
}

</style>
  