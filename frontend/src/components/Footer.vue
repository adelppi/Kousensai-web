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
    height: 6rem;
    width: 100vw;
    background-color: rgb(240, 240, 240);
}
.content {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 1rem;
}

p {
    padding: 0;
    margin: 0.5rem 0 0 0;
}

@media only screen and (max-width: 800px) {
    .content {
        font-size: 0.5rem;
    }
}

</style>

