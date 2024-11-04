<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
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
        Category::insert([
            'category_name' => 'Men',
            'category_tagline' => 'Best Men Product',
            'category_photo' => 'category_1.jpg',
            'status' => 'show',
            'created_at' => Carbon::now(),
        ]);

        Category::insert([
            'category_name' => 'Women',
            'category_tagline' => 'Best Women Product',
            'category_photo' => 'category_2.jpg',
            'status' => 'show',
            'created_at' => Carbon::now(),
        ]);
        Category::insert([
            'category_name' => 'Kids',
            'category_tagline' => 'Best Kids Product',
            'category_photo' => 'category_3.jpg',
            'status' => 'show',
            'created_at' => Carbon::now(),
        ]);
    }
}
