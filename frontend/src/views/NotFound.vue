<template>
    <body>
        <main>
            <div class="centering">
                <h1>404</h1>
                <p><budoux-ja>
                        お探しのページは見つかりませんでした。<br><br>
                        URLが間違っているか、ページは移動または削除された可能性があります。
                    </budoux-ja></p>
                <router-link to="/">ホームに戻る</router-link>
            </div>
        </main>
    </body>
</template>

<style scoped>
.centering {
    text-align: center;
}

h1 {
    /* font-family: 'Bebas Neue'; */
    font-size: 5rem;
}
</style>