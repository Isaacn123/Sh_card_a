<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

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
public function category(){
    // ,'company_id', 'id'
    return $this->hasMany('App\Models\Category','company_id', 'id');
}

public function users(){

    return $this->hasMany('App\Models\User','company_id', 'id');
}

public function beneficiaries(){

    return $this->hasMany('App\Models\Beneficiary','company_id', 'id');
}



public function attendances(){

    return $this->hasMany('App\Models\Attendance','company_id', 'id');
}

public function cards(){

    return $this->hasMany('App\Models\Card','company_id', 'id');
}

public function cardsdistributeds(){

    return $this->hasMany('App\Models\Cardsdistributed','company_id', 'id');
}

public function attachcards(){

    return $this->hasMany('App\Models\Attachcard','company_id', 'id');
}
public function packages(){

    return $this->hasMany('App\Models\Package','company_id', 'id');
}

public function agents(){

    return $this->hasMany('App\Models\Agent','company_id', 'id');
}

public function trainings(){

    return $this->hasMany('App\Models\Training','company_id', 'id');
}



}
