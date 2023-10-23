<script>
import axios from 'axios'
import 'budoux/module/webcomponents/budoux-ja';
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
                <budoux-ja>
                    今年度の高専祭は3年ぶりの「一般公開」となります。どなたでもご来場いただけます。<br>
                    コロナ渦を乗り越えて復活した飲食企画など、たくさんの企画が皆様をお待ちしております。<br>
                    10/28・29 9:00~16:00(最終入場15:30)にて開催いたします。<br>
                    お車・バイクでのご来場はご遠慮ください。アクセスについては
                </budoux-ja>
                <router-link to="/Access" style="display: inline-block;">こちら
                    <span class="material-symbols-outlined">
                        open_in_new
                    </span>
                </router-link>
                <budoux-ja>
                    をご確認ください。
                </budoux-ja>
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

p {
    font-size: 1.2rem;
    text-align: center;
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