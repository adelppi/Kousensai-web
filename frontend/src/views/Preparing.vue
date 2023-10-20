<template>
    <body>
        <main>
            <div>
                <img src="../assets/logo.svg">
            </div>
            <div class="title">高専祭公式サイト<br>只今準備中！</div>
            <div>
                <h2>10月28日<br>10月29日<br>一般公開</h2>
            </div>
        </main>
    </body>
</template>

<style scoped>
body {
    background-color: rgb(255, 255, 255);
    height: 100vh;
}

div {
    display: flex;
    justify-content: center;
    align-items: center;
}

img {
    width: 5rem;
}

main {
    margin: auto;
    padding: 25%;
}

@media only screen and (max-width: 750px) {
    h1 {
        font-size: 1.25rem;
    }

    h2 {
        font-size: 0.75rem;
    }
}
</style>