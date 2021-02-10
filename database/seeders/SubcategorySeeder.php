<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::insert(['category_id'=>'1', 'name'=>'TELEVISION','slug'=>'television']);
        Subcategory::insert(['category_id'=>'1', 'name'=>'REFRIGERATOR','slug'=>'refrigerator']);
        Subcategory::insert(['category_id'=>'1', 'name'=>'WASHING MACHINE','slug'=>'washing-machine']);
        Subcategory::insert(['category_id'=>'1', 'name'=>'AIR CONDITIONERS','slug'=>'air-conditioners']);
        Subcategory::insert(['category_id'=>'2', 'name'=>'ACCESSORIES','slug'=>'accessories']);
        Subcategory::insert(['category_id'=>'2', 'name'=>'BAGS','slug'=>'bags']);
        Subcategory::insert(['category_id'=>'2', 'name'=>'CLOTHINGS','slug'=>'clothings']);
        Subcategory::insert(['category_id'=>'2', 'name'=>'SHOES','slug'=>'shoes']);
        Subcategory::insert(['category_id'=>'4', 'name'=>'APPLE','slug'=>'apple']);
        Subcategory::insert(['category_id'=>'4', 'name'=>'SAMSUNG','slug'=>'samsung']);
        Subcategory::insert(['category_id'=>'4', 'name'=>'LG','slug'=>'lg']);
        Subcategory::insert(['category_id'=>'4', 'name'=>'SONY','slug'=>'sony']);
        Subcategory::insert(['category_id'=>'3', 'name'=>'DSLR','slug'=>'dslr']);
        Subcategory::insert(['category_id'=>'3', 'name'=>'Camera Phone','slug'=>'camera-phone']);
        Subcategory::insert(['category_id'=>'3', 'name'=>'Action Camera','slug'=>'animation-camera']);
        Subcategory::insert(['category_id'=>'3', 'name'=>'Digital Camera','slug'=>'digital-camera']);
    }
}
