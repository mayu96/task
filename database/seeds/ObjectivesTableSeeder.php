<?php

use Illuminate\Database\Seeder;

class ObjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('objectives')->insert([    
        [
            'title'=>'７月の目標',
            'content'=>'Laravelを使って家計簿アプリを作る！その日買い物したレシートを写真で撮るだけで、その内容と値段が記載される。デザインはシンプルで使いやすいようにする。',
            'progress'=>'８０％',
            'created_at'=>date('Y-m-d H:i:s'),
        ],
        [
            'title'=>'８月の目標',
            'content'=>'YouTubeを始めてみる。まずは登録者１０００人を目指す！',
            'progress'=>'８５％',
            'created_at'=>date('Y-m-d H:i:s'),
        ],
        [
            'title'=>'９月の目標',
            'content'=>'インスタを始めてみる。まずはフォロワー５００人を目指す！',
            'progress'=>'７０％',
            'created_at'=>date('Y-m-d H:i:s'),
        ],
        ]);
    }
}
