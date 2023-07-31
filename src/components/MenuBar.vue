<script>
export default {
    data() {
        return {
            menus: [
                { path: "/Home", label: "ホーム" },
                { path: "/Test", label: "企画紹介" },
                { path: "/Greet", label: "ごあいさつ" },
                { path: "/Test1", label: "パンフレット" },
                { path: "/Test2", label: "アクセス" }
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
        <RouterLink v-for="menu in menus" class="menu" :class="{ 'underline': menu.path === currentPage }" :to="menu.path">
            {{ menu.label }}
        </RouterLink>
    </header>
</template>


<style scoped>
.menu-bar {
    left: 25%;
    justify-content: center;
    display: flex;
    position: fixed;
    top: 1%;
    background-color: #ffffff;
    z-index: 100;
}


.menu {
    padding: 2.5% 10% 2.5% 10%;
    color: #000000;
    background-color: #ffffff;
    flex: 1;
    white-space: nowrap;
    transition: background-color 0.25s ease-in-out;
}

.menu:hover {
    background-color: #ececec;
}

.no-wrap {
    white-space: nowrap;
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
    transition: width 0.25s ease-in-out;
}

.underline:hover:before {
    width: 62.5%;
}
</style>