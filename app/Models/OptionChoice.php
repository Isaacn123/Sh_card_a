<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionChoice extends Model
{
    use HasFactory;

    protected $fillable =[
        'choice_group_id',
        'option_choice_name',
    ];
}
