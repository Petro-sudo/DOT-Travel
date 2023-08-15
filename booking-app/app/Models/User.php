<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'surname',
        'email',
        'password',
        'password_confirmation'
    ];

    protected $hidden =[
        'password',
        'password_confirmation'
    ];


}
