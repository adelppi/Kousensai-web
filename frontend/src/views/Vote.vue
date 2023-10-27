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
            <div class="title">人気企画投票</div>
            <h2>始まるまでしばしお待ちを....</h2>
            <!-- <div class="project-container">
                <Card class="card" v-for="(i, index) in topThreeProjects" :key="index" :id="i.id" :vote="i.vote"
                    :team_name="i.team_name" :project_name="i.project_name" :project_space="i.project_space"
                    :project_description="i.project_description" :imagePath="`/src/assets/nelnel.jpg`" />
            </div> -->
        </main>
    </body>
</template>

<style scoped>
</style>