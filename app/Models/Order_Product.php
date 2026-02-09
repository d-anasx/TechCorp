<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $status
 * @property int $quantity
 * @property int $order_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Order_Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order_Product extends Model
{
    protected $table = 'order_product';

    protected $fillable = [
        'status',
        'quantity',
        'product_id',
        'order_id',

    ];
}
