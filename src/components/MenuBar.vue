<script>
export default {
    data() {
        return {
            menus: [
                { link: "/Home", label: "ホーム" },
                { link: "/Test", label: "企画紹介" },
                { link: "/Greet", label: "ごあいさつ" },
                { link: "/Test1", label: "パンフレット" },
                { link: "/Test2", label: "アクセス" }
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
                <li v-for="menu in menus" class="menu" :class="{ 'underline': menu.link === currentPage }">
                    <RouterLink :to="menu.link">
                        {{ menu.label }}
                    </RouterLink>
                </li>
            </ul>
        </nav>
    </header>
</template>


<style scoped>
.menu {
    padding: 1% 1%;
    background-color: #ffffff;
    transition: background-color 0.25s ease-in-out;
}

.menu:hover {
    background-color: #ececec;
}

.underline {
  position: relative;
  display: inline-block;
}

.underline:before {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 7.5%;
    display: inline-block;
    width: 75%;
    height: 2px;
    transform: translateX(-50%);
    background-color: rgb(0, 119, 199);
    border-radius: 2px;
}
/* .underline:hover {
    content: "";
    position: absolute;
    left: 50%;
    bottom: 7.5%;
    display: inline-block;
    width: 75%;
    height: 2px;
    transform: translateX(-50%);
    background-color: rgb(0, 119, 199);
    border-radius: 2px;
} */

/* 
.underline {
    border-bottom: 2px solid rgb(0, 119, 199);
    transition: background-color 0.25s ease-in-out;
}

.underline:hover {
    border-bottom: 2px solid rgb(0, 119, 199);
} */

.menu-bar {
    position: fixed;
    top: 0;
    background-color: #ffffff;
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
}</style>