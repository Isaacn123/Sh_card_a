<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Company extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'user_id',
        'owner_id',
        'about',
        'email',
        'website',
        'country',
        'zipcode',
        'city',
        'company_log',
        'company_address',
        'company_phone',
    ];



    public function owner()
{
    return $this->belongsTo(User::class, 'owner_id' , 'id');
}

public function users(){

    return $this->hasMany('App\Models\User','company_id', 'id');
}

}
