<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @OA\Schema(
 *     schema="Product",
 *     title="Product",
 *     description="Product model",
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="price", type="number", format="float"),
 *     @OA\Property(property="category_id", type="integer", format="int64"),
 * )
 */

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'category_id'];

    // Define the relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
