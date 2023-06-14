<script>
import axios from 'axios';

export default {
    components: {
    },
    data() {
        return {
            items: [],
        }
    },
    computed: {
    },
    methods: {
        fetchTest() {
            axios.get('http://192.168.3.2/previewData')
                .then(response => {
                    this.items = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
            axios.get('https://adelppi.duckdns.org/previewData')
                .then(response => {
                    this.items = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchTest()
    }
}
</script>

<template>
    <h1>ページ遷移できる</h1>
    <h6>{{ items }}</h6>
</template>