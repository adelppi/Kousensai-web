<template>
    <body>
        <main>
            <div>
                <img src="../assets/logo.svg">
            </div>
            <h1>高専祭公式サイト<br>只今準備中！</h1>
            <div>
                <h2>10月28日<br>10月28日<br>一般公開</h2>
            </div>
        </main>
    </body>
</template>

<style scoped>
body {
    background-color: rgb(43, 43, 43);
    height: 100vh;
}

h1 {
    background-color: rgb(99, 99, 99);
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