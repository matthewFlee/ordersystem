<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use OrderSystem\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item  = new Menu;
        $item->item = "Spaghetti";
        $item->price = 12.34;
        $item->save();

        $item  = new Menu;
        $item->item = "Meat Lovers Pizza";
        $item->price = 8.90;
        $item->save();

        $item  = new Menu;
        $item->item = "Steak";
        $item->price = 18.00;
        $item->save();

        $item  = new Menu;
        $item->item = "Butter Chicken";
        $item->price = 12.70;
        $item->save();

    }
}
