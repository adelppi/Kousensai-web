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
            <!-- <div class="head-container">
                <div class="ignition">
                    Ignition
                </div>
                <div class="large-text">
                    第59回 高専祭🔥
                </div>
            </div> -->
        </header>
        <main>
            <!-- <img src="../assets/logo.gif" class="gif" > -->
            <!-- <img src="../assets/ignition5.png" alt="わああ"> -->
            <!-- <InformationCard :title="message" :content="'aaa'" /> -->
        </main>
        <svg>
            <filter id="grain">
                <feTurbulence type="turbulence" baseFrequency="0.6" />
            </filter>
        </svg>
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
.head-container {
    margin: 0rem 17.5%;
}

.ignition {
    font-family: 'Bebas Neue';
    align-items: center;
    font-size: 12rem;
    animation: stretch 1s ease-out;
    color: rgb(25, 25, 25);
    letter-spacing: 0.5rem;
}

@keyframes stretch {
    0% {
        letter-spacing: 10rem;
    }

    100% {
        letter-spacing: 0.5rem;
    }
}

.large-text {
    font-family: 'Shippori Antique B1';
    font-size: 4rem;
    color: #ffffff;
}


/* モバイルのとき */
@media only screen and (max-width: 800px) {
    .ignition {
        font-size: 4rem;
    }

    .large-text {
        font-size: 1.5rem;
    }
}

</style>