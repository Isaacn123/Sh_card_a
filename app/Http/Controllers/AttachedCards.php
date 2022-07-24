<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attachcard;
class AttachedCards extends Controller
{
    //

     public function index(){
      $limit = 25;
        return view('cards.attachedcards')->with('attached', Attachcard::orderBy('id','desc')->paginate($limit));
     }
}
