<script>
export default {
    data() {
        return {
            password: ""
        }
    },
    mounted() {
        this.password = this.$route.params["password"]
    }
}
</script>

<template>
    <body>
        <main>
            <h1>落とし物画面</h1>
            <div v-if="password === 'admin'">
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