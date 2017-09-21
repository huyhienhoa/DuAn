<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         $this->call(UsersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
=======
        $this->call(UsersTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);


>>>>>>> f69ec5727e9be290e344eeffd46e38c9c3b1f05a
    }
}
