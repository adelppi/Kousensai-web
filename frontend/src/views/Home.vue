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
            <h3 class="title">ご来場のみなさまへ</h3>
            <p>
                今年度の高専祭は3年ぶりの「一般公開」となります。どなたでもご来場いただけます。
                コロナ渦を乗り越えて復活した飲食企画など、たくさんの企画が皆様をお待ちしております。
                10/28・29 9:00~16:00(最終入場15:30)にて開催いたします。
                お車・バイクでのご来場はご遠慮ください。アクセスについては
                <router-link to="/Access">こちら
                    <span class="material-symbols-outlined">
                        open_in_new
                    </span>
                </router-link>をご確認ください。
            </p>
            <div v-if="infos != []" class="info-section">
                <h3 class="title">お知らせ</h3>
                <div class="infos-container">
                    <InformationCard v-for="info in infos" :key="info.id" :id="info.id" :title="info.title"
                        :content="info.content" :timestamp="info.updated_at" />
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

.material-symbols-outlined {
    font-size: 1.2rem;
}
</style>