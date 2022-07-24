<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardsdistributed;

class DistributedCards extends Controller
{
    //

    public function index(){

        $limit = 25;

        return view('cards.distributed_packages')->with('distribution',Cardsdistributed::orderBy('distribution_id','desc')->paginate($limit));
    }
}
