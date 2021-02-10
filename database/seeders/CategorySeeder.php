<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert(['name'=>'Electronic','slug'=>'electric']);
        Category::insert(['name'=>'Fashion & Beauty','slug'=>'fashion-and-Beauty']);
        Category::insert(['name'=>'Camera & Photo','slug'=>'camera-and-photo']);
        Category::insert(['name'=>'Smart Phone & Table','slug'=>'smart-phone-and-table']);
        Category::insert(['name'=>'Sport & Outdoor','slug'=>'sport-and-Outdoor']);
        Category::insert(['name'=>'Jewelry & Watches','slug'=>'jewelry-and-watches']);
        Category::insert(['name'=>'Health & Beauty','slug'=>'health-and-beauty']);
        Category::insert(['name'=>'Books & Office','slug'=>'books-and-office']);
        Category::insert(['name'=>'Toys & Hobbies','slug'=>'toys-and-hobbies']);
        Category::insert(['name'=>'Books','slug'=>'books']);
        Category::insert(['name'=>'Automobiles & Motorcycles','slug'=>'automobiles-and-motorcycles']);
        Category::insert(['name'=>'Home decoration & Appliance','slug'=>'Home-decoration-and-Appliance']);
        Category::insert(['name'=>'Portable & Personal Electronics','slug'=>'portable-and-personal-electronics']);
        Category::insert(['name'=>'Outdoor, Recreation & Fitness','slug'=>'Outdoor-Recreation-and-Fitness']);
        Category::insert(['name'=>'Surveillance Safety & Security','slug'=>'Surveillance-Safety-and-Security']);

    }
}
