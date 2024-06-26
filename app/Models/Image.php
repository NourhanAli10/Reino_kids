<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_url',
        'image_alt_text',
        'product_id',

    ];


    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
