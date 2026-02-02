<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'isPremuim',
        'photo_path'
    ];

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
    
}
