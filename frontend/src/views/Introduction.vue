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
            ],
            cardStyles: []
        }
    },
    methods: {
        fetchProjects() {
            axios.get('http://127.0.0.1:8000/api/projects')
                .then(response => {
                    this.projects = response.data;
                    // this.applyRandomStyles()
                })
                .catch(error => {
                    console.log(error);
                });
        },
        applyRandomStyles() {
            this.cardStyles = this.projects.map(() => {
                const rotate = Math.floor(Math.random() * 21) - 10; // -10度から10度までのランダムな傾き
                const scale = Math.random() * 0.1 + 0.95; // 0.95から1.05までのランダムな大きさ
                const x = Math.floor(Math.random() * 21) - 10; // -10pxから10pxまでのランダムな横位置
                const y = Math.floor(Math.random() * 21) - 10; // -10pxから10pxまでのランダムな縦位置

                return {
                    transform: `rotate(${rotate}deg) scale(${scale})`,
                    margin: `${y}px ${10 + x}px 0`,
                };
            });
        }
    },
    mounted() {
        this.fetchProjects();
    }
}
</script>

<template>
    <body>
        <main>
            <h1>企画紹介</h1>
            <h2>企画一覧</h2>
            {{ cardStyles }}
            <div id="project-container">
                <Card class="card" :style="cardStyles[index]" v-for="(i, index) in projects" :key="index"
                    :team_name="i.team_name" :project_name="i.project_name" :project_space="i.project_space"
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