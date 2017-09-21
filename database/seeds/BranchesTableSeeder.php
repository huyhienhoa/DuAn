<?php

use Illuminate\Database\Seeder;
use App\Branch;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = new Branch();
        $branch->name = "Omega";
        $branch->image = "1491583338logoomega.png";
        $branch->save();

        $branch = new Branch();
        $branch->name = "Rolex";
        $branch->image = "1491582650logorolex.jpg";
        $branch->save();

        $branch = new Branch();
        $branch->name = "TagHeuer";
        $branch->image = "1491583630tagheuer.jpg";
        $branch->save();

        $branch = new Branch();
        $branch->name = "Movado";
        $branch->image = "1491583500logomovado.png";
        $branch->save();

        $branch = new Branch();
        $branch->name = "Citizen";
        $branch->image = "1491585327citizen.jpg";
        $branch->save();

        $branch = new Branch();
        $branch->name = "Hublot";
        $branch->image = "1491585170hublot.jpg";
        $branch->save();

        $branch = new Branch();
        $branch->name = "Tissot";
        $branch->image = "1491717302noimage.jpg";
        $branch->save();

        $branch = new Branch();
        $branch->name = "Casio";
        $branch->image = "1491501698logo.png";
        $branch->save();

    }
}
