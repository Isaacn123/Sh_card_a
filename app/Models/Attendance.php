<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'training_id',
        'agent_id',
        'serial_no',
        'beneficiary',
        'activity_name'
    ];
}
