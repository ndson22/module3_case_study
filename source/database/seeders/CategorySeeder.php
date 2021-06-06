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
        $category = new Category ();
        $category->category_name = 'appetizer';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();

        $category = new Category ();
        $category->category_name = 'salad';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();

        $category = new Category ();
        $category->category_name = 'pizza';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();

        $category = new Category ();
        $category->category_name = 'fast food';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();

        $category = new Category ();
        $category->category_name = 'breakfast';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();

        $category = new Category ();
        $category->category_name = 'lunch & dinner';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();

        $category = new Category ();
        $category->category_name = 'bread';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();

        $category = new Category ();
        $category->category_name = 'noodles';
        $category->image = '/image/category/cuisine-1.jpg';
        $category->save();
    }
}
