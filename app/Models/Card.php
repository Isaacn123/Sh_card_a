<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable =[
         'card_sequence',
         'company_id',
         'card_is_assigned',
    ];

    protected $casts = [
        // 'card_is_assigned' => 'boolean',
    ];
}
