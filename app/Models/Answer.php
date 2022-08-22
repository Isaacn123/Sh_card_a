<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
    'agent_id',
    'user_id',
    'question_option_id',
    'answer_numeric',
    'answer_text',
    'answer_boolean',

    ];
}
