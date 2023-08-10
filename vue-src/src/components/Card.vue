<script>
export default {
    props: {
        name: String,
        description: String
    },
    data() {
        return {
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
                {{ description }}
            </div>
        </div>
    </div>
</template>


<style scoped>
.card {
    margin-top: 12%;
    width: 288px;
    height: auto;
}

.card-skin{
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 4px 15px rgba(0,0,0,.2);
}

.card__imgframe {
    width: 100%;
    height: auto;
    padding-top: 56.25%;
    background: url(https://placehold.jp/3d4070/ffffff/500x500.png) no-repeat center;
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