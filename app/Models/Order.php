<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    // Define which fields are mass-assignable
    protected $fillable = [
        'name',
        'age',
        'phone',
        'notes',
        'address',
        'product_id',
        'product_name',
        'product_price'
    ];

    // Define the relationship to the Product model
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
