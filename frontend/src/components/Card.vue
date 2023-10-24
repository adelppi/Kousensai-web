<script>
import axios from 'axios'

export default {
    props: {
        id: Number,
        index: Number,
        vote: Number,
        team_name: String,
        project_name: String,
        imagePath: String,
        child_style: {
            type: Object,
            required: false,
            default: {
                'containerStyle': {
                    'transform': 'rotate(45deg)'
                },
                'imageStyle': ''
            }
        }
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
        }
    },
    mounted() {
        this.getVotedProjects()
        this.checkIfVoted()
    }
};
</script>

<template>
    <div class="card" @click="$emit('cardSelected', index)">
        <div class="pin-container" :style="child_style['containerStyle']">
            <img src="../assets/pin.png" width="50" alt="pin" :style="child_style['imageStyle']">
        </div>
        <div class="image-container">
            <img class="image" :src="imagePath" alt="Project Image">
        </div>
        <div class="info">
            <div class="project-name"><budoux-ja>{{ project_name }}</budoux-ja></div>
        </div>
    </div>
</template>
  
<style scoped>
/* 'Mochiy Pop One' */
@import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap');

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    transition: transform 0.2s ease-in-out;
    max-width: 300px;
    /* Set a max width for the card */
    /* Add some margin */
    padding: 1.5rem 1rem 1rem 1rem;
    background-size: cover;
    background-image: url('../assets/memopaper.png');
    box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 0.4);
    cursor: pointer;
}

.pin-container {
    box-sizing: border-box;
    position: fixed;
    top: -1.5rem;
    left: 50%;
    padding: 0 0 0 0;
    width: 3rem;
    height: 3rem;
    z-index: 50;
}

.pin-container img {
    height: 100%;
    width: 100%;
}

.image-container {
    box-sizing: border-box;
    position: relative;
    height: fit-content;
    padding: 1rem;
}

.image {
    /* position: absolute;
    top: 0;
    left: 0; */
    width: 100%;
    /* height: 100%; */
    /* object-fit: cover; */
}

.info {
    box-sizing: border-box;
    /* padding: 1rem; */
}

.project-name {
    font-family: 'Mochiy Pop One';
    font-size: 1.75rem;
    color: rgb(0, 0, 0);
    margin-bottom: 0.5rem;
}

@media only screen and (max-width: 800px) {

    .card {
        max-width: 30vw;
        padding: 1rem 0.5rem 0.5rem 0.5rem;
    }

    .image-container {
        padding: 0;
    }

    .pin-container {
        box-sizing: border-box;
        position: fixed;
        top: -1rem;
        left: 50%;
        padding: 0 0 0 0;
        width: 1.5rem;
        height: 1.5rem;
        z-index: 50;
    }

    .project-name {
        font-size: 0.8rem;
    }
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
  