<script>
export default {
    data() {
        return {
            menus: [
                { path: "/Home", label: "ホーム" },
                { path: "/Introduction", label: "企画紹介" },
                { path: "/Greeting", label: "ごあいさつ" },
                { path: "/Brochure", label: "パンフレット" },
                { path: "/Access", label: "アクセス" }
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
    <div class="menu-bar-vertical">
        <RouterLink to="/Home">
            <img src="../assets/nelnel.jpg" alt="Logo" style="width: 125px;">
        </RouterLink>

        <div class="spacer"></div>

        <RouterLink v-for="menu in menus" :to="menu.path">
            <div class="text">
                {{ menu.label }}
            </div>
        </RouterLink>
    </div>
</template>


<style scoped>
.menu-bar-vertical {
    width: 100%;
    margin-top: 50%;
    margin-left: 25%;
}

.spacer {
    height: 100px;
}

.text {
    font-size: 25px;
}
</style>