<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase_Distribution_Details extends Model
{
    use HasFactory;
    protected $table = 'purchase_distribution_details';

    protected $fillable = [

        'po_no',
        'zone',
        'region',
        'territory',
        'distributor',
        'remark',


    ];
}
