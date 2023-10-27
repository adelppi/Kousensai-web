<script>
import axios from 'axios'
import Card from '../components/Card.vue'

export default {
    components: {
        Card
    },
    data() {
        return {
            extra: "",
            topThreeProjects: []
        }
    },
    methods: {
        fetchTopTenProjects() {
            axios.get(import.meta.env.VITE_API_URL + '/getTopTenProjects')
                .then(response => {
                    this.topThreeProjects = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchTopTenProjects()
        this.extra = import.meta.env.VITE_EXTRA
    }

}
</script>

<template>
    <body>
        <main>
            <div class="title">人気企画TOP10</div>
            <div class="project-container">
                <div v-for="(i, index) in topThreeProjects" :key="index">
                    <Card class="card" :id="i.id" :vote="i.vote" :team_name="i.team_name" :project_name="i.project_name"
                        :project_space="i.project_space" :project_description="i.project_description"
                        :imagePath="`${extra}/assets/thumbnails/${i.id}.png`" />
                </div>
            </div>
        </main>
    </body>
</template>

<style scoped>
.project-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
}
</style>