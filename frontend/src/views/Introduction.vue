<script>
import axios from 'axios'
import Card from '../components/Card.vue'

export default {
    components: {
        Card
    },
    data() {
        return {
            projects: [],
            cardStyles: []
        }
    },
    methods: {
        fetchProjects() {
            axios.get(import.meta.env.VITE_API_URL + '/projects')
                .then(response => {
                    this.projects = response.data
                    this.shuffleArray(this.projects)
                    this.applyRandomStyles()
                })
                .catch(error => {
                    console.log(error);
                });
        },
        shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        },
        applyRandomStyles() {
            this.cardStyles = this.projects.map(() => {
                const rotate = Math.floor(Math.random() * 10) - 5; // -10度から10度までのランダムな傾き 
                const scale = Math.random() * 0.1 + 0.95; // 0.95から1.05までのランダムな大きさ 
                const x = Math.floor(Math.random() * 21) - 10; // -10pxから10pxまでのランダムな横位置 
                const y = Math.floor(Math.random() * 21) - 10; // -10pxから10pxまでのランダムな縦位置 

                const backgroundX = Math.floor(Math.random() * 100);
                const backgroundY = Math.floor(Math.random() * 100);

                const childX = Math.floor(Math.random() * 10); // 1remから10remまでのランダムなマージン 
                const rotatePin = Math.floor(Math.random() * 100) - 30; // -30度から70度までのランダムな傾き 

                const colorRotate = Math.floor(Math.random() * 360);

                return {
                    'parentStyle': {
                        'transform': `rotate(${rotate}deg) scale(${scale})`,
                        'margin': `${y}px ${10 + x}px 0`,
                        'background-position': `${backgroundX}% ${backgroundY}%`,
                        // 'filter': `hue-rotate(${colorRotate}deg)` 
                    },
                    'childStyle': {
                        "margin-left": `${childX}rem`,
                        "margin-bottom": "1rem",
                        "transform-origin": "0% 0%",
                        'transform': `rotate(${rotatePin}deg)`
                    }
                };
            })
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
            <div id="project-container">
                <Card class="card" :style="cardStyles[index]['parentStyle']" :child_style="cardStyles[index]['childStyle']"
                    v-for="(i, index) in projects" :key="index" :id="i.id" :vote="i.vote" :team_name="i.team_name"
                    :project_name="i.project_name" :project_space="i.project_space"
                    :project_description="i.project_description" :imagePath="'src/assets/nelnel.jpg'" />
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
    background-image: url('src/assets/corkboard.png');
    border: 10px solid black;
    border-image-source: url('src/assets/corkboardborder.png');
    border-image-repeat: repeat;
    border-image-slice: 200;
    border-image-width: 25px;
}
</style>