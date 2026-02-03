<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{

    protected $fillable = [
        'status',
        'quantity',
        'product_id',
        'order_id',

    ];
}
