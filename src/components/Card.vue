<script>
export default {
    data() {
        return {
            name: "企画名",
            content: "企画概要"
        }
    },
    created() {
    }
}
</script>

<template>
    <div class="card card-skin">
        <div class="card__imgframe"></div>
        <div class="card__textbox">
            <div class="card__titletext">
                {{ name }}
            </div>
            <div class="card__overviewtext">
                {{ content }}
            </div>
        </div>
    </div>
</template>


<style scoped>
.card {
    width: 288px;
    height: auto;
}

.card-skin .card__textbox {
    background: #333333;
    color: #ffffff;
}

.card__imgframe {
    width: 100%;
    height: auto;
    padding-top: 56.25%;
    background: url(https://placehold.jp/640x360.png) no-repeat center;
    background-size: cover;
    box-sizing: border-box;
}

.card__textbox {
    width: 100%;
    height: auto;
    padding: 20px 18px;
    background: #ffffff;
    box-sizing: border-box;
}

.card__textbox>*+* {
    margin-top: 10px;
}

.card__titletext {
    font-size: 20px;
    font-weight: bold;
    line-height: 125%;
}

.card__overviewtext {
    font-size: 12px;
    line-height: 150%;
}
</style>