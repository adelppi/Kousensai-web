<script>
export default {
    props: {
        currentPage: String
    },
    data() {
        return {
            menus: [
                { path: "/Home", label: "ホーム", icon: "home" },
                // { path: "/Greeting", label: "ごあいさつ", icon: "waving_hand" },
                { path: "/Introduction", label: "企画紹介", icon: "storefront" },
                { path: "/Vote", label: "人気企画TOP10", icon: "social_leaderboard" },
                { path: "/Brochure", label: "パンフレット", icon: "map" },
                { path: "/Access", label: "アクセス", icon: "location_on" },
                { path: "/LostFound", label:"落とし物一覧", icon: "category" },
                { path: "/Help", label:"お困りの際は", icon: "help" }
            ]
        }
    }
}
</script>

<template>
    <div class="navbar">
        <router-link to="/Home">
            <img src="../assets/logo.svg" class="logo" />
        </router-link>
        <div class="menu-items">
            <router-link v-for="(menu, index) in menus" :to="menu.path" :key="index" class="menu-item"
                :class="{ 'menu-item-underlined': menu.path === currentPage }">
                {{ menu.label }}
            </router-link>
        </div>
    </div>
</template>


<style scoped>
.navbar {
    font-size: 1rem;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #f8f9fa;
    height: 6rem;
    padding: 0 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.logo {
    width: 50px;
    margin: 0 4rem;
}

.menu-items {
    display: flex;
}

.menu-item {
    margin: 0 1rem;
    text-decoration: none;
    color: #333;
}

.menu-item-underlined {
    margin: 0 1rem;
    text-decoration: none;
    color: #333;
    border-bottom: 0.1rem solid;
    color: #007bff;
}

.menu-item:hover {
    color: #007bff;
}
@media only screen and (max-width: 1100px) {
    .navbar{
        font-size: 0.75rem;
    }
}
</style>
