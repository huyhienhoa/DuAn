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
                     $product = new \App\Product();
                    $product->name = 'ltp-1392l-9avdf';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 1;
                    $product->image = '14917548621692873064dong-ho-casio-ltp-1392l-9avdf.jpg';
                    $product->cost = 1000000;
                     $product->save();
                $product = new \App\Product();
                    $product->name = 'stuhrling-original';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 1;
                    $product->image = '1491763867stuhrling-original-tourbillon.png';
                    $product->cost = 2300000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'casio-ltp-1392l';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 4;
                    $product->image = '1492021047casio-ltp.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'casio-ltp';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 0;
                    $product->category_id = 1;
                    $product->branch_id = 4;
                    $product->image = '1491748133efr-539sg-1avudf.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'efr-539sg-1avudf';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 1;
                    $product->image = '1491748133efr-539sg-1avudf.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'citizen-ny4051-51e';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 2;
                    $product->branch_id = 1;
                    $product->image = '1491763434citizen-ny4051-51e.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'aries-gold-l9003-s-wmop';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 2;
                    $product->branch_id = 1;
                    $product->image = '1491764326683084387dong-ho-aries-gold-l9003-s-wmop.png';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'casio-efr-106d-1avudf';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 2;
                    $product->branch_id = 4;
                    $product->image = '1491747976casio-efr-106d-1avudf.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'Bruno';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 2;
                    $product->branch_id = 4;
                    $product->image = '1492020334bruno.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'diamon';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 2;
                    $product->branch_id = 4;
                    $product->image = '1492020025diamon.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'diamon-d5';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 4;
                    $product->image = '1492020822diamon-d5.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'diamond-dm';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 4;
                    $product->image = '1492020568diamond-dm.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'citizen-bm6772-05aew';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 4;
                    $product->image = '1491757567dong-ho-doi-citizen-bm6772-05aew1582-03a.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'atlantic';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 1;
                    $product->branch_id = 4;
                    $product->image = '1491841939atlantic.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'mtp-1302d';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 3;
                    $product->branch_id = 2;
                    $product->image = '1491882623mtp-1302d.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'citizen-bh1652';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 0;
                    $product->hot = 1;
                    $product->category_id = 3;
                    $product->branch_id = 6;
                    $product->image = '1492021555citizen-bh1652.jpg';
                    $product->cost = 5500000;
                $product->save();;

                $product = new \App\Product();
                    $product->name = 'citizenar0074';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 3;
                    $product->branch_id = 6;
                    $product->image = '1492022032citizenar0074.jpg';
                    $product->cost = 5500000;
                $product->save();

                $product = new \App\Product();
                    $product->name = 'epos-344';
                    $product->quantity = random_int(1, 50);
                    $product->status = 'còn hàng';
                    $product->descriptionSummary = str_random(100);
                    $product->description = str_random(500);
                    $product->betterSale = 1;
                    $product->hot = 1;
                    $product->category_id = 3;
                    $product->branch_id = 6;
                    $product->image = '1492022226epos-344.jpg';
                    $product->cost = 5500000;
                $product->save();

    }
}
