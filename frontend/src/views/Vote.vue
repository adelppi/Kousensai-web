<script>
import axios from 'axios'
import Card from '../components/Card.vue'

export default {
    components: {
        Card
    },
    data() {
        return {
            topThreeProjects: []
        }
    },
    methods: {
        fetchTopThreeProjects() {
            axios.get(import.meta.env.VITE_API_URL + '/getTopThreeProjects')
                .then(response => {
                    this.topThreeProjects = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchTopThreeProjects()
    }

}
</script>

<template>
    <body>
        <main>
            <div class="title">
                <h1>人気企画投票</h1>
            </div>
            <div class="project-container">
                <Card class="card" v-for="(i, index) in topThreeProjects" :key="index" :id="i.id" :vote="i.vote"
                    :team_name="i.team_name" :project_name="i.project_name" :project_space="i.project_space"
                    :project_description="i.project_description" :imagePath="`/src/assets/nelnel.jpg`" />
            </div>
        </main>
    </body>
</template>

<style scoped>
.project-container {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    background-image: url('../assets/corkboard.png');
    border: 10px solid black;
    border-image-source: url('../assets/corkboardborder.png');
    border-image-repeat: repeat;
    border-image-slice: 200;
    border-image-width: 25px;
}
</style>