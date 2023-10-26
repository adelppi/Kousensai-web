<script>
export default {
    props: {
        currentPage: String
    },
    data() {
        return {
            navs: [
                { path: "/Home", label: "ホーム", icon: "home" },
                { path: "/Greeting", label: "ごあいさつ", icon: "waving_hand" },
                { path: "/Introduction", label: "企画紹介", icon: "storefront" },
                { path: "/Brochure", label: "パンフレット", icon: "map" },
                { path: "/Access", label: "アクセス", icon: "location_on" },
                { path: "/Vote", label: "人気企画投票", icon: "social_leaderboard" },
                { path: "/Help", label: "お困りの際は", icon: "help" }
            ],
            isMobile: false,
            navListShown: false,
        }
    },
    created() {
        this.checkIfMobile()
        window.addEventListener("resize", this.checkIfMobile);
    },
    methods: {
        checkIfMobile() {
            this.isMobile = window.innerWidth <= 750;
        },
        hamburgerClicked() {
            const navList = document.getElementsByClassName("nav-list")[0];

            navList.focus();

            navList.classList.toggle("nav-list-shown");

            navList.addEventListener("blur", function navListLostFocus(event) {
                if (event.relatedTarget == null) {
                    navList.classList.remove("nav-list-shown");
                }
                navList.removeEventListener("blur", navListLostFocus);
            })
        },
        hideNavList() {
            const navList = document.getElementsByClassName("nav-list")[0];
            navList.classList.remove("nav-list-shown");
        }
    }
}
</script>

<template>
    <div class="top-bar">
        <div class="logo-container">
            <RouterLink to="/Home">
                <img src="../assets/logo.svg" alt="TMCIT Logo" class="logo-img">
            </RouterLink>
        </div>
        <div class="hamburger-button-container">
            <button class="hamburger-button" @click="hamburgerClicked">
                <span class="material-symbols-outlined" style="font-size: 50px;">
                    menu
                </span>
            </button>
        </div>
    </div>
    <div class="nav-list" tabindex="0">
        <RouterLink v-for="nav in navs" :to="nav.path" class="nav-item"
            :class="{ 'nav-item-selected': nav.path === currentPage }" @click="hideNavList($event)">
            <div class="nav-icon">
                <span class="material-symbols-outlined">{{ nav.icon }}</span>
            </div>
            <span class="nav-text">{{ nav.label }}</span>
        </RouterLink>
    </div>
</template>
<style scoped>
.top-bar {
    position: fixed;
    top: 0;
    left: 0;
    height: 3rem;
    width: 100vw;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background-color: #f8f9fa;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    z-index: 1001;
}

.hamburger-button {
    color: #222;
    position: fixed;
    top: 0.5rem;
    right: 0;
    height: 3rem;
    background: none;
    border: none;
}

.top-bar div,
.top-bar img {
    height: 100%;
}

.nav-list {
    position: fixed;
    top: 4rem;
    right: 0;
    height: 100vh;
    width: 0;
    padding-top: 0.5rem;
    padding-left: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    background-color: #f8f9fa;
    box-shadow: -2px 0 4px rgba(0, 0, 0, 0.1);
    transition: width 0.2s ease-in-out;
    z-index: 1000;
    overflow: hidden;
}

.nav-list * {
    width: 0;
    margin: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    white-space: nowrap;
    opacity: 0;
    transition: width 0.2s ease-in-out, opacity 0.2s ease-in-out;
}

.nav-item {
    height: 2rem;
    margin-bottom: 0.5rem;
    border-radius: 25px;
    display: flex;
    flex-direction: row;
    padding: 1rem;
    color: #222;
    width: 100%;
    justify-content: flex-start;
}

.nav-icon {
    color: #222;
    padding: 10px;
}

.nav-list-shown {
    width: 18rem;
}

.nav-list-shown * {
    width: 100%;
    opacity: 1;
}

.nav-list-shown .nav-icon {
    width: 3rem;
    margin-right: 1rem;
}

.nav-list-shown .nav-item {
    width: 100%;
}

.nav-item-selected {
    color: white;
    background-color: #6cb4e4;
}

.material-symbols-outlined {
    font-size: 1.75rem;
}

.nav-item-selected .material-symbols-outlined,
.nav-item-selected .t {
    color: white;
}
</style>
