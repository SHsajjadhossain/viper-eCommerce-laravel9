<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Product_thumbnail;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // No 1 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '1',
            'product_name' =>  'Denim',
            'product_price' => '1020',
            'product_code' => 'DQ-1020',
            'product_short_description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam libero fuga voluptatum dicta fugit at quod unde magni perspiciatis vel.',
            'product_long_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis officia doloremque inventore provident sapiente. Hic, exercitationem nulla dicta mollitia quidem aliquid eos esse asperiores accusantium pariatur rem quo consequuntur temporibus, ut omnis? Adipisci voluptate quis rerum tempore, ab odit dolores nobis soluta eveniet recusandae. Minima quia fuga non assumenda harum.',
            'product_photo' => 'Men_1.jpg',
            'product_slug' => 'denim-WzaXs1',
            'product_quantity' => '120',
            'created_at' => Carbon::now()
        ]);
        // No 1 product creating end

        // No 1 product thumbnail start
        // Product_thumbnail::insert([
        //     'product_id' => '1',
        //     'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
        //     'created_at' => Carbon::now()
        // ]);
        // Product_thumbnail::insert([
        //     'product_id' => '1',
        //     'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
        //     'created_at' => Carbon::now()
        // ]);
        // Product_thumbnail::insert([
        //     'product_id' => '1',
        //     'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
        //     'created_at' => Carbon::now()
        // ]);
        // No 1 product thumbnail end
    }
}
