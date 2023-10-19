<script>
import axios from 'axios'

export default {
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
        <main>
            {{ message }}
            <div class="content">
                <img src="../assets/ignition5.png" alt="パンフレット">
            </div>
        </main>
    </body>
</template>

<style scoped>
.content {
    width: 80%;
    height: 100%;
    margin: 0 auto;
}

img {
    width: 100%;
}
</style>