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
            <div class="head-container">
                <div class="ignition">
                    Ignition
                </div>
                <div class="large-text">
                    第59回 高専祭🔥
                </div>
            </div>
        </header>
        <main>
            <!-- <img src="../assets/ignition5.png" alt="わああ"> -->
            <!-- <InformationCard :title="message" :content="'aaa'" /> -->
        </main>
        <svg>
            <filter id="grain">
                <feTurbulence
                type="turbulence"
                baseFrequency="0.6"
                />
            </filter>
        </svg>
    </body>
</template>

<style scoped>
header {
    background: rgb(135, 154, 242);
    background: linear-gradient(56deg, rgba(135, 154, 242, 1) 0%, rgba(211, 32, 139, 1) 45%, rgba(253, 160, 0, 1) 100%);
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
    animation: stretch 1.5s;
    color: rgb(25, 25, 25);
    letter-spacing: 0.5rem;
}

@keyframes stretch {
    from {
        letter-spacing: 10rem;
    }

    to {
        letter-spacing: 0.5rem;
    }
}

.large-text {
    font-family: 'Shippori Antique B1';
    font-size: 5rem;
    color: #ffffff;
}

img {
    width: 100%;
}
</style>