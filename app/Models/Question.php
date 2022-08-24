<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable =[
        'input_type_id',
        'question_name',
        'question_required',
        'answer_required',
        'option_group_id',
        'answer_numeric',
        'answer_text',
        'answer_boolean',
        'question_assessment_id',
        'question_farmer_assessment_id',
        'allow_mutiple_option_answers_yn',


    ];

    public function answer(){
     
   return $this->belongTo('App\Models\Answer');
    
    }
}
