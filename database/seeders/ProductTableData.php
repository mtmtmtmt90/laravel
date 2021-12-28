<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['category_id' => '2', 'name' => 'Beats Pro', 'code' => 'beats_pro', 'description' => 'Live with best music', 'image' => 'products/beats.jpeg', 'price' => '55'],
            ['category_id' => '3', 'name' => 'Braun', 'code' => 'braun', 'description' => 'Home hepler', 'image' => 'products/braun.jpg', 'price' => '65'],
            ['category_id' => '2', 'name' => 'Go Pro', 'code' => 'go_pro', 'description' => 'Dont miss life moments with new Go Pro', 'image' => 'products/go-pro.jpg', 'price' => '45'],
            ['category_id' => '1', 'name' => 'Huawei P40 Pro Plus', 'code' => 'huawei_p40_pro_plus', 'description' => 'Best camera and best performance in one phone from Huawei', 'image' => 'products/huawei-p40-pro-plus.jpg', 'price' => '700'],
            ['category_id' => '1', 'name' => 'iPhone X', 'code' => 'iphone_x', 'description' => 'Step with new elegant design with iPhone X', 'image' => 'products/iphone-x.jpg', 'price' => '850'],
            ['category_id' => '1', 'name' => 'iPhone X Purple', 'code' => 'iphone_x_purple', 'description' => 'Exclusive iPhone X Purple made for you', 'image' => 'products/iphone-x-purple.jpeg', 'price' => '875'],
            ['category_id' => '1', 'name' => 'Samsung S20', 'code' => 'samsung_s20', 'description' => 'Samsung S20 best choice for you', 'image' => 'products/samsung-s20.jpg', 'price' => '850']
        ]);
    }
}
