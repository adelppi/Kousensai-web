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
                <div v-for="(i, index) in topTenProjects" :key="index" class="card">
                    <img v-if="index === 0" class="medal" src="../assets/medal_1st.png">
                    <img v-if="index === 1" class="medal" src="../assets/medal_2nd.png">
                    <img v-if="index === 2" class="medal" src="../assets/medal_3rd.png">
                    <span v-if="!(index in [0, 1, 2])" style="font-size: 1.5rem;">{{ index + 1 }}位</span>
                    <Card :id="i.id" :vote="i.vote" :team_name="i.team_name" :project_name="i.project_name"
                        :project_space="i.project_space" :project_description="i.project_description" :index="index"
                        :project_floor="i.project_floor" :imagePath="`${extra}/assets/thumbnails/${i.id}.png`"
                        @card-selected="showModule" />
                    <span class="vote">{{ i.vote }}票</span>
                </div>
            </div>
            <Module v-if="moduleShown" @close-module-event="moduleShown = false" :id="topTenProjects[shownId].id"
                :shownId="shownId" :vote="topTenProjects[shownId].vote" :team_name="topTenProjects[shownId].team_name"
                :project_name="topTenProjects[shownId].project_name" :project_space="topTenProjects[shownId].project_space"
                :project_description="topTenProjects[shownId].project_description"
                :imagePath="`${extra}/assets/thumbnails/${topTenProjects[shownId].id}.png`" />
        </main>
    </body>
</template>

<style scoped>
.medal {
    position: absolute;
    width: 8rem;
    z-index: 1;
}

.project-container {
    margin-top: 2rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
    gap: 1rem;
}

.card {
    display: flex;
    flex-direction: column;
    margin-top: 2rem;
    margin-left: 2rem;
}

.vote {
    display: flex;
    flex-direction: column;
    margin-top: 2rem;
    margin-left: 2rem;
    text-align: center;
    font-size: 2rem;
}

@media only screen and (max-width: 800px) {
    .card {
        margin-top: 1rem;
        margin-left: 1rem;
    }

    .vote {
        font-size: 1.2rem;
    }

    .medal {
        /* width: 5rem; */
        width: 18%;
    }
}</style>