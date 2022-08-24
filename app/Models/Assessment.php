<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'agent_id',
    'beneficiary_id',
    'assessment_id',
    'company_id',
    'assessment_name',
    'assessment_description',
    ];

    public function questions(){
        return $this->hasMany('App\Models\Question','question_assessment_id', 'id');
      }


}
