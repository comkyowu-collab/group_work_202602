<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('test')->insert([
            [
                'title' => 'ONE PIECE',
                'author' => '尾田栄一郎',
                'description' => '時は大海賊時代。いまや伝説の海賊王G・ロジャーの遺した『ひとつなぎの大秘宝』を巡って、幾人もの海賊達が戦っていた。そんな海賊に憧れる少年ルフィは、海賊王目指して大いなる旅に出る!!',
                'image_path' => 'onepiece.jpg',
                'genre_id' => 1,
                'setting_id' => 1,
                'magazine_id' => 1,
                'created_at' => now(), // insertの場合は日時も手動で入れるのが安全です
                'updated_at' => now(),
            ],
            [
                'title' => '嘘喰い',
                'author' => '班目 獏',
                'description' => 'テストテストテスト!!',
                'image_path' => 'usogui.jpg',
                'genre_id' => 1,
                'setting_id' => 2,
                'magazine_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ドラえもん',
                'author' => '不二子',
                'description' => 'ネコ型ロボットの活躍!!',
                'image_path' => 'doraemon.jpg',
                'genre_id' => 1,
                'setting_id' => 2,
                'magazine_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'BLUE GIANT MOMANTUM',
                'author' => '石塚真一',
                'description' => '世界一のサックス奏者になる!!',
                'image_path' => 'bluegiantmomentum.jpg',
                'genre_id' => 1,
                'setting_id' => 1,
                'magazine_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}