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
        $user->name = "admin2";
        $user->email = "admin2@xin.com";
        $user->password = bcrypt("123456");
        $user->save();
    }
}
