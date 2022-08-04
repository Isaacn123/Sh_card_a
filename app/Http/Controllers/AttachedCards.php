<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attachcard;
use App\Models\Company;
class AttachedCards extends Controller
{
    //

     public function index(){
      $limit = 25;
      $attached = Company::find(1)->attachcards()->where('company_id','=',auth()->user()->company_id)->get();
      // Attachcard::orderBy('id','desc')->paginate($limit)
        return view('cards.attachedcards')->with('attached', $attached);
     }
}
