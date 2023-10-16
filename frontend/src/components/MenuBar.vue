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
                { path: "/Vote", label: "人気企画投票", icon: "social_leaderboard" }
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
            const hamburgerButton = document.getElementsByClassName("hamburger-button")[0];
            const navList = document.getElementsByClassName("nav-list")[0];

            navList.focus();

            navList.classList.toggle("nav-list-shown");

            navList.addEventListener("blur", function navListLostFocus(event) {
                if (event.relatedTarget == null) {
                    navList.classList.remove("nav-list-shown");
                }
                navList.removeEventListener("blur", navListLostFocus);
                console.log("activated")
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <div class="top-bar">
        <div class="logo-container">
            <RouterLink to="/Home">
                <img src="../assets/logo.svg" alt="TMCIT Logo" class="logo-img">
            </RouterLink>
        </div>
        <div class="hamburger-button-container">
            <button class="hamburger-button" @click="hamburgerClicked">
                <img src="../assets/logo.svg" alt="hamburger icon" class="hamburger-img">
            </button>
        </div>
    </div>
    <div class="nav-list" tabindex="0">
        <RouterLink v-for="nav in navs" :to="nav.path" class="nav-item" @click="hideNavList($event)">
            <div class="nav-icon" :class="{ 'nav-icon-background': nav.path === currentPage }">
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
    background-color: #222;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    z-index: 1000;
}

.hamburger-button {
    position: fixed;
    top: 0.5rem;
    right: 0;
    height: 3rem;
    background: none;
    border: none;
}

.top-bar div, .top-bar img {
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
    background-color: #222;
    transition: 0.2s ease-in-out ;
    z-index: 1000;
}

.nav-list * {
    width: 0%;
    margin: 0;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: start;
    text-wrap: nowrap;
    opacity: 0;
    transition: 0.2s ease-in-out;
}

.nav-item {
    display: flex;
    flex-direction: row;
    margin-bottom: 1rem;
    height: 3rem;
}

.nav-item * {
    height: 100%;
}

.nav-list-shown {
    width: 30rem;
    padding-left: 2rem;
}

.nav-list-shown * {
    width: 100%;
    opacity: 100%;
}

.nav-list-shown .nav-icon {
    width: 3rem;
    margin-right: 1rem;
}

.menu-item {
    width: 62.5%;
    padding: 0.75rem;
    margin-bottom: 1rem;
    color: #ffffff;
    border-radius: 25px;
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