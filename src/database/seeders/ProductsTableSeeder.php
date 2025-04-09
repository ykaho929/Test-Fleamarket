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
            'image' => 'storage/images/Clock.jpg',
            'category_id' => '11',
            'state' => '1',
            'brand' => 'KOSE',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'HDD',
            'price' => '5000',
            'explanation' => '高速で信頼性の高いハードディスク',
            'image' => 'storage/images/HDD.jpg',
            'category_id' => '2',
            'state' => '2',
            'brand' => '東芝',
            'is_sold_out' => true
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '玉ねぎ３束',
            'price' => '300',
            'explanation' => '新鮮な玉ねぎ3束のセット',
            'image' => 'storage/images/Onion.jpg',
            'category_id' => '10',
            'state' => '3',
            'brand' => 'なし',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '革靴',
            'price' => '4000',
            'explanation' => 'クラシックなデザインの革靴',
            'image' => 'storage/images/Shoes.jpg',
            'category_id' => '1',
            'state' => '4',
            'brand' => 'ABCマート',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ノートPC',
            'price' => '45000',
            'explanation' => '高性能なノートパソコン',
            'image' => 'storage/images/Laptop.jpg',
            'category_id' => '2',
            'state' => '1',
            'brand' => 'ASUS',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'マイク',
            'price' => '8000',
            'explanation' => '高音質のレコーディング用マイク',
            'image' => 'storage/images/Mic.jpg',
            'category_id' => '2',
            'state' => '2',
            'brand' => 'SONY',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ショルダーバッグ',
            'price' => '3500',
            'explanation' => 'おしゃれなショルダーバッグ',
            'image' => 'storage/images/Shoulderbag.jpg',
            'category_id' => '4',
            'state' => '1',
            'brand' => 'Longchamp',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'タンブラー',
            'price' => '500',
            'explanation' => '使いやすいタンブラー',
            'image' => 'storage/images/Tumbler.jpg',
            'category_id' => '3',
            'state' => '4',
            'brand' => 'THERMOS',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'コーヒーミル',
            'price' => '4000',
            'explanation' => '手動のコーヒーミル',
            'image' => 'storage/images/Coffeemill.jpg',
            'category_id' => '9',
            'state' => '1',
            'brand' => 'LOWYA',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'メイクセット',
            'price' => '2500',
            'explanation' => '便利なメイクアップセット',
            'image' => 'storage/images/Mikeset.jpg',
            'category_id' => '7',
            'state' => '2',
            'brand' => 'CANMAKE',
            'is_sold_out' => false
        ];
        DB::table('products')->insert($param);

    }
}
