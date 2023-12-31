<?php

// database/seeders/ItemSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ItemSeeder extends Seeder
{
    public function run()
    {
       
        Product::factory()->create([
            'name' => 'Couch',
            'price' => 499.99,
            'category_id' => 3, // Home Goods
        ]);

        // Seed 10 random items
        Product::factory(10)->create();
    }
}

