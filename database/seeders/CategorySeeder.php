<?php

// database/seeders/CategorySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Insert sample categories
        DB::table('categories')->insert([
            ['name' => 'Electronics'],
            ['name' => 'Clothing'],
            ['name' => 'Home Goods'],
            ['name' => 'Vegetables'],
            ['name' => 'Others'],
            // Add more categories as needed
        ]);
    }
}
