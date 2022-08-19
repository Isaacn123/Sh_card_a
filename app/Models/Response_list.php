<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_code', 
        'date_created'
    ];
}
