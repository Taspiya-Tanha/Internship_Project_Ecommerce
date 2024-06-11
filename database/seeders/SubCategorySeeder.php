<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SubCategory::factory()->count(5)->create();

        $subCategory = new SubCategory();  //sub 1
        $subCategory->category_id = 1;
        $subCategory->sub_name = "iphone";
        $subCategory->sub_slug = "iphone";
        $subCategory->save();

        $subCategory = new SubCategory();  //2
        $subCategory->category_id = 1;
        $subCategory->sub_name = "samsung ";
        $subCategory->sub_slug = "samsung";
        $subCategory->save();

        $subCategory = new SubCategory(); //3
        $subCategory->category_id = 2;
        $subCategory->sub_name = "ipad";
        $subCategory->sub_slug = "ipad";
        $subCategory->save();


        $subCategory = new SubCategory(); //4
        $subCategory->category_id = 2;
        $subCategory->sub_name = "xiaomi tab";
        $subCategory->sub_slug = "xiaomi tab";
        $subCategory->save();

        $subCategory = new SubCategory();//5
        $subCategory->category_id = 4;
        $subCategory->sub_name = "Apple watch";
        $subCategory->sub_slug = "apple watch";
        $subCategory->save();
        
        $subCategory = new SubCategory();//6
        $subCategory->category_id = 3;
        $subCategory->sub_name = "MacBook";
        $subCategory->sub_slug = "mac-book";
        $subCategory->save();
        
        $subCategory = new SubCategory();//7
        $subCategory->category_id = 1;
        $subCategory->sub_name = "Oppo";
        $subCategory->sub_slug = "oppo";
        $subCategory->save();
        
        $subCategory = new SubCategory();//8
        $subCategory->category_id = 1;
        $subCategory->sub_name = "Oneplus";
        $subCategory->sub_slug = "Oneplus";
        $subCategory->save();

        $subCategory = new SubCategory();//9
        $subCategory->category_id = 5;
        $subCategory->sub_name = "Airpods";
        $subCategory->sub_slug = "airpods";
        $subCategory->save();
        
        $subCategory = new SubCategory();//10
        $subCategory->category_id = 5;
        $subCategory->sub_name = "Overhead Headphones";
        $subCategory->sub_slug = "overhead-headphones";
        $subCategory->save();

        $subCategory = new SubCategory();//11
        $subCategory->category_id = 5;
        $subCategory->sub_name = "Speakers";
        $subCategory->sub_slug = "speakers";
        $subCategory->save();
    }
}
