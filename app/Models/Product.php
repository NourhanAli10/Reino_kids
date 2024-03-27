<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'price',
        'description',
        'quantity',
        'image',
        'status',
        'category_id',
        'brand_id'
    ];

}
