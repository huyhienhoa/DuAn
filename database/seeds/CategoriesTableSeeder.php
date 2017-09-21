<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Đồng hồ nam";
        $category->save();

        $category = new Category();
        $category->name = "Đồng hồ nữ";
        $category->save();

        $category = new Category();
        $category->name = "Đồng hồ đôi";
        $category->save();
    }
}
