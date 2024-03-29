<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
     'name',
     'company_id',
     'featured_image',
     'slug'
    ];

    public function company()
{
  return $this->belongsTo('App\Models\Company');
}
}
