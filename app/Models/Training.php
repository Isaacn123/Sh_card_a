<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable =[
    "user_id",
    "user_status",
    "training_id",
    "training_name",
    "training_description",
    "training_start_date",
    "training_end_date"
    ];
}
