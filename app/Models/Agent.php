<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Agent extends Model
{
    use HasApiTokens, HasFactory , Notifiable;

    protected $fillable = [
        'agent_id',
        'user_id',
        'fullName',
        'company_id',
        'profile_pic',
        'age',
        'gender',
        'phoneNumber',
        'address',
        'nationality',
        'village',
        'assigned_assets', 
        'assigned_farmer',
        'certifications',
        'agent_pin',
        'password'

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function beneficiary(){

        return $this->hasMany('App\Models\Beneficiary','agent_id', 'agent_id');
    }


}
