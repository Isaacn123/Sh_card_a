<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_list extends Model
{
    use HasFactory;

    protected $fillable =[
        'form_code',
        'title',
        'form',
        'training_id',
        'description',
        'fname'
    ];


    public function training()
    {
      return $this->belongsTo('App\Models\Training');
    }
}
