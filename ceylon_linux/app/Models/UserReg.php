<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReg extends Model
{
    use HasFactory;
    protected $table = 'user_regs';


    protected $fillable = [

        'name',
        'nic',
        'address',
        'mobile',
        'email',
        'gender',
        'territory',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
