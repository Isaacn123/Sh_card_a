<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
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
        'acres',
        'ownership',
        'memberships',
        'family_size',
        'assigned_Inspectors',
        'certifications',
        'is_assigned_card'
        
    ];
}
