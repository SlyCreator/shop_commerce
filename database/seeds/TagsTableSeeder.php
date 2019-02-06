<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            't_name' => 'Male',
            't_description' => 'This category contains only wrist watches',
            't_status'  => '1',
        ]);

        Tag::create([
            't_name' => 'Female',
            't_description' => 'This category contains only wrist watches',
            't_status'  => '1',
        ]);

        Tag::create([
            't_name' => 'Others',
            't_description' => 'This category contains only wrist watches',
            't_status'  => '1',
        ]);
    }
}
