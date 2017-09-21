<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
<<<<<<< HEAD
        $user->name = "admin2";
        $user->email = "admin2@xin.com";
=======
        $user->name = "admin";
        $user->email = "admin@shop.com";
>>>>>>> f69ec5727e9be290e344eeffd46e38c9c3b1f05a
        $user->password = bcrypt("123456");
        $user->save();
    }
}
