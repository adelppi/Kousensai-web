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
            currentPage: "",
            isMobile: false,
        }
    },
    created() {
        this.currentPage = this.$route.path;
        this.checkIfMobile()
        window.addEventListener("resize", this.checkIfMobile);
    },
    methods: {
        checkIfMobile() {
            this.isMobile = window.innerWidth <= 750;
        }
    }
}
</script>

<template>
    <div class="menu-bar">
        <div class="menu-bar-nav">
            <RouterLink to="/Home">
                <img src="../assets/logo.svg" style="width: 100px;">
            </RouterLink>
            <div class="spacer"></div>
            <RouterLink v-for="menu in menus" :to="menu.path" class="menu-item">
                <div class="menu-link">
                    <span class="link-text">{{ menu.label }}</span>
                </div>
            </RouterLink>
        </div>
    </div>
</template>


<style scoped>
.menu-bar {
    width: 15rem;
    height: 100vh;
    position: fixed;
    background-color: #222;
}

.menu-bar-nav {
    list-style: none;
    padding: 0;
    margin: 0;
    margin-top: 10vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.menu-item {
    width: 100%;
}

.menu-link {
    display: flex;
    align-items: center;
    height: 5rem;
    color: white;
    text-decoration: none;
}

.link-text {
    margin-left: auto;
    margin-right: auto;
    color: #ffffff;
    text-decoration: inherit;
}

.link-text:hover {
    color: #222;
    background-color: #ffffff;
    transition: all 0.25s;
}

.spacer {
    margin-bottom: 5rem;
}
</style>