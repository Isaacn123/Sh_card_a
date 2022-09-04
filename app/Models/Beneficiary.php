<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;


   protected $fillable = [
        'fullName',
        'user_id',
        'agent_id',
        'age',
        'gender',
        'assessment_status',
        'company_id',
        'phoneNumber',
        'address',
        'nationality',
        'village',
        'acres',
        'ownership',
        'memberships',
        'family_size',
        'profile_pic',
        'assigned_Inspectors',
        'farm_assessment_id',
        'certifications',
        'is_assigned_card'
        
    ];

    public function farm(){

        return $this->hasMany('App\Models\Assessment','assessment_id', 'farm_assessment_id');
    }
}
