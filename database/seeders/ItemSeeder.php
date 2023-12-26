<?php

// database/seeders/ItemSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    public function run()
    {
        // Insert sample items
        DB::table('products')->insert([
            [
                'name' => 'Smartphone',
                'price' => 599.99,
                'category_id' => 1, // Electronics
            ],
            [
                'name' => 'T-shirt',
                'price' => 19.99,
                'category_id' => 2, // Clothing
            ],
            [
                'name' => 'Couch',
                'price' => 499.99,
                'category_id' => 3, // Home Goods
            ],
            // Add more items as needed
        ]);
    }
}

