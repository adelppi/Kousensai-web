<script>
import MenuBar from '../components/MenuBar.vue'
export default {
    components: {
        MenuBar,
    },
    data() {
        return {
            items: [
                { name: '企画1', votes: 0 },
                { name: '企画2', votes: 0 },
            ]
        }
    },
    methods: {
        vote(index) {
            this.items[index].votes++;
            this.saveToLocalStorage();
        },
        saveToLocalStorage() {
            localStorage.setItem('voteData', JSON.stringify(this.items));
        }
    },
    mounted() {
        const savedData = localStorage.getItem('voteData');
        if (savedData) {
            this.items = JSON.parse(savedData);
        }
    }

}
</script>

<template>
    <body>
        <MenuBar />
        <main>
            <h1>人気企画投票</h1>
            <h2>投票システム</h2>
            <div>
                <ul>
                    <li v-for="(item, index) in items" :key="index">
                        {{ item.name }}: {{ item.votes }}
                        <button @click="vote(index)">Vote</button>
                    </li>
                </ul>
            </div>
        </main>
    </body>
</template>

<style scoped></style>