<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [

        'sku_code',
        'sku_name',
        'mrp',
        'mobile',
        'distributor_price',
        'weight_volume_value',
        'weight_volume_unit',

    ];
}
