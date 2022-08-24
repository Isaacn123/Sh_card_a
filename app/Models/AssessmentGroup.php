<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentGroup extends Model
{
    use HasFactory;
    protected $fillable =[
     'question_id', 
     'beneficiary_id'  
    ];

  public function questions(){
    return $this->hasMany('App\Models\Question', 'id','question_id');
  }

}
