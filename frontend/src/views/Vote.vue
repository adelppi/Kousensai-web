<script>
import axios from 'axios'
import Card from '../components/Card.vue'
import Module from '../components/Module.vue'

export default {
    components: {
        Card,
        Module,
    },
    data() {
        return {
            extra: "",
            topTenProjects: [],
            shownId: {
                type: Number,
                default: null
            },
            moduleShown: false,
        }
    },
    methods: {
        fetchTopTenProjects() {
            axios.get(import.meta.env.VITE_API_URL + '/getTopTenProjects')
                .then(response => {
                    this.topTenProjects = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        },
        showModule(Number) {
            this.shownId = Number;
            console.log(this.shownId)
            this.moduleShown = true;
        },
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
                <div v-for="(i, index) in topTenProjects" :key="index">
                <Card class="card" :id="i.id" :vote="i.vote" :team_name="i.team_name" :project_name="i.project_name"
                    :project_space="i.project_space" :project_description="i.project_description" :index="index"
                    :imagePath="`${extra}/assets/thumbnails/${i.id}.png`" @card-selected="showModule"/>
                </div>
            </div>
            <Module v-if="moduleShown" @close-module-event="moduleShown = false"
                :id="topTenProjects[shownId].id" :shownId="shownId" :vote="topTenProjects[shownId].vote"
                :team_name="topTenProjects[shownId].team_name" :project_name="topTenProjects[shownId].project_name"
                :project_space="topTenProjects[shownId].project_space"
                :project_description="topTenProjects[shownId].project_description"
                :imagePath="`${extra}/assets/thumbnails/${topTenProjects[shownId].id}.png`" />
        </main>
    </body>
</template>

<style scoped>

.project-container {
    margin-top: 2rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
    gap: 1rem;
}

</style>