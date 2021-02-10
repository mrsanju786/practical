<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Childcategory;

class ChildcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Childcategory::insert(['subcategory_id'=>'1', 'name'=>'LCD TV','slug'=>'lcd-tv']);
        Childcategory::insert(['subcategory_id'=>'1', 'name'=>'LED TV','slug'=>'led-tv']);
        Childcategory::insert(['subcategory_id'=>'1', 'name'=>'Curved TV','slug'=>'curved-tv']);
        Childcategory::insert(['subcategory_id'=>'1', 'name'=>'Plasma TV','slug'=>'plasma-tv']);
        Childcategory::insert(['subcategory_id'=>'2', 'name'=>'Top Freezer','slug'=>'accestop-freezersories']);
        Childcategory::insert(['subcategory_id'=>'2', 'name'=>'Side-by-Side','slug'=>'side-by-side']);
        Childcategory::insert(['subcategory_id'=>'2', 'name'=>'Counter-Depth','slug'=>'counter-depth']);
        Childcategory::insert(['subcategory_id'=>'2', 'name'=>'Mini Fridge','slug'=>'mini-fridge']);
        Childcategory::insert(['subcategory_id'=>'3', 'name'=>'Front Loading','slug'=>'front-loading']);
        Childcategory::insert(['subcategory_id'=>'3', 'name'=>'Top Loading','slug'=>'top-loading']);
        Childcategory::insert(['subcategory_id'=>'3', 'name'=>'Washer Dryer Combo','slug'=>'washer-dryer-combo']);
        Childcategory::insert(['subcategory_id'=>'3', 'name'=>'Laundry Center','slug'=>'laundry-center']);
        Childcategory::insert(['subcategory_id'=>'4', 'name'=>'Central Air','slug'=>'central-air']);
        Childcategory::insert(['subcategory_id'=>'4', 'name'=>'Window Air','slug'=>'window-air']);
        Childcategory::insert(['subcategory_id'=>'4', 'name'=>'Portable Air','slug'=>'portable-air']);
        Childcategory::insert(['subcategory_id'=>'4', 'name'=>'Hybrid Air','slug'=>'hybrid-air']);

    }
}
