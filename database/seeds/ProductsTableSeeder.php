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
        DB::table('products')->insert(
            [
            'name' => 'ltp-1392l-9avdf',
            'quantity' => random_int(1,50),
            'status' => 'còn hàng',
            'descriptionSummary' => str_random(100),
            'description' => str_random(500),
            'betterSale' => 1,
            'hot' => 1,
            'category_id' => 1,
            'branch_id' => 1,
            'image' =>'14917548621692873064dong-ho-casio-ltp-1392l-9avdf.jpg',
             'cost' => 1000000
             ],
            [
                'name' => 'stuhrling-original',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 1,
                'image' =>'1491763867stuhrling-original-tourbillon.png',
                'cost' => 2300000
            ],

            [
                'name' => 'casio-ltp-1392l',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1492021047casio-ltp.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'casio-ltp',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 0,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1491748133efr-539sg-1avudf.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'efr-539sg-1avudf',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1491748133efr-539sg-1avudf.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'citizen-ny4051-51e',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1491763434citizen-ny4051-51e.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'aries-gold-l9003-s-wmop',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1491764326683084387dong-ho-aries-gold-l9003-s-wmop.png',
                'cost' => 5500000
            ],

            [
                'name' => 'casio-efr-106d-1avudf',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1491747976casio-efr-106d-1avudf.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'Bruno',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1492020334bruno.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'diamon',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1492020025diamon.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'diamon-d5',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1492020822diamon-d5.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'diamond-dm',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1492020568diamond-dm.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'citizen-bm6772-05aew',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1491757567dong-ho-doi-citizen-bm6772-05aew1582-03a.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'atlantic',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 1,
                'branch_id' => 4,
                'image' =>'1491841939atlantic.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'mtp-1302d',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 3,
                'branch_id' => 2,
                'image' =>'1491882623mtp-1302d.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'citizen-bh1652',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 0,
                'hot' => 1,
                'category_id' => 3,
                'branch_id' => 6,
                'image' =>'1492021555citizen-bh1652.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'citizenar0074',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 3,
                'branch_id' => 6,
                'image' =>'1492022032citizenar0074.jpg',
                'cost' => 5500000
            ],

            [
                'name' => 'epos-344',
                'quantity' => random_int(1,50),
                'status' => 'còn hàng',
                'descriptionSummary' => str_random(100),
                'description' => str_random(500),
                'betterSale' => 1,
                'hot' => 1,
                'category_id' => 3,
                'branch_id' => 6,
                'image' =>'1492022226epos-344.jpg',
                'cost' => 5500000
            ]




        );
    }
}
