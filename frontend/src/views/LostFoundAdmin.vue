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
            axios.get(import.meta.env.VITE_API_URL + '/getLostFoundItems')
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
</script>

<template>
    <body>
        <main>
            <h1>落とし物画面</h1>
            <div v-if="onigiri === tsunamayoOnigiri">
                <!-- 管理者がアクセスした場合 -->
                おっけー編集しろ
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
            </div>
            <div v-else>
                <!-- 管理者以外がアクセスした場合 -->
                管理者のみがアクセス可能です。
            </div>
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