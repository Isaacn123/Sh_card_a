<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Argent extends Model
{
    use HasApiTokens, HasFactory , Notifiable;

    protected $fillable = [
        'agent_id',
        'agentName',
        'agent_pin'
    ];
}
