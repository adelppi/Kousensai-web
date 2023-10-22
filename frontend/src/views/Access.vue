<template>
    <body>
        <main>
            <div class="title">アクセス</div>
            <div id="content">
                <section>
                    <div class="inner">
                        <div class="address">
                            <h2>所在地</h2>
                            <p>産業技術高等専門学校荒川キャンパス</p>
                            <p>116-8523<br>東京都荒川区南千住8-17-1<br>TEL:03-3801-0145（代表）<br>FAX:03-3801-9898</p>
                        </div>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.652931122075!2d139.809471!3d35.7345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188efc18a2a98f%3A0x246673ba4052316c!2z5p2x5Lqs6YO956uL55Sj5qWt5oqA6KGT6auY562J5bCC6ZaA5a2m5qChIOiNkuW3neOCreODo-ODs-ODkeOCuSAtVG9reW8gTWV0cm9wb2xpdGFuIENvbGxlZ2Ugb2YgSW5kdXN0cmlhbCBUZWNobm9sb2d5IEFyYWthd2EgY2FtcHVzLQ!5e0!3m2!1sja!2sjp!4v1692104438239!5m2!1sja!2sjp"
                                width="100%" height="300" style="border:0;" allowfullscreen="true" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </section>
                <section>
                    <h2 class="ttl">各種交通手段</h2>
                    <div class="inner">
                        <div class="access">
                            <h3>電車</h3>
                            <p>
                                ・JR常磐線・東京メトロ日比谷線<br>
                                &emsp;南千住駅 徒歩15分
                            </p>
                            <p>
                                ・東武伊勢崎線(東武スカイツリーライン)<br>
                                &emsp;鐘ヶ淵駅 徒歩18分<br>
                                &emsp;牛田駅 徒歩20分
                            </p>
                            <p>
                                ・京成電鉄<br>
                                &emsp;京成関屋駅 徒歩20分
                            </p>
                        </div>
                        <div class="access">
                            <h3>バス</h3>
                            <p>
                                ・都営バス<br>
                                &emsp;都立産業技術高専荒川キャンパス前下車<br>
                                &emsp;徒歩1分・上野松坂屋前⇔南千住駅東口
                            </p>
                            <p>
                                ・(上46系統)<br>
                                &emsp;上野駅前から30分→南千住駅東口から8分
                            </p>
                            <h3>自転車</h3>
                            <p>&emsp;校内に駐輪場を用意しております。</p>
                        </div>
                    </div>
                    <div id="car">
                        <h3>※ご注意※</h3>
                        <p>駐車場の用意がございませんので、車・バイク・キックボード等での来場はご遠慮くださいますようお願いいたします。</p>
                    </div>
                </section>
                <section>
                    <h2 class="ttl">アクセスMAP</h2>
                    <div class="img_box">
                        <img src="../assets/access_map.png" alt="アクセスmap" style="width: 100%" />
                    </div>
                </section>
            </div>
        </main>
    </body>>
</template>
  
<style scoped>
#content {
    width: 80%;
    margin: 0 auto;
}

section {
    margin-bottom: 40px;
}

.inner {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.address,
.map,
.access {
    flex: 0 0 48%;
}

.ttl {
    text-align: center;
    margin-bottom: 20px;
}

#car {
    margin-top: 20px;
}

.access p {
    font-size: 15px;
}

.img_box {
    text-align: center;
}

img {
    max-width: 100%;
}

/* Mobile */
@media only screen and (max-width: 800px) {
    .inner {
        display: flex;
        flex-direction: column;
    }

    .address,
    .map,
    .access {
        width: 100%;
    }
}
</style>
