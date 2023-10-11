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
            ['id' => 1, 'team_name' => '', 'project_name' => '幸せなひととき', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 2, 'team_name' => '1年6組', 'project_name' => '女装クイズ大会', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 3, 'team_name' => '', 'project_name' => 'お化け屋敷', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 4, 'team_name' => 'プラモデル愛好会', 'project_name' => 'プラモデルコンテスト・展示', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 5, 'team_name' => 'アナログゲーム同好会', 'project_name' => 'Cafe the Board', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 6, 'team_name' => '電気通信部', 'project_name' => 'レーザー加工機を使ってオリジナルストラップを作ろう！', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 7, 'team_name' => 'T2', 'project_name' => 'ひらめきの部屋', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 8, 'team_name' => '卓球部', 'project_name' => '焼きそば', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 9, 'team_name' => 'W2', 'project_name' => 'フライドポテト', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 10, 'team_name' => '人力飛行機研究部', 'project_name' => 'フライトシミュレーター体験', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 11, 'team_name' => '人力飛行機研究部', 'project_name' => '機体展示', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 12, 'team_name' => 'ダンス同好会', 'project_name' => '高専祭ダンス公演 ~One Heart, One Mind~', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 13, 'team_name' => '航空工作部', 'project_name' => '機体展示とシュミレーター', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 14, 'team_name' => 'バドミントン部', 'project_name' => 'たこ焼き', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 15, 'team_name' => '天文学愛好会', 'project_name' => '宇宙ノ彼方', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 16, 'team_name' => '吹奏楽部', 'project_name' => 'Make A Joyful Noise！', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 17, 'team_name' => 'クトゥルフ研究愛好会', 'project_name' => 'ベビーカステラ', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 18, 'team_name' => '有志', 'project_name' => '萩焼き鳥', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 19, 'team_name' => '茶華道部', 'project_name' => '茶道', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 20, 'team_name' => '人力飛行機研究部', 'project_name' => '男前ワッフル', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 21, 'team_name' => '民謡研究部', 'project_name' => 'MINKEN LIVE 2023', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 22, 'team_name' => '鉄道ジオラマ同好会', 'project_name' => '鉄道模型運転会', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 23, 'team_name' => 'ワンダーフォーゲル部', 'project_name' => '山の博覧会', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 24, 'team_name' => 'マルチメディア研究同好会', 'project_name' => 'マルチメディア研究同好会！', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 25, 'team_name' => 'W3', 'project_name' => 'お団子屋さん', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 26, 'team_name' => '航空機整備同好会', 'project_name' => '航空機・エンジンの展示', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 27, 'team_name' => '料理愛好会', 'project_name' => 'ぷりぷりマッチョ', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 28, 'team_name' => '剣道部', 'project_name' => '応力解析麺道場', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 29, 'team_name' => '茶華道部', 'project_name' => '生け花の展示', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 30, 'team_name' => '', 'project_name' => 'べびたっぴ', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 31, 'team_name' => '戦術研究同好会', 'project_name' => 'Vasa:Shooting range', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 32, 'team_name' => '環境整備委員会', 'project_name' => '環境整備委員会', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 33, 'team_name' => '硬式テニス部', 'project_name' => 'ストレス解消！！テニス的当て', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 34, 'team_name' => 'T4', 'project_name' => 'Raspberry Pi', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 35, 'team_name' => 'ロボット研究同好会', 'project_name' => 'ロボットの展示', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 36, 'team_name' => '星研究室', 'project_name' => '星研究室のアートフェスティバル2023', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 37, 'team_name' => 'W4', 'project_name' => '縁日', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 38, 'team_name' => '奇術部', 'project_name' => '奇術部クロースマジック', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 39, 'team_name' => '奇術部', 'project_name' => '奇術部ステージマジック', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 40, 'team_name' => '音楽部', 'project_name' => 'north five jazz orchestra', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 41, 'team_name' => 'バレーボール部', 'project_name' => 'インパクト', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 42, 'team_name' => 'Quattro Saxophone Quartetto', 'project_name' => '4人で演奏してみた', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 43, 'team_name' => '生物観察愛好会', 'project_name' => 'とある高専の昆虫劇場（インセクトシアター）', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 44, 'team_name' => '', 'project_name' => '七宝焼体験', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 45, 'team_name' => '', 'project_name' => 'TOOL　BOX', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 46, 'team_name' => '高崎研究室+α', 'project_name' => 'ポップコーン', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 47, 'team_name' => '尾上研究室', 'project_name' => '物性って何だろう？', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 48, 'team_name' => '杉本研究室', 'project_name' => 'とんぼ玉体験', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 49, 'team_name' => 'サブカルチャー同好会', 'project_name' => '高専スマブラ大会2023', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 50, 'team_name' => '田宮研究室', 'project_name' => 'デストロイヤー田宮の破壊実験', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 51, 'team_name' => '未来工房', 'project_name' => '未来工房成果発表', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 52, 'team_name' => '医療福祉工学コース', 'project_name' => '新発見？！医療福祉工学コース　コース紹介', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 53, 'team_name' => '高崎研究室', 'project_name' => '高崎研究室', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 54, 'team_name' => '後援会', 'project_name' => '後援会バザー', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 55, 'team_name' => 'ロボット工学コース', 'project_name' => 'ロボット工学コース紹介', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
            ['id' => 56, 'team_name' => '航空技術者育成プログラム', 'project_name' => '飛行機に触れてみましょう！', 'project_description' => 'これは企画を説明する文章です。', 'project_space' => 'T4', 'vote' => 0],
        ]);
    }
}
