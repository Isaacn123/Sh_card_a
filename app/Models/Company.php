<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'user_id',
        'about',
        'email',
        'website',
        'country',
        'zipcode',
        'city',
        'company_log',
        'company_address',
        'company_phone',
    ];
}
