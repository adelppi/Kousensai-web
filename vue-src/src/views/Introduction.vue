<script>
import MenuBar from '../components/MenuBar.vue'
import Card from '../components/Card.vue'
export default {
    components: {
        MenuBar,
        Card
    },
    data() {
        return {
            projects: [
                {
                    name: "企画1",
                    description: "説明1"
                },
                {
                    name: "企画2",
                    description: "説明2"
                },
                {
                    name: "企画3",
                    description: "説明3"
                },
                {
                    name: "企画4",
                    description: "説明4"
                },
            ]
        }
    }
}
</script>

<template>
    <body>
        <MenuBar />
        <main>
            <h1>企画紹介</h1>
            <h2>企画一覧</h2>
            <div v-for="i in projects">
                <Card :name="i.name" :description="i.description" />
            </div>
        </main>
    </body>
</template>

<style scoped></style>