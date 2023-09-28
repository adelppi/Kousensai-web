<?php

namespace Database\Seeders;

use App\Models\LostFound;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LostFoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lostfounds')->insert([
            ['id' => 1, 'name' => '[テスト]かばん', 'place' => '体育館', 'property' => '茶色い、皮製'],
        ]);
    }
}
