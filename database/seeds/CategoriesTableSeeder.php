<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'c_name' => 'wrist watches',
            'c_description' => 'This category contains only wrist watches',
            'c_status'  => '1',
        ]);

        Category::create([
            'c_name' => 'Beauty',
            'c_description' => 'This category contains only wrist watches',
            'c_status'  => '1',
        ]);

        Category::create([
            'c_name' => 'Shoe',
            'c_description' => 'This category contains only shoes',
            'c_status'  => '1',
        ]);

        Category::create([
            'c_name' => 'Jacket',
            'c_description' => 'This category contains only Jacket',
            'c_status'  => '1',
        ]);
    }
}
