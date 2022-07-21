<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'age',
        'gender',
        'phoneNumber',
        'address',
        'nationality',
        'village',
        'assigned_assets', 
        'assigned_farmer',
        'certifications'

    ];
}
