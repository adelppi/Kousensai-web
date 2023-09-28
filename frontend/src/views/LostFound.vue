<script>
import axios from 'axios'

export default {
    data() {
        return {
            lostItems: [
                {
                    name: 'something',
                    place: 'somewhere',
                    property: 'specialProperty'
                },
                {
                    name: 'something',
                    place: 'somewhere',
                    property: 'specialProperty'
                },
                {
                    name: 'something',
                    place: 'somewhere',
                    property: 'specialProperty'
                },
                {
                    name: 'something',
                    place: 'somewhere',
                    property: 'specialProperty'
                }
            ],
        }
    },
    methods: {
        fetchLostItems() {
            axios.get(import.meta.env.VITE_API_URL + '/getLostFoundItems')
                .then(response => {
                    this.plostItems = response.data
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
</script>

<template>
    <body>
        <main>
            <h1>落とし物画面</h1>
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
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
}

th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

</style>