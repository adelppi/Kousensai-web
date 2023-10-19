<script>
import axios from 'axios'

export default {
    data() {
        return {
            lostItems: [],
            message: "",
            inputMessage: "",
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
        removeLostItem(itemId) {
            const id = {
                "id": itemId
            }

            axios.post(import.meta.env.VITE_API_URL + '/deleteLostItem', id)
                .then(response => {
                    console.log(response);
                    this.fetchLostItems();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        fetchMessage() {
            axios.get(import.meta.env.VITE_API_URL + '/getMessage')
                .then(response => {
                    this.message = response.data[0]["content"]
                })
                .catch(error => {
                    console.log(error);
                });
        },
        addMessage() {
            axios.post(import.meta.env.VITE_API_URL + '/addMessage', {
                "content": this.inputMessage
            })
                .then(response => {
                    console.log(response)
                    this.fetchMessage()
                })
                .catch(error => {
                    console.log(error);
                });
        },
        truncateMessage() {
            axios.post(import.meta.env.VITE_API_URL + '/truncateMessage')
                .then(response => {
                    console.log(response)
                    this.fetchMessage()
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchLostItems();
        this.fetchMessage();
        this.onigiri = this.$route.params["onigiri"]
        this.tsunamayoOnigiri = import.meta.env.VITE_LOST_FOUND_PASSWORD
    }
}
</script>

<template>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <body>
        <main>
            <div class="title">管理者画面</div>
            <div v-if="onigiri === tsunamayoOnigiri">
                <!-- 管理者がアクセスした場合 -->
                <h3>※高専祭実行委員のみがアクセスできる画面です。</h3>

                <h2>メッセージの更新</h2>
                message: {{ message }}<br>
                inputMessage: {{ inputMessage }}<br>
                <input v-model="inputMessage" :placeholder="message">
                <button @click="addMessage()">更新</button>
                <button @click="truncateMessage()">削除</button>


                <h2>落とし物の登録</h2>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>物品名</th>
                            <th>見つかった場所</th>
                            <th>特徴</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item) in lostItems" :key="item">
                            <td>
                                <button class="add-delete-button" @click="removeLostItem(item.id)">
                                    <span class="material-symbols-outlined">
                                        remove
                                    </span>
                                </button>
                            </td>
                            <td>{{ item.name }}</td>
                            <td>{{ item.place }}</td>
                            <td>{{ item.property }}</td>
                        </tr>
                        <tr>
                            <td>
                                <button class="add-delete-button" @click="showAddModule = true">
                                    <span class="material-symbols-outlined">
                                        add
                                    </span>
                                </button>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
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
                                物品名
                                <input type="text" class="name-input">
                            </div>
                            <div class="input-container">
                                見つかった場所
                                <input type="text" class="place-input">
                            </div>
                            <div class="input-container">
                                特徴
                                <input type="text" class="property-input">
                            </div>
                            <button class="confirm-button" @click="addLostItem($event.target.parentNode)">追加</button>
                        </div>
                    </div>
                    <div class="overlay" @click="showAddModule = false"></div>
                </div>




            </div>
            <div v-else>
                <!-- 管理者以外がアクセスした場合 -->
                <h3>管理者のみがアクセス可能です。</h3>
            </div>
        </main>
    </body>
</template>

<style scoped>
table {
    font-size: 1rem;
    width: 62.5%;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    margin-bottom: 10px;
}

/* モバイルのとき */
@media only screen and (max-width: 800px) {
    table {
        font-size: 0.625rem;
        width: 90%;
    }
}

th {
    border: 1px solid #000000;
    padding: 8px;
    text-align: center;
}

td {
    border: 1px solid #000000;
    background-color: #fff;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #b0b0b0;
}

.add-delete-button {
    display: flex;
    font-size: 10px;
    border-radius: 8px;
    height: 2rem;
    width: 2rem;
    margin-left: auto;
    margin-right: auto;
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

.module-body {
    margin: 0 10%;
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
    flex-direction: column;
    align-items: left;
    margin-bottom: 1rem;
    color: #5a5a5a;
}

.confirm-button {
    background-color: #419dff;
    color: #fff;
    font-size: 1.25rem;
    padding: 0.5rem;
    border: none;
    border-radius: 4px;
    margin-top: 1rem;
    cursor: pointer;
}

.material-symbols-outlined {
    font-size: 20px;
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