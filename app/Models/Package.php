<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable =[
     'name',
     'user_id',
     'company_id',
     'description',
     'quantity',
     'category',
     'pkg_Distributed',
     'available_packages',
     'slug',
     'start_date',
     'end_date',   
    ];
}
