<script>
import Card from '../components/Card.vue'
export default {
    components: {
        Card
    },
    data() {
        return {
            projects: [
                {
                    name: "企画1",
                    description: "説明1",
                    imagelink: "/src/assets/nelnel.jpg"
                },
                {
                    name: "企画2",
                    description: "説明2",
                    imagelink: "/src/assets/reverse_nelnel.jpg"
                },
                {
                    name: "企画3",
                    description: "説明3",
                    imagelink: "/src/assets/nelnel.jpg"
                },
                {
                    name: "企画4",
                    description: "説明4",
                    imagelink: "/src/assets/reverse_nelnel.jpg"
                },
                {
                    name: "企画5",
                    description: "説明5",
                    imagelink: "/src/assets/nelnel.jpg"
                },
                {
                    name: "企画6",
                    description: "説明6",
                    imagelink: "/src/assets/reverse_nelnel.jpg"
                },
                {
                    name: "企画7",
                    description: "説明7",
                    imagelink: "/src/assets/nelnel.jpg"
                },
                {
                    name: "企画8",
                    description: "説明8",
                    imagelink: "/src/assets/reverse_nelnel.jpg"
                },
            ]
        }
    }
}
</script>

<template>
    <body>
        <main>
            <h1>企画紹介</h1>
            <h2>企画一覧</h2>
            <div id="project-container">
                <Card v-for="i in projects" :name="i.name" :description="i.description" :imagelink="i.imagelink"/>
            </div>
        </main>
    </body>
</template>

<style scoped>

#project-container {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 1rem;
}

</style>