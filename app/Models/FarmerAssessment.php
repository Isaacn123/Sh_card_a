<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerAssessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id',
        'beneficiary_id',
        'assessment_farm_id',
        'farmer_assessment_id',
        'company_id',
        'status',
        'assessment_name',
        'assessment_description',
    ];

    public function questions(){
        return $this->hasMany('App\Models\Question','question_farmer_assessment_id', 'id');
      }
}
