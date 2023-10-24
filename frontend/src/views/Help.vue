<template>
    <body>
        <main>
            <div class="title">お困りの際は</div>
            <div class="content">
                <p>
                    <budoux-ja>
                        お困りの際は、お近くのオレンジジャンパーまたは腕章をつけたスタッフにお声掛けください。<br>
                        またメールでも承っております(kousensai.help@gmail.com)。
                        お怪我の際は2階保健室をご利用ください。<br>
                    </budoux-ja>
                    落とし物のをお探しの際は、<router-link to="/LostFound" style="display: inline-block;">落とし物一覧
                        <span class="material-symbols-outlined">
                            open_in_new
                        </span>
                    </router-link>
                    <budoux-ja>
                        をご確認、または２階本部にお越しください。
                    </budoux-ja>
                </p>
                <img src="../assets/help.png" style="width: 75%;margin: 0 auto;">
            </div>
        </main>
    </body>
</template>
  
<style scoped>
p {
    font-size: 1.2rem;
    text-align: center;
}

.content {
    display: flex;
    width: 100%;
    flex-direction: column;
    justify-content: center;
}

/* Mobile */
@media only screen and (max-width: 800px) {
    p {
        font-size: 0.8rem;
    }

    .material-symbols-outlined {
        font-size: 1rem;
    }
}
</style>
