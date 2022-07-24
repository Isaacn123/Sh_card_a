<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardsdistributed extends Model
{
    use HasFactory;

    protected $fillable = [
     'agent_id',
     'beneficiary',
     'card_scanned',
     'delivery_status',
    ];
}
