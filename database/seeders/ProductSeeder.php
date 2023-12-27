<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed some specific products
        Product::factory()->create([
            'name' => 'Couch',
            'price' => 499.99,
            'category_id' => 3, // Home Goods
        ]);

        // Seed 10 random products
        Product::factory(10)->create();
    }
}
