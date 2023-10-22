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
    emits: ['closeModuleEvent'],
    mounted() {
        this.getVotedProjects()
        this.checkIfVoted()
    }
};
</script>

<template>
    <link rel="stylesheet"
	href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,1,0" />

    <div class="module" @click="$emit('cardSelected', shownId)">
        <div class="module-header">
            <div class="project-name">{{ project_name }}</div>
            <button class="close-module-button" @click="$emit('closeModuleEvent')">
                <span class="material-symbols-outlined"> close </span>
            </button>
        </div>
        <div class="module-body">
            <div class="image-container">
                <img class="image" :src="imagePath" alt="Project Image">
            </div>
            <div class="team-name">{{ team_name }}</div>
            <div class="project-description">{{ project_description }}</div>
            <div class="button-container">
                <div v-if="isVoteButtonDisabled">
                    <button v-on:click.stop="decrementVote(id)" class="vote-button button-voted">
                        <span class="material-symbols-outlined">favorite</span>
                    </button>
                </div>
                <div v-else>
                    <button v-on:click.stop="incrementVote(id)" class="vote-button">
                        <span class="material-symbols-outlined">favorite</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" @click="$emit('closeModuleEvent')"></div>
</template>
  
<style scoped>

.module {
    box-sizing: border-box;
    position: fixed;
    display: flex;
    flex-direction: column;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-size: cover;
    background-image: url('../assets/memopaper.png');
    padding: 1rem 1.5rem 1rem 1.5rem;
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

.module-header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

.project-name {
    width: 100%;
    font-family: 'Mochiy Pop One';
    color: rgb(0, 0, 0);
}

.close-module-button {
    height: 2rem;
    width: 2rem;
    border: none;
    background: none;
}

.close-module-button span {
    font-weight: bolder;
    font-size: 2rem;
}

.module-body {
    margin-top: 0.5rem;
}

.image-container {
    position: relative;
    height: 31vh;
    width: 100%;
    margin-bottom: 0.5rem;
    overflow: hidden;
}

.image {
    height: 100%;
    width: 100%;
    object-fit: contain;
}

.team-name {
    color: #666;
    margin-bottom: 0.5rem;
}

.project-space {
    margin-bottom: 0.5rem;
}

.description {
    color: #888;
}

.button-container {
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
}

.vote-button {
    box-sizing: border-box;
    height: 2rem;
    width: 2rem;
    background-color: transparent;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 3px 3px 0 3px ;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    transition: 0.1s ease;
}

.vote-button span {
    font-size: 1.5rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
}

.button-voted {
    color: #ff8e8e;
    transition: 0.1s ease;
}

@media only screen and (max-width: 800px) {
    .module {
        max-width: 90vw;
        max-height: 80vh;
        font-size: 1rem;
    }

    .module * {
        font-size: 1rem;
    }
}

</style>
  