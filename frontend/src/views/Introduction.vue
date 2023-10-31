<script>
import axios from 'axios'
import Card from '../components/Card.vue'
import Module from '../components/Module.vue'

export default {
    components: {
        Card,
        Module
    },
    data() {
        return {
            authenticated: false,
            projects: [],
            cardStyles: [],
            moduleShown: false,
            shownId: {
                type: Number,
                default: null
            },
            keyword: "",
            extra: "",
        }
    },
    methods: {
        authentication(password) {
            axios.post(import.meta.env.VITE_API_URL + '/authentication', {
                "password": password
            })
                .then(response => {
                    this.authenticated = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        },
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

                const childX = Math.floor(Math.random() * 20) - 10; // -20%から20%までのランダムなマージン 
                const rotatePin = Math.floor(Math.random() * 90); // 0度から90度までのランダムな傾き 

                return {
                    'parentStyle': {
                        'transform': `rotate(${rotate}deg) scale(${scale})`,
                        'margin': `${y}px ${5 + x}px 0`,
                        'background-position': `${backgroundX}% ${backgroundY}%`,
                        // 'filter': `hue-rotate(${colorRotate}deg)` 
                    },
                    'childStyle': {
                        'containerStyle': {
                            'transform': `translateX(-${50 + childX}%)`
                        },
                        'imageStyle': {
                            'transform': `rotate(${rotatePin}deg)`
                        }
                    }
                };
            })
        },
        showModule(Number) {
            this.shownId = Number;
            console.log(this.shownId)
            this.moduleShown = true;
        },
    },
    mounted() {
        this.fetchProjects();
        this.extra = import.meta.env.VITE_EXTRA
        this.authenticated = this.authentication(this.$route.params["password"])
    },
    computed: {
        filteredProjects() {
            const keyword = this.keyword.toLowerCase();
            return this.projects.filter(project => {
                const teamName = project.team_name.toLowerCase();
                const projectName = project.project_name.toLowerCase();
                const projectTeam = project.team_name.toLowerCase();
                const projectDescription = project.project_description.toLowerCase();
                const projectSpace = project.project_space.toLowerCase();
                return (
                    teamName.includes(keyword) ||
                    projectName.includes(keyword) ||
                    projectTeam.includes(keyword) ||
                    projectDescription.includes(keyword) ||
                    projectSpace.includes(keyword)
                );
            });
        }
    }
}
</script>

<template>
    <body>
        <main>
            <div class="title" v-if="authenticated">企画紹介 (管理者用)</div>
            <div class="title" v-else>企画紹介</div>
            <p v-if="!authenticated" style="text-align: center;">
                <budoux-ja>
                    投票を行っております。好きな企画のハートボタンを押して投票しましょう！
                </budoux-ja>
            </p>
            <div class="input-container">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <span class="material-symbols-outlined">search</span>
                    <input type="text" class="search-box" placeholder="屋台, 実験, ステージ, ..." v-model="keyword">
                    <span v-if="!authenticated" class="material-symbols-outlined shuffle-button"
                        @click="shuffleArray(projects);">sync</span>
                </div>
                <div v-if="keyword" style="left: 0;">
                    検索結果: {{ filteredProjects.length }}件
                </div>
            </div>

            <div class="project-container">
                <Card :style="cardStyles[index]['parentStyle']" :child_style="cardStyles[index]['childStyle']"
                    v-for="(i, index) in filteredProjects" :key="index" :authenticated="authenticated" :index="index"
                    :id="i.id" :project_name="i.project_name" :current_note="i.note"
                    :imagePath="`${extra}/assets/thumbnails/${i.id}.png`" @card-selected="showModule" />
            </div>
            <Module v-if="moduleShown && !authenticated" @close-module-event="moduleShown = false"
                :id="filteredProjects[shownId].id" :shownId="shownId" :vote="filteredProjects[shownId].vote"
                :team_name="filteredProjects[shownId].team_name" :project_name="filteredProjects[shownId].project_name"
                :project_space="filteredProjects[shownId].project_space"
                :project_floor="filteredProjects[shownId].project_floor"
                :project_description="filteredProjects[shownId].project_description"
                :imagePath="`${extra}/assets/thumbnails/${filteredProjects[shownId].id}.png`" />
        </main>
    </body>
</template>

<style scoped>
.shuffle-button {
    margin-left: 0.5rem;
    background-color: white;
    border: 2px solid #ddd;
    border-radius: 8px;
    width: 3rem;
    height: 3rem;
    cursor: pointer;
}

.shuffle-button:hover {
    background-color: #ddd;
}

.spacer {
    margin: 4rem 0rem;
}

.button-container {
    margin: 0 auto 0 auto;
    width: 100%;
    max-width: 10rem;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

button {
    height: 2rem;
    background-color: #6cb4e4;
    color: white;
}

.project-container {
    margin-top: 2rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
    gap: 1rem;
    /* background-image: url('../assets/corkboard.png'); */
    /* border: 10px solid black; */
    /* border-image-source: url('src/assets/corkboardborder.png'); */
    /* border-image-repeat: repeat; */
    /* border-image-slice: 200; */
    /* border-image-width: 25px; */
}

.input-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 1rem;
}

.search-box {
    box-sizing: border-box;
    width: 30rem;
    padding: 10px;
    font-size: 1.5rem;
    border: 2px solid #ddd;
    border-radius: 10px;
    margin: 0rem auto;
}

.material-symbols-outlined {
    font-size: 3rem;
}

@media only screen and (max-width: 800px) {
    .search-box {
        font-size: 0.75rem;
        height: 2rem;
        width: 15rem;
    }

    .material-symbols-outlined {
        font-size: 2rem;
    }

    .shuffle-button {
        width: 2rem;
        height: 2rem;
    }
}
</style>