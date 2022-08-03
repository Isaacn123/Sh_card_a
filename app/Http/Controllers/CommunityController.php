<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AgentRequestController;
use Illuminate\Support\Facades\Hash;
use App\Models\Agent;
use App\Models\Company;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $limit =25;
        // Agent::orderBy('id', 'desc')->paginate($limit)
        $agents = Company::find(1)->agents()->where('company_id','=',auth()->user()->company_id)->paginate($limit);
        return view('community.index')->with('agents', $agents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('community.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AgentRequestController $request)
    {
        //
        $request->validate([
            'phoneNumber' =>'required|numeric|unique:agents',
        ]);
        
        @session()->flash('success', 'Success! You have successfully created Agent.');

        $agent = new Agent();
        $agent->fullName = $request->fullName;
        $agent->user_id = auth()->user()->id;
        $agent->company_id =  auth()->user()->company_id;
        $agent->age = $request->age;
        $agent->gender = $request->gender;
        $agent->phoneNumber = $request->phoneNumber;
        $agent->address =$request->address;
        $agent->nationality= $request->nationality;
        $agent->village = $request->village;
        $agent->assigned_assets = $request->assigned_assets;
        $agent->assigned_farmer = $request->assigned_farmer;
        $agent->certifications = $request->certifications;
        $agent->password = Hash::make($request->agent_pin);
        $agent->agent_pin = $request->agent_pin;
        $agent->agent_id = $request->agent_id;

        if(isset($request->profile_file)){
         $path = $request->file('profile_file');
         $nameF = "agent_" . time();
         $result = $path->storeOnCloudinaryAs('Agents',$nameF);
         $url = $result->getSecurePath();
         $agent->agent_profileUrl = $url;
        }

        $agent->save();

        $token = $agent->createToken('agent_token')->plainTextToken;

        return redirect()->route('community');
      


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
        Agent::update(['fullName' => "DATA SITE"])->where('id',$profile)->find(1);
        
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
}
