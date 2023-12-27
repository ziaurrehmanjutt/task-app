<?php
// tests/Feature/ProductApiTest.php
// tests/Feature/ProductApiTest.php

use App\Models\User;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductApiTest extends TestCase
{
    //  use RefreshDatabase, WithFaker;
     use  WithFaker;
     protected $product;
     protected $user;
    /** 
     * @test 
     * @dataProvider productData
     */
    public function it_adds_a_product_for_authenticated_user($name, $price, $category_id)
    {
        // Create an authenticated user
        $this->user = User::factory()->create();
        $this->actingAs($this->user);

        
        // Send a request to your "Add Product" API
        $this->product = $this->postJson('/api/products', [
            'name' => $name,
            'price' => $price,
            'category_id' => $category_id,
        ]);

        // dd($this->product->original->id );
        // Assert the response
        $this->product->assertStatus(201); // Assuming you return 201 for successful creation
        $this->assertDatabaseHas('products', ['name' => $name]);
    }

    // Add more test cases as needed

    /**
     * Data provider for product test cases.
     *
     * @return array
     */
    public static function productData()
    {
        return [
            ['Laptop', 999.99, 1], // Product 1
            ['Phone', 499.99, 2],  // Product 2
            ['Camera', 299.99, 3], // Product 3
            // Add more products as needed
        ];
    }


    public  function tearDown(): void
    {
        // Delete the product record created during the test
        // $product = Product::where('id', $this->product['id'])->first();

        if ($this->product && isset($this->product->original->id)) {
            Product::where('id', $this->product->original->id)->delete();
        }

        // if ($product) {
        //     $product->delete();
        // }
        if ($this->user) {
            $this->user->delete();
        }

        parent::tearDown();
    }
}
