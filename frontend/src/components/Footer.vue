<template>
    <footer class="footer-container">
        <div class="content">
            <router-link to="/home">
                <img src="../assets/logo.svg" class="logo" />
            </router-link>
            <p>&copy; 2023 高専祭実行委員会 All rights reserved.</p>
        </div>
    </footer>
</template>

<style scoped>
img.logo {
    width: 2rem;
}
.footer-container {
    width: 100%;
    height: 10vh;
    position: absolute;
    background-color: rgb(240, 240, 240);
}
.content {
    font-size: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 60%;
    height: 100%;
    margin: 0 auto;
}
@media only screen and (max-width: 800px) {
    .content {
        font-size: 0.5rem;
    }
}
</style>

