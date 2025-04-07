<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '腕時計',
            'price' => '15000',
            'explanation' => 'スタイリッシュなデザインのメンズ腕時計',
            'image' => '',
            'category_id' => '11',
            'state' => '1',
            'brand' => 'KOSE',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'HDD',
            'price' => '5000',
            'explanation' => '高速で信頼性の高いハードディスク',
            'image' => '',
            'category_id' => '2',
            'state' => '2',
            'brand' => '',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '玉ねぎ３束',
            'price' => '300',
            'explanation' => '新鮮な玉ねぎ3束のセット',
            'image' => '',
            'category_id' => '10',
            'state' => '3',
            'brand' => 'なし',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '革靴',
            'price' => '4000',
            'explanation' => 'クラシックなデザインの革靴',
            'image' => '',
            'category_id' => '1',
            'state' => '4',
            'brand' => 'ABCマート',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ノートPC',
            'price' => '45000',
            'explanation' => '高性能なノートパソコン',
            'image' => '',
            'category_id' => '2',
            'state' => '1',
            'brand' => 'ASUS',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'マイク',
            'price' => '8000',
            'explanation' => '高音質のレコーディング用マイク',
            'image' => '',
            'category_id' => '2',
            'state' => '2',
            'brand' => 'SONY',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ショルダーバッグ',
            'price' => '3500',
            'explanation' => 'おしゃれなショルダーバッグ',
            'image' => '',
            'category_id' => '4',
            'state' => '1',
            'brand' => 'Longchamp',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'タンブラー',
            'price' => '500',
            'explanation' => '使いやすいタンブラー',
            'image' => '',
            'category_id' => '3',
            'state' => '4',
            'brand' => 'THERMOS',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'コーヒーミル',
            'price' => '4000',
            'explanation' => '手動のコーヒーミル',
            'image' => '',
            'category_id' => '9',
            'state' => '1',
            'brand' => 'LOWYA',
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'メイクセット',
            'price' => '2500',
            'explanation' => '便利なメイクアップセット',
            'image' => '',
            'category_id' => '7',
            'state' => '2',
            'brand' => 'CANMAKE',
        ];
        DB::table('products')->insert($param);

    }
}
