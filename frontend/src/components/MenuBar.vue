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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
    <RouterLink to="/Home">
        <img src="../assets/logo.svg" class="logo" style="width: 50px;">
    </RouterLink>
    <RouterLink v-for="menu in menus" :to="menu.path" class="menu-item">
        {{ menu.label }}
    </RouterLink>
</template>


<style scoped></style>