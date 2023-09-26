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
            this.url = import.meta.env.VITE_API_URL + `/${id}/increment-vote`
            axios.post(this.url)
            this.pushVariableToLocalStorage(id)
            this.checkIfVoted()
        },
        decrementVote(id) {
            this.getVotedProjects()
            this.url = import.meta.env.VITE_API_URL + `/${id}/decrement-vote`
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
        onCardClicked(event) {
            event.preventDefault();

            const selectedCard = event.currentTarget;

            const projectName = selectedCard.getElementsByClassName('project-name')[0].innerText;
            console.log(`Memo Clicked: ${projectName}`);
            console.log(selectedCard);

            selectedCard.classList.toggle("card-selected");
        }
    },
    mounted() {
        this.getVotedProjects()
        this.checkIfVoted()
    }
};
</script>

<template>
    <div class="card" v-on:click="onCardClicked($event)">
        <div class="pin-container" :style="child_style['containerStyle']">
            <img src="../assets/pin.png" width="50" alt="pin" :style="child_style['imageStyle']">
        </div>
        <div class="image-container">
            <img class="image" src="../assets/nelnel.jpg" alt="Project Image">
        </div>
        <div class="info">
            <div class="project-name">{{ project_name }}</div>
            <div class="team-name">{{ team_name }}</div>
            <div class="description">{{ project_description }}</div>
            <div class="project-space">{{ project_space }}</div>
            <div class="description">{{ description }}</div>
            <div v-if="isVoteButtonDisabled">
                <button v-on:click.stop="decrementVote(id)" class="button-voted">投票取り消し</button>
            </div>
            <div v-else>
                <button v-on:click.stop="incrementVote(id)" class="button">投票する</button>
            </div>
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
    margin: 1rem;
    /* Add some margin */
    padding: 0 2rem 2rem 2rem;
    background-size: cover;
    background-image: url('../assets/memopaper.png');
    box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 0.4);
}

.card-selected {
    transform: none !important;
}

.pin-container {
    position: relative;
    margin: -1rem auto 1rem auto;
    padding: 0 0 0 0;
    width: -moz-fit-content;
    width: fit-content;
    aspect-ratio: 1 / 1;
    z-index: 50;
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
.project-space,
.description {
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
  