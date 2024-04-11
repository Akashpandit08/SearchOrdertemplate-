<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'product_name',
        'product_link',
        'product_model',
        'img',
        'price',
        'quantity',
        'payment_type',
        'order_status',
        'custumer_id',
        'delivery_charge',
        ];
}
