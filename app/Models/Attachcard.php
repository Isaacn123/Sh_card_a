<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachcard extends Model
{
    use HasFactory;

    protected $fillable =[
        'agent_id',
        'card_sequence',
        'beneficiary_name'
    ];
}
