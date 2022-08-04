<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Beneficiary;

class AgentBeneficiary extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $uuid = random_int(0000, 9999); //str_random(10);//hexdec(random_bytes(60));
        // dd($uuid);
        // @session()->flash('success', 'Success! You have successfully created  a Beneficiary.');
        //  return $request;
        $agent = Agent::where('agent_id',$request->agent_id)->first();
        // return $request->agent_id;
        $beneficiary = new Beneficiary();
        

        $beneficiary ->fullName = $request->fullName;
        $beneficiary ->agent_id = $request->agent_id;
        $beneficiary ->age = $request->age;
        $beneficiary ->company_id = $agent->company_id;
        $beneficiary ->gender = $request->gender;
        $beneficiary ->phoneNumber = $request->phoneNumber;
        $beneficiary ->address = $request->address;
        $beneficiary ->nationality = $request->nationality;
        $beneficiary ->village = $request->village;
        $beneficiary ->acres = $request ->acres;
        $beneficiary ->ownership = $request ->ownership;
        $beneficiary ->memberships = $request ->memberships;
        $beneficiary ->family_size = $request ->family_size;
        $beneficiary ->assigned_Inspectors = $request -> assigned_Inspectors;
        $beneficiary ->certifications = $request -> certifications;
        $beneficiary ->beneficiary_uid = $uuid;
        $beneficiary ->save();

        return response()->json([
            'success'=>true,
            'message'=>"Beneficiary successfully created."
        ],200);
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
}
