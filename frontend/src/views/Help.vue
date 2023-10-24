<template>
    <body>
        <main>
            <div class="title">お困りの際は</div>
            <div class="content">
                <p>
                    お困りの際は、お近くのオレンジジャンパーか腕章をつけたスタッフにお声掛けください。

                    またメールでも承っております。
                    kousensai.help@gmail.com

                    お怪我の際は2階保健室をご利用ください。

                    落とし物の際は、<router-link to="/LostFound" style="display: inline-block;">落とし物データベース
                        <span class="material-symbols-outlined">
                            open_in_new
                        </span>
                    </router-link>、または２階本部に起こしください。
                </p>
            </div>
        </main>
    </body>
</template>
  
<style scoped>

p {
    padding: 0 10rem 0 10rem;
}

/* Mobile */
@media only screen and (max-width: 800px) {
}
</style>
