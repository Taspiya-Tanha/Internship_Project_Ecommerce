<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory()->count(5)->create();


        $category = new Category();
        $category->cat_name = "Smartphone";
        $category->cat_slug = str()->slug($category->cat_name);
        $category->image = "s24" ;
        $category->image_url = "https://placeholder.tn/dist/images/phone.png";
        $category->save();

        
        $category = new Category();
        $category->cat_name = "Tablet";
        $category->cat_slug = str()->slug($category->cat_name);
        $category->image = "s24" ;
        $category->image_url = "https://placeholder.tn/dist/images/phone.png";
        $category->save();

        $category = new Category();
        $category->cat_name = "Laptop";
        $category->cat_slug = str()->slug($category->cat_name);
        $category->image = "s24" ;
        $category->image_url = "https://img.freepik.com/premium-photo/3d-laptop-white-background_751108-625.jpg";
        $category->save();

        $category = new Category();
        $category->cat_name = "Smartwatch";
        $category->cat_slug = str()->slug($category->cat_name);
        $category->image = "s24" ;
        $category->image_url = "https://mir-s3-cdn-cf.behance.net/project_modules/disp/cdc06440412781.577e48e9a3380.gif";
        $category->save();

        $category = new Category();
        $category->cat_name = "Sound Aplience";
        $category->cat_slug = str()->slug($category->cat_name);
        $category->image = "s24" ;
        $category->image_url = "https://placeholder.tn/dist/images/phone.png";
        $category->save();


        $category = new Category();
        $category->cat_name = "smart Tv";
        $category->cat_slug = str()->slug($category->cat_name);
        $category->image = "s24" ;
        $category->image_url = "https://placeholder.tn/dist/images/phone.png";
        $category->save();


    }
}
