<script>
export default {
    data() {
        return {
            menus: [
                { path: "/Home", label: "ホーム", icon: "home" },
                { path: "/Greeting", label: "ごあいさつ", icon: "waving_hand" },
                { path: "/Introduction", label: "企画紹介", icon: "storefront" },
                { path: "/Brochure", label: "パンフレット", icon: "map" },
                { path: "/Access", label: "アクセス", icon: "location_on" },
                { path: "/Vote", label: "人気企画投票", icon: "social_leaderboard" }
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
        <div class="logo-container">
            <RouterLink to="/Home">
                <img src="../assets/logo.svg" class="logo">
            </RouterLink>
        </div>
        <div class="spacer"></div>
        <RouterLink v-for="menu in menus" :to="menu.path" class="menu-item">
            <div class="menu-link">
                <div class="menu-icon" :class="{ 'menu-icon-background': menu.path === currentPage }">
                    <span class="material-symbols-outlined">{{ menu.icon }}</span>
                </div>
                <span class="link-text">{{ menu.label }}</span>
            </div>
        </RouterLink>
    </div>
</template>


<style scoped>
.menu-bar {
    width: 7.5rem;
    height: 100vh;
    position: fixed;
    background-color: #222;
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: all 0.2s ease;
}

.menu-bar:hover {
    width: 17rem;
}

.menu-item {
    display: flex;
    width: 62.5%;
    padding: 0.75rem;
    margin-bottom: 1rem;
    color: #ffffff;
    /* transition: all 0.2s ease; */
    transition: background-color 0.2s ease, padding 0.2s ease, margin 0.2s ease;
}

.menu-item:hover {
    padding: 1.75rem;
    color: #222;
    background-color: #ffffff;
}

.menu-bar:hover .menu-item {
    margin-left: 1rem;
}

.menu-link {
    display: flex;
    text-decoration: none;
    transform: translateX(50%);
    transition: all 0.2s ease;
}

.menu-bar:hover .menu-link {
    transform: translateX(0);
}

.menu-icon-background {
    margin-right: 0rem;
    padding: 0.25rem;
    color: #222;
    background-color:#ffffff;
    border-radius: 25%;
    transition: margin-right 0.2s ease;
}

.menu-icon {
    margin-right: 0rem;
    padding: 0.25rem;
    border-radius: 25%;
    transition: margin-right 0.2s ease;
}

.menu-bar:hover .menu-icon {
    margin-right: 1.5rem;
}

.link-text {
    display: block;
    width: 0;
    white-space: nowrap;
    text-decoration: inherit;
    margin-top: auto;
    margin-bottom: auto;
    font-size: 0;
    opacity: 0;
    transition: opacity 0.2s ease, font-size 0.2s ease;
}

.menu-bar:hover .link-text {
    font-size: 1rem;
    opacity: 1;
}

.menu-item:hover .link-text {
    font-size: 1.25rem;
}

.spacer {
    margin-bottom: 3rem;
}

.material-symbols-outlined {
    font-size: 1.75rem;
}

.menu-item:hover .material-symbols-outlined {
    font-size: 2rem;
}

.logo-container {
    height: 7rem;
}

.logo {
    margin-top: 3rem;
    width: 3rem;
    transition: all 0.2s ease;
}

.menu-bar:hover .logo {
    width: 4rem;
}

/* モバイルのとき */
@media only screen and (max-width: 600px) {}
</style>