<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class Agentprofile extends Controller
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
        
        $agent = Agent::where('agent_id',$id)->first();
        //   if(isset($request->profile_pic)){
        //     $path = $request->file('profile_pic');
        //     $nameF = "user_" . time();
            
        //     $result = $path->storeOnCloudinaryAs('Profile', $nameF);
        //     $imagename = $result->getFileName();
        //     $extension = $result->getExtension();
        //     $paths = $result->getSecurePath();
            
        //     $agent->profile_pic = $paths;
        // }


        $agent->profile_pic = $request->profile_pic; 
        // ?_method=PATCH
        if($agent->update()){
            return response()->json([
                'success' => true,
                // 'agent' =>$agent,
                'message' => 'Profile updated successfully.',
           
         ],200);
        }

        return $request;
        
     
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
