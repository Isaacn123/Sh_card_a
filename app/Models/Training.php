<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable =[
    "user_id",
    "company_id",
    "user_status",
    "training_id",
    "training_name",
    "training_description",
    "training_start_date",
    "training_end_date"
    ];

    public function form_list(){

        return $this->hasMany('App\Models\Form_list');
    }
}
