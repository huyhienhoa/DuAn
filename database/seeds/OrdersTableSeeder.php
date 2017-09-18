<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'nameCustomer' => str_random(15),
            'emailCustomer' => str_random(20),
            'address' => str_random(20),
            'phoneCustomer' => str_random(20),
            'totalCost' => random_int(1,30) 
        ]);
    }
}
