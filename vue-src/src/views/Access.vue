<!-- npm run dev -->

<script>
import MenuBar from '../components/MenuBar.vue'
export default {
    components: {
        MenuBar,
    }
}
</script>

<template>
    <body>
        <MenuBar />
        <main>
            <div id="content">
                <h1>アクセス</h1>

                <section>

                    <div class="inner">
                        <div class="adress">
                            <h2>所在地</h2>
                            <p>
                                産業技術高等専門学校荒川キャンパス
                            </p>
                            <p>
                                116-8523<br>
                                東京都荒川区南千住8-17-1<br>
                                TEL:03-3801-0145（代表）<br>
                                FAX:03-3801-9898
                            </p>
                        </div>

                        <div class="map">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.652931122075!2d139.809471!3d35.7345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188efc18a2a98f%3A0x246673ba4052316c!2z5p2x5Lqs6YO956uL55Sj5qWt5oqA6KGT6auY562J5bCC6ZaA5a2m5qChIOiNkuW3neOCreODo-ODs-ODkeOCuSAtVG9reW8gTWV0cm9wb2xpdGFuIENvbGxlZ2Ugb2YgSW5kdXN0cmlhbCBUZWNobm9sb2d5IEFyYWthd2EgY2FtcHVzLQ!5e0!3m2!1sja!2sjp!4v1692104438239!5m2!1sja!2sjp"
                            width=80%
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                        </div>
                    </div>

                </section>


                <section>
                    <h2 class="title">アクセス</h2>

                    <div class="inner">

                        <div class="access">
                            <h3>電車</h3>

                            <p>
                                <p>
                                ・JR常磐線・東京メトロ日比谷線<br>・つくばエクスプレス<br>
                                &emsp;南千住駅 徒歩15分<br>
                                </p>
                                <p>
                                ・東武伊勢崎線(東武スカイツリーライン)<br>
                                &emsp;鐘ヶ淵駅 徒歩18分<br>
                                &emsp;牛田駅 徒歩20分<br>
                                </p>
                                <p>
                                ・京成電鉄<br>
                                &emsp;京成関屋駅 徒歩20分"
                                </p>
                            </p>

                        </div>

                        <div class="access">

                            <h3>バス</h3>

                            <p>
                                ・都営バス<br>
                                &emsp;都立産業技術高専荒川キャンパス前下車<br>
                                &emsp;徒歩1分・上野松坂屋前⇔南千住駅東口<br>
                                ・(上46系統)<br>
                                &emsp;上野駅前から30分→南千住駅東口から8分
                            </p>

                            <h3>自転車</h3>
                            <p>
                                校内に駐輪場を用意しております。
                            </p>
                        </div>
                    </div>

                    <div id="car">
                        <h3>※ご注意※</h3>

                        <p>
                            駐車場の用意がございませんので、車・バイク・キックボード等での来場は<br>ご遠慮くださいますようお願いいたします。
                            <!-- 駐車場にご用意がございませんので、公共交通機関・自転車・徒歩でのご来校をおすすめしています。 -->
                        </p>
                    </div>

                </section>

                <section>

                    <h2 class="title">アクセスMAP</h2>

                    <div class="img_box">
                        <img
                        src="..\assets\000000452.jpg"
                        alt="アクセスmap"
                        >
                    </div>

                </section>
            </div>
        </main>
    </body>
</template>

<style scoped>
#content {
    width: 80%;
    height: 100%;
    margin: 0 auto;
}


section {
    border-bottom: 1px  solid;
    border-color: #ffffff;
}

section .inner {
    width: 100%;
    display: flex;
    padding-left: 7%;
    padding-right: 7%;
}

section .adress {
    display: block;
}

section .map {
    padding-bottom: 20px;
    width: 50%;
    margin: auto;
}

section .box {
    padding-left: 7%;
    font-size: 16px;
}

section p {
    white-space: pre;
}


section .title {
    text-align: center;
}

section .bold{
    font-weight: bold;
}

section .img_box {
    text-align: center;
    padding-left: 5%;
    padding-right: 5%;
    padding-bottom: 3%;
}

#car {
    padding-left: 7%;
}

.access {
    width: 100%;
}

.access p {
    font-size: 15px;
}

</style>