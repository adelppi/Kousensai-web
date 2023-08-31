<script>
import axios from 'axios';
import Card from '../components/Card.vue'

export default {
    components: {
        Card
    },
    data() {
        return {
            projects: [
                {
                    team_name: "企画1",
                    project_name: "企画1",
                    project_description: "説明1",
                    project_space: "場所1",
                    imagelink: "/src/assets/nelnel.jpg"
                }
            ]
        }
    },
    methods: {
        fetchProjects() {
            axios.get('http://127.0.0.1:8000/api/projects')
                .then(response => {
                    this.projects = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchProjects()
    }
}
</script>

<template>
    <body>
        <main>
            {{ test }}
            <h1>企画紹介</h1>
            <h2>企画一覧</h2>
            <div id="project-container">
                <Card v-for="i in projects" :team_name="i.team_name" :project_name="i.project_name"
                    :project_description="i.project_description" :imagelink="`/src/assets/nelnel.jpg`" />
            </div>
        </main>
    </body>
</template>

<style scoped>
#project-container {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}
</style>