<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custumers extends Model
{
    use HasFactory;
    protected $table = 'custumers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'state',
        'discount',
        'delivery_charge',
        'state',
        'discount',
        'address',
        
        
    ];
}

