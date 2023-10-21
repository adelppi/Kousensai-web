<script>
import axios from 'axios'
import InformationCard from '../components/InformationCard.vue';

export default {
    components: {
        InformationCard
    },
    data() {
        return {
            message: "",
        }
    },
    methods: {
        fetchMessage() {
            axios.get(import.meta.env.VITE_API_URL + '/getMessage')
                .then(response => {
                    this.message = response.data[0]["content"]
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchMessage();
    }
}
</script>

<template>
    <body>
        <header>
            <img src="../assets/banner_w_text.png">
        </header>
        <main>
            <!-- <InformationCard :title="message" :content="'aaa'" /> -->
        </main>
    </body>
</template>

<style scoped>
main {
    height: 200vh;
}

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
</style>