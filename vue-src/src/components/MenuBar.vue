<script>
export default {
    data() {
        return {
            menus: [
                { path: "/Home", label: "ホーム", icon: "home" },
                { path: "/Greeting", label: "ごあいさつ", icon: "waving_hand" },
                { path: "/Introduction", label: "企画紹介", icon: "storefront" },
                { path: "/Brochure", label: "パンフレット", icon: "map" },
                { path: "/Access", label: "アクセス", icon: "location_on" }
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <div class="menu-bar">
        <div class="menu-bar-nav">
            <RouterLink to="/Home">
                <img src="../assets/logo.svg" style="width: 100px;">
            </RouterLink>
            <div class="spacer"></div>
            <RouterLink v-for="menu in menus" :to="menu.path" class="menu-item">
                <div class="menu-link">
                    <span class="material-symbols-outlined">
                        {{ menu.icon }}
                    </span>
                    <span class="link-text">{{ menu.label }}</span>
                </div>
            </RouterLink>
        </div>
    </div>
</template>


<style scoped>
.menu-bar {
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
    width: 62.5%;
    padding: 0.5rem;
    margin-bottom: 2rem;
    color: #ffffff;
}

.menu-item:hover {
    color: #222;
    background-color: #ffffff;
    transition: all 0.25s;
}

.menu-link {
    display: flex;
    align-items: center;
    text-decoration: none;
}

.link-text {
    margin-left: auto;
    margin-right: auto;
    text-decoration: inherit;
}

.spacer {
    margin-bottom: 5rem;
}

/* モバイルのとき */
@media only screen and (max-width: 600px) {
    .menu-bar {
        bottom: 0;
        width: 100vw;
        height: 5rem;
    }

    .menu-bar-nav {
        flex-direction: row;
    }

    .menu-link {
        justify-content: center;
    }

}

/* モバイルでないとき */
@media only screen and (min-width: 600px) {
    .menu-bar {
        width: 15rem;
        height: 100vh;
    }
}
</style>