<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributedCards extends Controller
{
    //

    public function index(){

        return view('cards.distributed_packages');
    }
}
