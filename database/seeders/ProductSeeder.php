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
        Product_thumbnail::insert([
            'product_id' => '1',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '1',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '1',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '1',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 1 product thumbnail end

        // No 2 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '1',
            'product_name' =>  'Cool Man Wearing Leather',
            'product_price' => '18.90',
            'product_code' => 'Ch-256xl',
            'product_short_description' => 'Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo',
            'product_long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore',
            'product_photo' => 'Men_2.jpg',
            'product_slug' => 'Ch-256xladne',
            'product_quantity' => '130',
            'created_at' => Carbon::now()
        ]);
        // No 2 product creating end

        // No 2 product thumbnail start
        Product_thumbnail::insert([
            'product_id' => '2',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '2',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '2',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '2',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 2 product thumbnail end

        // No 3 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '1',
            'product_name' =>  "Men's Fashion Leather Bag",
            'product_price' => '30.50',
            'product_code' => 'LB-126xl',
            'product_short_description' => 'Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo',
            'product_long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore',
            'product_photo' => 'Men_3.jpg',
            'product_slug' => 'LB-126xlLeathB',
            'product_quantity' => '135',
            'created_at' => Carbon::now()
        ]);
        // No 3 product creating end

        // No 3 product thumbnail start
        Product_thumbnail::insert([
            'product_id' => '3',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '3',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '3',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '3',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 3 product thumbnail end

        // No 4 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '1',
            'product_name' =>  "Parrera Sunglasses - Lomashop",
            'product_price' => '38.50',
            'product_code' => 'PS-201psl',
            'product_short_description' => 'Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo',
            'product_long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore',
            'product_photo' => 'Men_4.jpg',
            'product_slug' => 'PS-201psLsun',
            'product_quantity' => '125',
            'created_at' => Carbon::now()
        ]);
        // No 4 product creating end

        // No 4 product thumbnail start
        Product_thumbnail::insert([
            'product_id' => '4',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '4',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '4',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '4',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 4 product thumbnail end

        // No 5 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '2',
            'product_name' =>  "Women's Elizabeth Coat",
            'product_price' => '38.50',
            'product_code' => 'WC-211wEc',
            'product_short_description' => 'Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo',
            'product_long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore',
            'product_photo' => 'Women_1.jpg',
            'product_slug' => 'WC-211w-Ec',
            'product_quantity' => '145',
            'created_at' => Carbon::now()
        ]);
        // No 5 product creating end

        // No 5 product thumbnail start
        Product_thumbnail::insert([
            'product_id' => '5',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '5',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '5',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '5',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 5 product thumbnail end

        // No 6 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '3',
            'product_name' =>  "Ardene Microfiber Tights",
            'product_price' => '38.50',
            'product_code' => 'MT-321-amT',
            'product_short_description' => 'Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo',
            'product_long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore',
            'product_photo' => 'Kids_1.jpg',
            'product_slug' => 'MT-321-amTX01',
            'product_quantity' => '165',
            'created_at' => Carbon::now()
        ]);
        // No 6 product creating end

        // No 6 product thumbnail start
        Product_thumbnail::insert([
            'product_id' => '6',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '6',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '6',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '6',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 6 product thumbnail end

        // No 7 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '2',
            'product_name' =>  "Women's Long Sleeve Shirts",
            'product_price' => '30.50',
            'product_code' => 'WS-132-wsC',
            'product_short_description' => 'Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo',
            'product_long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore',
            'product_photo' => 'Women_2.jpg',
            'product_slug' => 'WS-132-wsC42',
            'product_quantity' => '205',
            'created_at' => Carbon::now()
        ]);
        // No 7 product creating end

        // No 7 product thumbnail start
        Product_thumbnail::insert([
            'product_id' => '7',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '7',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '7',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '7',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 7 product thumbnail end

        // No 8 product creating start
        Product::insert([
            'user_id' => '1',
            'category_id' => '2',
            'product_name' =>  "Long sleeve knee length",
            'product_price' => '38.50',
            'product_code' => 'KL-312-lSkL',
            'product_short_description' => 'Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commodo',
            'product_long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisi elit, incididunt ut labore et. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi ut aliquip ex ea commol consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiulo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore',
            'product_photo' => 'Women_3.jpg',
            'product_slug' => 'KL-312-lSkLavgrf',
            'product_quantity' => '325',
            'created_at' => Carbon::now()
        ]);
        // No 8 product creating end

        // No 8 product thumbnail start
        Product_thumbnail::insert([
            'product_id' => '8',
            'product_thumbnail_name' => 'Men_thumbnail_3.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '8',
            'product_thumbnail_name' => 'Men_thumbnail_1.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '8',
            'product_thumbnail_name' => 'Men_thumbnail_4.jpg',
            'created_at' => Carbon::now()
        ]);
        Product_thumbnail::insert([
            'product_id' => '8',
            'product_thumbnail_name' => 'Men_thumbnail_2.jpg',
            'created_at' => Carbon::now()
        ]);
        // No 8 product thumbnail end
    }
}
