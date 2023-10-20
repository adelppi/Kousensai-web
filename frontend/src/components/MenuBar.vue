<script>
export default {
    props: {
        currentPage: String
    },
    data() {
        return {
            menus: [
                { path: "/Home", label: "ホーム", icon: "home" },
                { path: "/Greeting", label: "ごあいさつ", icon: "waving_hand" },
                { path: "/Introduction", label: "企画紹介", icon: "storefront" },
                { path: "/Brochure", label: "パンフレット", icon: "map" },
                { path: "/Access", label: "アクセス", icon: "location_on" },
                { path: "/Vote", label: "人気企画投票", icon: "social_leaderboard" }
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
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #f8f9fa;
    height: 10%;
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
</style>
