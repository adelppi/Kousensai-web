<script>
import axios from 'axios'

export default {
    data() {
        return {
            lostItems: []
        }
    },
    methods: {
        fetchLostItems() {
            axios.get(import.meta.env.VITE_API_URL + '/getLostItems')
                .then(response => {
                    this.lostItems = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchLostItems();
    }
}

// adding lost item to api
// {
//     "name": "a",
//     "place": "b",
//     "property": "c"
// }
// /api/addLostItem/

</script>

<template>
    <body>
        <main>
            <div class="title">落とし物画面</div>

            <div class="text">落とし物があった場合は、、、</div>
            <table>
                <thead>
                    <tr>
                        <th>物品名</th>
                        <th>見つかった場所</th>
                        <th>特徴</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item) in lostItems" :key="item">
                        <td>{{ item.name }}</td>
                        <td>{{ item.place }}</td>
                        <td>{{ item.property }}</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</template>

<style scoped>

.text {
    padding: 0 2rem 1rem 2rem;
    font-size: 1em;
}

table {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    margin-bottom: 10px;
}

th {
    border: 1px solid #222;
    padding: 8px;
    text-align: center;
}

td {
    border: 1px solid #222;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

</style>