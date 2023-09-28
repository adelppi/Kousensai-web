<script>
export default {
    data() {
        return {
            onigiri: "",
            tsunamayoOnigiri: ""
        }
    },
    mounted() {
        this.onigiri = this.$route.params["onigiri"]
        this.tsunamayoOnigiri = import.meta.env.VITE_LOST_FOUND_PASSWORD
    }
}
</script>

<template>
    <body>
        <main>
            <h1>落とし物画面</h1>
            <div v-if="onigiri === tsunamayoOnigiri">
                <!-- 管理者がアクセスした場合 -->
                おっけー
            </div>
            <div v-else>
                <!-- 管理者以外がアクセスした場合 -->
                管理者のみがアクセス可能です。
            </div>
        </main>
    </body>
</template>

<style scoped></style>