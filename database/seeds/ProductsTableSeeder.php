<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'categories_id' => '1',
            'p_name'    => 'Ice more',
            'p_price'   => '35000',
            'p_description' => 'This category contains only wrist watches',
            'image'  => '1.jpg',
            'tags_id'  => '1',
        ]);

        Product::create([
            'categories_id' => '1',
            'p_name'    => 'Ice more',
            'p_price'   => '25000',
            'p_description' => 'This category contains only wrist watches',
            'image'  => '1.jpg',
            'tags_id'  => '1',
        ]);

        Product::create([
            'categories_id' => '1',
            'p_name'    => 'Ice more',
            'p_price'   => '37000',
            'p_description' => 'This category contains only wrist watches',
            'image'  => '1.jpg',
            'tags_id'  => '1',
        ]);

        Product::create([
            'categories_id' => '1',
            'p_name'    => 'Ice more',
            'p_price'   => '45000',
            'p_description' => 'This category contains only wrist watches',
            'image'  => '1.jpg',
            'tags_id'  => '1',
        ]);

        
    }
}
