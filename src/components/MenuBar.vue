<script>
export default {
    data() {
        return {
            menus: [
                { link: "/Home", label: "ホーム" },
                { link: "/Test", label: "企画紹介" },
                { link: "/Greet", label: "ごあいさつ" },
                { link: "/Test", label: "パンフレット" },
                { link: "/Test", label: "アクセス" }
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
    <header class="menu-bar">
        <nav>
            <ul>
                <li v-for="menu in menus">
                    <RouterLink :to="menu.link">
                        <div :class="{ 'underline': menu.link === currentPage }">
                            {{ menu.label }}
                        </div>
                    </RouterLink>
                </li>
            </ul>
        </nav>
    </header>
</template>


<style scoped>
.underline {
    border-bottom: 2px solid rgb(0, 119, 199);
}

.menu-bar {
    position: fixed;
    top: 0;
    background-color: #d6d6d6;
    color: #000000;
    padding: 10px;
    z-index: 100;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav li {
    display: inline-block;
    margin: 0 15px;
}

nav a {
    text-decoration: none;
    color: #000000;
    font-size: 18px;
}

nav a:hover {
    color: rgb(0, 119, 199);
}
</style>