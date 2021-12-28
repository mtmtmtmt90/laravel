<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Mobile phones', 'code' => 'mobile', 'description' => 'About mobile phones', 'image' => 'categories/Q130uEo1HvSAtBAP6XnTniDgyvUlRMXbebX8iZJr.png'],
            ['name' => 'Portables', 'code' => 'portable', 'description' => 'About portables', 'image' => 'categories/_20200529162648_wireless-headphones.jpg'],
            ['name' => 'Appliances', 'code' => 'appliance', 'description' => 'About appliances', 'image' => 'categories/kJ71oneflTmUcJkpqt7ruOKfMEzaxqPE57QYEPlx.jpg']
        ]);
    }
}
