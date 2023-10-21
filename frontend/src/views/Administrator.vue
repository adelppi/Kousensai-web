<script>
import axios from 'axios'

export default {
    data() {
        return {
            lostItems: [],
            messages: [],
            onigiri: "",
            tsunamayoOnigiri: "",
            addLFModuleShown: false,
            editLFModuleShown: false,
            addMessageModuleShown: false,
            editMessageModuleShown: false,
            selectedLFId: 0,
            selectedMessageId: 0,
            messageTitle: "",
            messageContent: ""
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
            const itemName = parentNode.querySelector(".name-input").value;
            const itemPlace = parentNode.querySelector(".place-input").value;
            const itemProperty = parentNode.querySelector(".property-input").value;

            document.querySelector(".name-input").value = ""
            document.querySelector(".place-input").value = ""
            document.querySelector(".property-input").value = ""
            
            const item = {
                "name": itemName,
                "place": itemPlace,
                "property": itemProperty
            }

            axios.post(import.meta.env.VITE_API_URL + '/addLostItem', item)
                .then(response => {
                    console.log(response.data);
                    this.fetchLostItems();
                    this.addLFModuleShown = false;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        deleteLostItem(itemId) {
            console.log(itemId);

            const id = {
                "id": itemId
            }

            axios.post(import.meta.env.VITE_API_URL + '/deleteLostItem', id)
                .then(response => {
                    console.log(response);
                    this.fetchLostItems();
                    this.editLFModuleShown = false;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        editLostItem(parentNode) {
            this.deleteLostItem(this.selectedLFId);
            this.addLostItem(parentNode);
        },
        showMessageEditModule(item) {
            this.messageContent = item["content"]
            this.messageTitle = item["title"]
            this.editMessageModuleShown = true;
            this.selectedMessageId = item.id;
        },
        showLFEditModule(item) {
            const editModule = document.querySelector("#edit-module");
            this.selectedLFId = item.id;

            const nameInput = document.querySelector(".name-input");
            const placeInput = document.querySelector(".place-input");
            const propertyInput = document.querySelector(".property-input");

            nameInput.value = item.name;
            placeInput.value = item.place;
            propertyInput.value = item.property;

            this.editLFModuleShown = true;
        },
        fetchMessage() {
            axios.get(import.meta.env.VITE_API_URL + '/getMessage')
                .then(response => {
                    this.messages = response.data
                })
                .catch(error => {
                    console.log(error);
                });
        },
        addMessage() {
            axios.post(import.meta.env.VITE_API_URL + '/addMessage', {
                "title": this.messageTitle,
                "content": this.messageContent
            })
                .then(response => {
                    console.log(response)
                    this.fetchMessage()
                })
                .catch(error => {
                    console.log(error);
                });
            this.addMessageModuleShown = false
        },
        deleteMessage(itemId) {
            const id = {
                "id": itemId
            }
            axios.post(import.meta.env.VITE_API_URL + '/deleteMessage', id)
                .then(response => {
                    console.log(response)
                    this.fetchMessage()
                })
                .catch(error => {
                    console.log(error);
                });
            this.editMessageModuleShown = false
        },
        updateMessage(itemId) {
            const data = {
                "id": itemId,
                "title": this.messageTitle,
                "content": this.messageContent
            }
            axios.post(import.meta.env.VITE_API_URL + '/updateMessage', data)
                .then(response => {
                    console.log(response)
                    this.fetchMessage()
                })
                .catch(error => {
                    console.log(error);
                });
            this.editMessageModuleShown = false
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

                <h2>お知らせの更新</h2>
                <p>クリックして削除・編集ができます。</p>
                <table>
                    <thead>
                        <tr>
                            <th style="width:8rem;">見出し</th>
                            <th>本文</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item) in messages" :key="item" @click="showMessageEditModule(item)">
                            <td>{{ item.title }}</td>
                            <td>{{ item.content }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="add-button-container">
                    <button class="add-button"
                        @click="addMessageModuleShown = true; messageTitle = ''; messageContent = '';">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                    </button>
                </div>

                <div v-show="addMessageModuleShown">
                    <div id="edit-module" class="module">
                        <div class="module-header">
                            <div class="module-title">お知らせ追加</div>
                            <button class="close-module-button" @click="addMessageModuleShown = false">
                                <span class="material-symbols-outlined close-img">
                                    close
                                </span>
                            </button>
                        </div>
                        <div class="module-body">
                            <div class="input-container">
                                見出し
                                <input type="text" v-model="messageTitle">
                            </div>
                            <div class="input-container">
                                本文
                                <textarea rows="6" v-model="messageContent"></textarea>
                            </div>
                            <div class="confirm-button-container">
                                <button class="confirm-button" @click="addMessage()">追加</button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay" @click="addMessageModuleShown = false"></div>
                </div>

                <div v-show="editMessageModuleShown">
                    <div id="edit-module" class="module">
                        <div class="module-header">
                            <div class="module-title">お知らせ編集</div>
                            <button class="close-module-button" @click="editMessageModuleShown = false">
                                <span class="material-symbols-outlined close-img">
                                    close
                                </span>
                            </button>
                        </div>
                        <div class="module-body">
                            <div class="input-container">
                                見出し
                                <input type="text" v-model="messageTitle">
                            </div>
                            <div class="input-container">
                                本文
                                <textarea rows="6" v-model="messageContent"></textarea>
                            </div>
                            <div class="confirm-button-container">
                                <button class="confirm-button" @click="updateMessage(selectedMessageId)">編集</button>
                                <button class="delete-button" @click="deleteMessage(selectedMessageId)">削除</button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay" @click="editMessageModuleShown = false"></div>
                </div>


                <div class="spacer"></div>


                <h2>落とし物の登録</h2>
                <p>クリックして削除・編集ができます。</p>

                <table>
                    <thead>
                        <tr>
                            <th style="width: 8rem;">物品名</th>
                            <th style="width: 8rem;">見つかった場所</th>
                            <th>特徴</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item) in lostItems" :key="item" @click="showLFEditModule(item)">
                            <td>{{ item.name }}</td>
                            <td>{{ item.place }}</td>
                            <td>{{ item.property }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="add-button-container">
                    <button class="add-button" @click="addLFModuleShown = true">
                        <span class="material-symbols-outlined">
                            add
                        </span>
                    </button>
                </div>

                <div v-if="addLFModuleShown">
                    <div class="module add-module">
                        <div class="module-header">
                            <div class="module-title">落とし物追加</div>
                            <button class="close-module-button" @click="addLFModuleShown = false">
                                <span class="material-symbols-outlined close-img">
                                    close
                                </span>
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
                            <div class="confirm-button-container">
                                <button class="confirm-button"
                                    @click="addLostItem($event.target.parentNode.parentNode)">追加</button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay" @click="addLFModuleShown = false"></div>
                </div>

                <div v-show="editLFModuleShown">
                    <div id="edit-module" class="module">
                        <div class="module-header">
                            <div class="module-title">落とし物編集</div>
                            <button class="close-module-button" @click="editLFModuleShown = false">
                                <span class="material-symbols-outlined close-img">
                                    close
                                </span>
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
                            <div class="confirm-button-container">
                                <button class="confirm-button"
                                    @click="editLostItem($event.target.parentNode.parentNode)">編集</button>
                                <button class="delete-button" @click="deleteLostItem(selectedLFId)">削除</button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay" @click="editLFModuleShown = false"></div>
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
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
}

/* モバイルのとき */
@media only screen and (max-width: 800px) {
    table {
        font-size: 0.625rem;
    }
}

th {
    border: 1px solid #000000;
    padding: 8px;
    text-align: center;
}

.add-button-container {
    height: 2rem;
    border: 1px solid #000000;
    border-top: none;
    background-color: #fff;
    padding: 8px;
}

.add-button {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

td {
    height: 2rem;
    border: 1px solid #000000;
    background-color: #fff;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tbody tr:hover {
    cursor: pointer;
    color: #676767;
}

.module {
    position: fixed;
    display: flex;
    flex-direction: column;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 1.5rem;
    border: 1px solid #ccc;
    border-radius: 20px;
    background-color: #f2f2f2;
    z-index: 9999;
    width: 35%;
    max-width: 400px;
    min-width: 300px;
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

.close-img:hover {
    color: #419dff;
    cursor: pointer;
}

.input-container {
    display: flex;
    flex-direction: column;
    align-items: left;
    margin-bottom: 1rem;
    color: #5a5a5a;
}

.confirm-button-container {
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 2rem;
}

.confirm-button {
    font-family: 'M PLUS Rounded 1c';
    background-color: #419dff;
    color: #fff;
    font-size: 1.25rem;
    font-weight: bold;
    padding: 0 1rem 0 1rem;
    border: none;
    border-radius: 4px;
    margin-top: 1rem;
    cursor: pointer;
}
.delete-button {
    font-family: 'M PLUS Rounded 1c';
    background-color: #ff3333;
    color: #fff;
    font-size: 1.25rem;
    font-weight: bold;
    padding: 0 1rem 0 1rem;
    border: none;
    border-radius: 4px;
    margin-top: 1rem;
    cursor: pointer;
}

.material-symbols-outlined {
    font-size: 20px;
}

.spacer {
    height: 3rem;
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