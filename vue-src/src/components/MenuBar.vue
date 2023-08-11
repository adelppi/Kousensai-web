<script>
export default {
    data() {
        return {
            menus: [
                { path: "/Home", label: "ホーム" },
                { path: "/Introduction", label: "企画紹介" },
                { path: "/Greeting", label: "ごあいさつ" },
                { path: "/Brochure", label: "パンフレット" },
                { path: "/Access", label: "アクセス" }
            ],
            currentPage: ""
        }
    },
    created() {
        this.currentPage = this.$route.path;
    }
}
</script>

<template>
    <div class="menu-bar">
        <RouterLink class="logo" to="/Home">
            <img src="../assets/nelnel.jpg" alt="Logo" style="width: 75px;">
        </RouterLink>

        <RouterLink v-for="menu in menus" class="menu" :class="{ 'underline': menu.path === currentPage }" :to="menu.path">
            {{ menu.label }}
        </RouterLink>
    </div>
</template>


<style scoped>
.menu-bar {
    width: 75%;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    margin-right: 10%;
    color: #000000;
}

.menu {
    padding: 1% 5%;
    color: #000000;
    background-color: #ffffff;
    /* flex: 1; */
    white-space: nowrap;
    transition: background-color 0.25s ease-in-out;
}

.menu:hover {
    background-color: #ececec;
}

.underline {
    position: relative;
    display: inline-block;
}

.underline:before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 5%;
    display: inline-block;
    width: 50%;
    height: 2px;
    transform: translateX(-50%);
    background-color: rgb(199, 90, 0);
    border-radius: 2px;
    transition: transform 0.25s ease-in-out;
}

@media screen and (max-width: 450px) {}
</style>