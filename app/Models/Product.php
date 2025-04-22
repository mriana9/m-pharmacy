<?php

namespace App;


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'image', 'price', 'category_id'];
}
