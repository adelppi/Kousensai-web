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
            <div class="title">落とし物一覧</div>

            <p>
                <budoux-ja>
                    落とし物のをお探しの際は、２階本部にお越しください。
                </budoux-ja>
            </p>
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

p {
    font-size: 1.2rem;
    text-align: center;
}

@media only screen and (max-width: 800px) {
    p {
        font-size: 0.8rem;
    }
}
</style>