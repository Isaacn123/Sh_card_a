<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use  App\Models\Agent;
use  App\Models\Beneficiary;
use App\Http\Resources\AgentResource;

class AgentAuthController extends Controller
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
    public function register()
    {
        //

        return view('auth.agentAuth.register');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //->get(['agent_id', 'fullName','phoneNumber','address'])
        $resp = Agent::where('agent_id','=',$id)->first();
        // return response(
        //     [
        //         'aget' => $resp
        //     ]
        // );
          $json = $resp;
            // $data = [
            // "id" => $resp->id,
            // "agent_id" => $resp->agent_id,
            // "agent_name" => $resp->fullName,
            // "agent_contact" => $resp->phoneNumber,
            // "agent_address" => $resp->address,
            // "profile_pic" => '',
        return new AgentResource($resp);
            //  "agent_name" => $resp->fullName   
            
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
     return view('auth.agentAuth.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    //   return $request->input();
    $request->validate([
        'agent_id' => 'required|numeric',
        'agentName'=> 'required|string',
        'agent_pin' =>  'required|min:4:max:12'
    ]);

  $agent = new Argent();
  $agent->agent_id = $request->agent_id;
  $agent-> agentName = $request->agentName;
//   $agent->company_id = auth()->user()->company_id;
  $agent->agent_pin = $request->agent_pin;
//$agent->agent_pin = Hash::make($request->agent_pin);


  $query = $agent->save();

  $token = $agent->createToken('agentToken')->plainTextToken;
  $response = [
    'agent' => $agent,
    'token' => $token,
  ];


  if($query){
    // return back()->with('success','user has been successfully Added.');
    return response($response,201);

  }else{

    return back()->with('error', 'Could not create user.');
  }

    // return $request->input();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkagent(Request $request)
    {
        //
        // return $request->input();
        $request->validate([
            "agent_id"  =>  "required|numeric",
            "agent_pin" =>  "required|numeric"//"required|min:4:max:12"
        ]);

        //    return $request;


        $user = Agent::where('agent_id', '=',$request->agent_id)->first();
        
        if($user){

            // if($request->agent_pin == $user->agent_pin){
                if(Hash::check($request->agent_pin,$user->password)){
                $token = $user->createToken('myagentToken')->plainTextToken;

                $data = [
                    "message" => "successful logged in",
                    'id' => $user->id,
                    'agent_id' => $user->agent_id,
                    'token' => $token,
                ];
                return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
                    // return response([
                    //     "message" => "successful logged in",
                    //     'id' => $user->agent_id,
                    //     'agent_id' => $user->agent_id,
                    //     'agent_name' => $user->fullName,
                    //     'token' => $token,
                    // ],200,JSON_UNESCAPED_UNICODE);
          

            }else{
                return response([
                    'error' =>'Wrong Agent pin.try again',
                    'status'=> 401
                ]);
            }
            
        }else{
            return back()->with('error', 'No account found for this agent.');
        }
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
     * Search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($name,$id)
    {
        //
        $agents = Agent::with('beneficiary')->where('agent_id','=',$id)->first();
        $benf = new Beneficiary;
    //  return $agents->beneficiary->where('fullName','like', "%{$name}%");
    //  return Beneficiary::hydrate($agents->beneficiary->toArray())->where('fullName','like', "%".$name."%")->all(); //Agent::where('fullName','like', "%".$name."%")->get();
// return $name;
     $agent = Agent::with(['beneficiary' => function($query) use ($name){
        $query->where('fullName', 'like', '%'.$name.'%')->with('farm');
    }])->get();

     return collect($agent->toArray());

        // return Argent::where('agentName','like',$name)->get();
        // return Agent::where('agentName','like','%'.$name.'%')->get(); //searching foro the name with starting  letters 
    }


       /**
     * Logout  the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout($name)
    {
        //
        // return Argent::where('agentName','like',$name)->get();
        // return Argent::where('agentName','like','%'.$name.'%')->get(); //searching foro the name with starting  letters 
         auth()->user()->tokens()->delete();

         return [
            'message' => 'Logged out'
         ];
    }
}
