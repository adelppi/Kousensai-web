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
            <h1>アクセス</h1>
            <h2>所在地</h2>
            産業技術高等専門学校荒川キャンパス
            <p>
                116-8523<br>
                東京都荒川区南千住8-17-1<br>
                TEL:03-3801-0145（代表）<br>
                FAX:03-3801-9898
            </p>

            <h2>電車</h2>
            JR常磐線・東京メトロ日比谷線
            ・つくばエクスプレス
            南千住駅 徒歩15分
            東武伊勢崎線（東武スカイツリーライン）
            鐘ヶ淵駅 徒歩18分
            牛田駅 徒歩20分
            京成電鉄
            京成関屋駅 徒歩20分

            <h2>バス</h2>
            都営バス
            都立産業技術高専荒川キャンパス前下車
            徒歩1分・上野松坂屋前⇔南千住駅東口
            （上46系統）
            上野駅前から30分→南千住駅東口から8分

            <h2>自転車</h2>
            校内に駐輪場を用意しております。

            <h2>ご注意</h2>
            駐車場の用意がございませんので、車・バイク・キックボード等での来場はご遠慮くださいますようお願いいたします。
            <!-- 駐車場にご用意がございませんので、公共交通機関・自転車・徒歩でのご来校をおすすめしています。 -->

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.652931122075!2d139.809471!3d35.7345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188efc18a2a98f%3A0x246673ba4052316c!2z5p2x5Lqs6YO956uL55Sj5qWt5oqA6KGT6auY562J5bCC6ZaA5a2m5qChIOiNkuW3neOCreODo-ODs-ODkeOCuSAtVG9reW8gTWV0cm9wb2xpdGFuIENvbGxlZ2Ugb2YgSW5kdXN0cmlhbCBUZWNobm9sb2d5IEFyYWthd2EgY2FtcHVzLQ!5e0!3m2!1sja!2sjp!4v1692104438239!5m2!1sja!2sjp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </main>
    </body>
</template>

<style scoped></style>