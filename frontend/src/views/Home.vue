<script>
import axios from 'axios'
import InformationCard from '../components/InformationCard.vue';

export default {
    components: {
        InformationCard
    },
    data() {
        return {
            infos: [],
        }
    },
    methods: {
        fetchInfos() {
            axios.get(import.meta.env.VITE_API_URL + '/getMessage')
                .then(response => {
                    this.infos = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchInfos();
    }
}
</script>

<template>
    <body>
        <header>
            <img src="../assets/banner.png">
        </header>
        <main>
            <!-- <InformationCard :title="message" :content="'aaa'" /> -->
            <div v-if="infos!=[]" class="info-section">
                <h3 class="title">お知らせ</h3>
                <div class="infos-container">
                    <InformationCard
                        v-for="info in infos" 
                        :key="info.id" 
                        :id="info.id"
                        :title="info.title"
                        :content="info.content"
                        :timestamp="info.timestamp"/>
                </div>
            </div>
        </main>
    </body>
</template>

<style scoped>
header {
    display: flex;
    flex-direction: column;
}

@keyframes stretch {
    0% {
        letter-spacing: 10rem;
    }

    100% {
        letter-spacing: 0.5rem;
    }
}

.infos-container {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

</style>