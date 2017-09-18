<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => str_random(15),
            'quantity' => random_int(1,50),
            'status' => 'còn hàng',
            'descriptionSummary' => str_random(100),
            'description' => str_random(500),
            'betterSale' => 1,
            'hot' => 1,
            'category_id' => 1,
            'branch_id' =>1,
            'image' =>'1.jpg'
        ]);
    }
}
