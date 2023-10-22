<template>
    <div class="footer-container">
        <div class="content">
            <router-link to="/Home">
                <img src="../assets/logo.svg" class="logo" />
            </router-link>
            Copyright © 2020 高専祭実行委員会 All rights reserved.
        </div>
    </div>
</template>


<style scoped>
img {
    width: 2rem;
}
.footer-container{
    position: absolute;
    width: 100%;
    height: 10vh;
    background-color: rgb(240, 240, 240);
}
.content{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 60%;
    height: 100%;
    margin: 0rem auto;
}
</style>
