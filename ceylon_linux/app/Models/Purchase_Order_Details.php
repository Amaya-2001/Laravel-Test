<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_Order_Details extends Model
{
    use HasFactory;
    protected $table = 'purchase_order_details';

    protected $fillable = [

        'po_no',
        'sku_code',
        'sku_name',
        'unit_price',
        'avb_qty',
        'enter_qty',
        'units',
        'total_price',

    ];
}
