<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'resume',
        'description',
        'price',
        'picture',
        'quantity'
    ];

    function paniers()
    {
        return $this->belongsToMany(Paniers::class, 'paniers_products');
    }
}
