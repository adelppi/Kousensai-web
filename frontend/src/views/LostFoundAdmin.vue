<script>
import axios from 'axios'

export default {
    data() {
        return {
            lostItems: [],
            onigiri: "",
            tsunamayoOnigiri: "",
            showAddModule: false,
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
        },
        addLostItem(parentNode) {
            const itemName = parentNode.getElementsByClassName("name-input")[0].value;
            const itemPlace = parentNode.getElementsByClassName("place-input")[0].value;
            const itemProperty = parentNode.getElementsByClassName("property-input")[0].value;

            const item = {
                "name": itemName,
                "place": itemPlace,
                "property": itemProperty
            }

            axios.post(import.meta.env.VITE_API_URL + '/addLostItem', item)
                .then(response => {
                    console.log(response.data);
                    this.fetchLostItems();
                    this.showAddModule = false;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        removeLostItem (itemId) {
            const id = {
                "id": itemId
            }

            axios.post(import.meta.env.VITE_API_URL + '/deleteLostItem', id)
                .then(response => {
                    console.log(response.data);
                    this.fetchLostItems();
                })
                .catch(error => {
                    console.log(error);
                });
        },
    },
    mounted() {
        this.fetchLostItems();
        this.onigiri =  this.$route.params["onigiri"]
        this.tsunamayoOnigiri = import.meta.env.VITE_LOST_FOUND_PASSWORD
    }
}
</script>

<template>
    <body>
        <main>
            <div v-if="showAddModule">
                <div class="module" @click="$emit('cardSelected', shownId)">
                    <div class="module-header">
                        <div class="module-title">新規 落とし物</div>
                        <button class="close-module-button" @click="showAddModule = false">
                            <img class="close-img" src="../assets/logo.svg" alt="x">
                        </button>
                    </div>
                    <div class="module-body">
                        <div class="input-container">
                            <div class="input-title">物品名</div>
                            <input type="text" class="name-input">
                        </div>
                        <div class="input-container">
                            <div class="input-title">見つかった場所</div>
                            <input type="text" class="place-input">
                        </div>
                        <div class="input-container">
                            <div class="input-title">特徴</div>
                            <input type="text" class="property-input">
                        </div>
                        <button class="confirm-button" @click="addLostItem($event.target.parentNode)">追加</button>
                    </div>
                </div>
                <div class="overlay" @click="showAddModule = false"></div>
            </div>
            <h1>落とし物画面</h1>
            <div v-if="onigiri === tsunamayoOnigiri">
                <!-- 管理者がアクセスした場合 -->
                おっけー編集しろ
                <button class="add-item-button" @click="showAddModule = true">追加</button>
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
                            <td>
                                <button @click="removeLostItem(item.id)">削除</button>
                                {{ item.name }}
                            </td>
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

.module {
    position: absolute;
    display: flex;
    flex-direction: column;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 2rem;
    border: 1px solid #ccc;
    background-color: #f2f2f2;
    z-index: 9999;
    width: 60%;
    max-width: 400px;
}

.module-header {
    margin-bottom: 2rem;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    font-size: 1.5em;
}

.close-module-button {
    height: 2rem;
    width: 2rem;
    position: fixed;
    right: 2rem;
    border: none;
    background: none;
}

.close-img {
    height: 100%;
    width: 100%;
}

.input-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.input-container div, .input-container input {
    height: 1rem;
    margin: 0.5rem;
    align-items: center;
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    cursor: pointer;
    overflow: hidden;
    touch-action: none;
}

</style>