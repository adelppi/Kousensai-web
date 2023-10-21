<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            ['id' => 1, 'team_name' => 'ロボット工学コース', 'project_name' => 'ロボット工学コース紹介', 'project_description' => 'ロボット工学コースの実験で扱う装置や実習で製作しているモノを展示しているので来てください。', 'project_space' => '知能機械工学実験実習室 A602', 'vote' => '0'],
            ['id' => 2, 'team_name' => '航空技術者育成プログラム（ガチプロ）', 'project_name' => 'ガチプロって何！', 'project_description' => '航空実習館（汐風）で実機（セスナ機）に触れ飛行機を学びましょう。', 'project_space' => '航空実習館 汐風', 'vote' => '0'],
            ['id' => 3, 'team_name' => '高崎研究室', 'project_name' => '高崎研究室', 'project_description' => 'ミニ電光掲示板を作りませんか？オリジナルメッセージを表示させられます。', 'project_space' => '共同実験室 A515', 'vote' => '0'],
            ['id' => 4, 'team_name' => '高専女子', 'project_name' => 'TOOL BOX', 'project_description' => '展示・体験・撮影と楽しみ盛り沢山の企画です!TOOL BOXにて道具たちとお待ちしてます!', 'project_space' => 'R3', 'vote' => '0'],
            ['id' => 5, 'team_name' => '奇術部', 'project_name' => 'トランプの森', 'project_description' => '奇術部のクロースマジックです！机の上で繰り出される魅惑のマジックをお楽しみに！', 'project_space' => 'T3', 'vote' => '0'],
            ['id' => 6, 'team_name' => '奇術部', 'project_name' => '奇術部 on the SEKIREI', 'project_description' => '奇術部のステージマジックです！大きな道具を使うマジック等を披露します。驚くこと間違いなし！', 'project_space' => 'セキレイステージ', 'vote' => '0'],
            ['id' => 7, 'team_name' => '剣道部', 'project_name' => '応力解析麺道場', 'project_description' => '剣道部が丹精込めて茹であげるうどん。そのヤング率や引張り強さは如何程か、、是非ご賞味あれ！', 'project_space' => '屋外屋台', 'vote' => '0'],
            ['id' => 8, 'team_name' => 'インパクト', 'project_name' => 'インパクト', 'project_description' => '普段バレーをしています。からあげに魂を込めました。味わってください。', 'project_space' => '屋外屋台', 'vote' => '0'],
            ['id' => 9, 'team_name' => '1年8組', 'project_name' => 'お化け屋敷', 'project_description' => '1年8組開催、恐怖のお化け屋敷高専の闇を君は見る覚悟はありますか？', 'project_space' => '1年8組', 'vote' => '0'],
            ['id' => 10, 'team_name' => '鉄道ジオラマ同好会', 'project_name' => '鉄道模型運転会', 'project_description' => '鉄道模型の走行会や鉄道模型コンテストに出展した作品展示等を行っています。', 'project_space' => 'A5', 'vote' => '0'],
            ['id' => 11, 'team_name' => 'とある高専の昆虫劇場', 'project_name' => 'とある高専の昆虫劇場', 'project_description' => '昆虫採集、釣りに行った報告レポートの展示、無料のアクセサリー作成コーナーをやってます！', 'project_space' => '第6講義室 A323', 'vote' => '0'],
            ['id' => 12, 'team_name' => 'プラモ愛好会', 'project_name' => 'プラモコンテスト・展示', 'project_description' => '様々なプラモデルを展示するので是非足を運んでみてください‼︎', 'project_space' => '第4講義室 A308', 'vote' => '0'],
            ['id' => 13, 'team_name' => '機体展示とシュミレーター', 'project_name' => '機体展示とシュミレーター', 'project_description' => '体育館でRC飛行機の展示とシュミレーター体験やってます。飛行展示や操縦体験があるかも？', 'project_space' => '体育館 3F', 'vote' => '0'],
            ['id' => 14, 'team_name' => '茶華道部', 'project_name' => '茶道', 'project_description' => '茶室「聴汐庵」で茶道をやっています。お客さんとして参加できるので、ぜひお越しください！', 'project_space' => '聴汐案 A213', 'vote' => '0'],
            ['id' => 15, 'team_name' => 'お団子屋さん', 'project_name' => 'お団子屋さん', 'project_description' => 'みたらし、あんこ、抹茶、きなこなどたくさんの種類の団子を販売します。トッピングもできます！', 'project_space' => 'W3', 'vote' => '0'],
            ['id' => 16, 'team_name' => '人力飛行機研究部', 'project_name' => 'フライトシミュレーター', 'project_description' => '世界最高峰のシミュレーターを体験しよう！目指せ最高記録！「五百円でもやりたい」by矢部浩之 ', 'project_space' => '材料力学実験室 B113.1', 'vote' => '0'],
            ['id' => 17, 'team_name' => '硬式テニス部', 'project_name' => 'ストレス解消！！テニス的当て', 'project_description' => '君のボールが高専に風を起こす‼️', 'project_space' => '校庭', 'vote' => '0'],
            ['id' => 18, 'team_name' => 'マルチメディア研究同好会', 'project_name' => 'マルチメディア研究同好会！', 'project_description' => 'ゲームやイラスト、小説などの創作を行っています！是非来てください！！会誌配布しています！', 'project_space' => '中会議室 8F', 'vote' => '0'],
            ['id' => 19, 'team_name' => 'W4', 'project_name' => '縁日', 'project_description' => '君たちはどう遊ぶか', 'project_space' => 'T4', 'vote' => '0'],
            ['id' => 20, 'team_name' => '有志', 'project_name' => 'べびたっぴ', 'project_description' => 'ふんわりと甘香るベビーカステラと、まろやかなタピオカティをお楽しみ下さい', 'project_space' => 'A4', 'vote' => '0'],
            ['id' => 21, 'team_name' => '人力飛行機研究部', 'project_name' => '機体展示', 'project_description' => '鳥人間コンテストで飛んだ機体を展示中！クイズに正解するとドリンク券がもらえるよ', 'project_space' => '体育館 3F', 'vote' => '0'],
            ['id' => 22, 'team_name' => '航空機・エンジンの展示', 'project_name' => '航空機・エンジンの展示', 'project_description' => '見学される方全員が楽しめる展示空間を目指して活動しています。是非お待ちしています。', 'project_space' => '原動機実験室 B106.1', 'vote' => '0'],
            ['id' => 23, 'team_name' => '幸せなひととき', 'project_name' => '幸せなひととき', 'project_description' => '軽食と飲み物を販売しています。高専祭で休憩するならぜひ当店をご利用ください。', 'project_space' => '1年5組', 'vote' => '0'],
            ['id' => 24, 'team_name' => '人力飛行機研究部', 'project_name' => '男前ワッフル', 'project_description' => '男前ワッフルを食べてЯTRを応援してください〜ドリンクもあります！PayPayでも払えます', 'project_space' => '屋外屋台', 'vote' => '0'],
            ['id' => 25, 'team_name' => '電気通信部', 'project_name' => 'レーザー加工機でオリジナルストラップ', 'project_description' => '皆さんが書いたイラストでオリジナルストラップを作りましょう！参加費完全無料で、できたストラップはプレゼントです！※個数制限があるので材料がなくなり次第終了となります。', 'project_space' => '第5講義室 A311', 'vote' => '0'],
            ['id' => 26, 'team_name' => '料理愛好会', 'project_name' => 'ぷりぷりマッチョ', 'project_description' => 'マッチョが作るプリン！卵を使っているから、たんぱく質を取れる！これで君もマッチョに！', 'project_space' => '1年5組', 'vote' => '0'],
            ['id' => 27, 'team_name' => 'Quattro Saxophone Quartetto', 'project_name' => '4人で演奏してみた', 'project_description' => '高専祭のために結成した「違和感を感じる」みたいな名前の四重奏団です。4人で演奏してみます。', 'project_space' => '工場棟の通路', 'vote' => '0'],
            ['id' => 28, 'team_name' => '吹奏楽部', 'project_name' => 'Make A Joyful Noise！', 'project_description' => '音楽の魔法、奏でる喜び。Make A Joyful Noiseで心躍るひとときを共に！', 'project_space' => 'セキレイステージ', 'vote' => '0'],
            ['id' => 29, 'team_name' => 'north five jazz orchestra', 'project_name' => 'north five jazz orchestra', 'project_description' => '演奏会やるのかい、やらないのかい、どっちな~んだい!!!や~~る!!!パワー!!!!', 'project_space' => '第3講義室 A423.1', 'vote' => '0'],
            ['id' => 30, 'team_name' => '尾上研究室', 'project_name' => '物性って何だろう？', 'project_description' => '物性の実験を行っています！液体窒素を用いた実験などを行うのでぜひ来てください！', 'project_space' => 'A804.1', 'vote' => '0'],
            ['id' => 31, 'team_name' => 'ひらめきの部屋', 'project_name' => 'ひらめきの部屋', 'project_description' => 'ひらめき問題を楽しみたい人、集まれ！ヒントで初心者も安心！謎を解いてお菓子をゲットしよう！', 'project_space' => 'T2', 'vote' => '0'],
            ['id' => 32, 'team_name' => '田宮研究室', 'project_name' => 'デストロイヤー田宮の破壊実験', 'project_description' => '卵と鋼をぶっ壊す！モノが壊れる瞬間を，実際に体感しよう！', 'project_space' => '材料力学実験室 B113.1', 'vote' => '0'],
            ['id' => 33, 'team_name' => 'ダンス同好会', 'project_name' => '高専祭ダンス公演 ~One Heart, One Mind~', 'project_description' => 'ダンス同好会が様々なジャンルのダンスを精一杯披露します！是非遊びに来てください！', 'project_space' => 'セキレイステージ', 'vote' => '0'],
            ['id' => 34, 'team_name' => '新発見？！医療福祉工学コース　コース紹介', 'project_name' => '新発見？！医療福祉工学コース　コース紹介', 'project_description' => '医療福祉工学コースの展示を行います。スタンプラリー達成でお菓子も配布します。（中学生以下）', 'project_space' => '福祉生体計測実験室　A811', 'vote' => '0'],
            ['id' => 35, 'team_name' => 'W2', 'project_name' => 'フライドポテト', 'project_description' => '揚げたてのカリカリフライドポテト、ぜひ食べに来てください。', 'project_space' => '屋外屋台', 'vote' => '0'],
            ['id' => 36, 'team_name' => 'バドミントン部', 'project_name' => 'たこ焼き', 'project_description' => '屋台で味わうオリジナルたこ焼きをお楽しみください！', 'project_space' => '屋外屋台', 'vote' => '0'],
            ['id' => 37, 'team_name' => '戦術研究同好会', 'project_name' => 'Vasa:Shooting range', 'project_description' => 'ここでは、エアガンを使って行う的当てを体験することができます。', 'project_space' => '体育館下、原動機実験室前', 'vote' => '0'],
            ['id' => 38, 'team_name' => 'サブカルチャー同好会', 'project_name' => '高専スマブラ大会2023', 'project_description' => '豪華景品有り、熱きファイター達の戦い。その目で見届けよ！！', 'project_space' => 'T5', 'vote' => '0'],
            ['id' => 39, 'team_name' => '未来工房', 'project_name' => '未来工房', 'project_description' => '学生ものづくり支援「未来工房プロジェクト」の成果発表を行っています。', 'project_space' => '生協前', 'vote' => '0'],
            ['id' => 40, 'team_name' => '1年6組', 'project_name' => '女装クイズ大会', 'project_description' => 'カオスな男子が多い高専ならではの女装とクイズが楽しめます！', 'project_space' => '1年6組', 'vote' => '0'],
            ['id' => 41, 'team_name' => 'ロボット研究同好会', 'project_name' => 'ロボット展示', 'project_description' => 'NHKロボコンで使用した機体の展示と操縦体験ができます！(内容は変更する場合があります)', 'project_space' => '体育館 3F', 'vote' => '0'],
            ['id' => 42, 'team_name' => 'ポップコーン', 'project_name' => 'ポップコーン', 'project_description' => '美味しいポップコーン。', 'project_space' => '屋外屋台', 'vote' => '0'],
            ['id' => 43, 'team_name' => '環境整備委員会', 'project_name' => '環境整備委員会', 'project_description' => 'CED(気候非常事態宣言)の説明や関連研究の紹介・展示', 'project_space' => '専攻科室1', 'vote' => '0'],
            ['id' => 44, 'team_name' => 'T4', 'project_name' => 'RaspberryPi', 'project_description' => 'サクサクラズベリーパイ＆Raspberry Pi展示、デザートとドリンクも楽しめるカフェ', 'project_space' => 'R4', 'vote' => '0'],
            ['id' => 45, 'team_name' => '山の博覧会', 'project_name' => '山の博覧会', 'project_description' => '山での活動記録等を展示しています。ぜひお越しください。', 'project_space' => 'R2', 'vote' => '0'],
            ['id' => 46, 'team_name' => 'ベビーカステラ', 'project_name' => 'ベビーカステラ', 'project_description' => '出来立てのベビーカステラを7階にて販売！海底の底の味をご賞味ください。', 'project_space' => '第1講義室 A703', 'vote' => '0'],
            ['id' => 47, 'team_name' => 'シャドウバースポケカ大会', 'project_name' => 'シャドウバースポケカ大会', 'project_description' => 'シャドウバースとポケカ大会をします。学校にいるシャドウバースプレイヤーポケカプレイヤーの皆さんはぜひともこの機会に大会に参加していただき優勝をもぎ取っていただきたい', 'project_space' => 'W5', 'vote' => '0'],
            ['id' => 48, 'team_name' => '折り紙同好会', 'project_name' => 'レーザーシューティング', 'project_description' => '3階の第５講義室で折り紙同好会がゲームをやっています。景品もあるので是非お越しください！', 'project_space' => '第5講義室 A311', 'vote' => '0'],
            ['id' => 49, 'team_name' => '星研究室', 'project_name' => '星研究室のアートフェスティバル2023', 'project_description' => '工学はアートです', 'project_space' => '医用電子回路実験室 A619.2', 'vote' => '0'],
            ['id' => 50, 'team_name' => '卓球部', 'project_name' => '焼きそば', 'project_description' => '卓球部長年の伝統である焼きそばをどうぞご賞味ください！！', 'project_space' => '屋外屋台', 'vote' => '0'],
            ['id' => 51, 'team_name' => '天文学愛好会', 'project_name' => '宇宙ノ彼方', 'project_description' => '天文に関する展示をしています！初の企画展示なのでどうぞよろしくです！ﾍ(ﾟ∀ﾟﾍ)', 'project_space' => '専攻科室2', 'vote' => '0'],
            ['id' => 52, 'team_name' => '七宝焼き体験', 'project_name' => '七宝焼き体験', 'project_description' => '材料工学実験室で銅板に様々な色の釉薬（ガラス質の粉）を塗る伝統的な七宝焼き体験ができますよ', 'project_space' => '材料工学実験室 A102.1', 'vote' => '0'],
        ]);
    }
}
