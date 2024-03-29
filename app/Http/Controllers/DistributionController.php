<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardsdistributed;
use App\Models\Company;
use App\Models\Agent;
use App\Models\Distribution;
use App\Http\Resources\DistributionMetrics;
class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $limit = 25;
        // Cardsdistributed::orderBy('distribution_id','desc')->paginate($limit)
        // Company::find(1)->distribution()->where('company_id','=',auth()->user()->company_id)->get();
        $distribution = Distribution::where('company_id','=',auth()->user()->company_id)->get();

        // return $distribution;
        return view('pkg_Distributed.index')->with('distribution',$distribution);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Get all Distributed Cards the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function distribution($id)
    {
        //
        $distribution = Distribution::where('company_id','=',auth()->user()->company_id)->count('id');
        // return DistributionMetrics::collection($distribution)->resolve();
        return response()->json(['packages_distributed' => $distribution],200);

    }



   /**
     * Get all Distributed Cards the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function scan_summary($id){
          $agent = Agent::where('agent_id','=',$id)->first();
        //   return $agent;
        $distribution = Distribution::where('company_id','=',$agent->company_id)->where('agent_id','=',$id)->get();
        
        return DistributionMetrics::collection($distribution)->resolve();
    }
}
