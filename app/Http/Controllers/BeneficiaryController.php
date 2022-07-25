<?php

namespace App\Http\Controllers;

// require '../vendor/autoload.php';

use Illuminate\Http\Request;
use App\Http\Requests\BeneficiaryRequestController;
use App\Models\Beneficiary;
use App\Models\Card;
use App\Models\Attachcard;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
class BeneficiaryController extends Controller
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
        return view('beneficiary.index')->with('beneficial', Beneficiary::orderBy('id', 'desc')->paginate($limit));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('beneficiary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeneficiaryRequestController $request)
    {
        //
        $uuid =  substr(uniqid(rand(), true), 4, 4);//str_random(10);//hexdec(random_bytes(60));
        // dd($uuid);
        @session()->flash('success', 'Success! You have successfully created Agent.');
      
        $beneficiary = new Beneficiary();
        

        $beneficiary ->fullName = $request->fullName;
        $beneficiary ->age = $request->age;
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


        $beneficiary -> save();

        return redirect() -> route('beneficiary');

    

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
     * Get all Beneficiary IDS from  specified resource storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fetchid()
    {
        //
        $beneficiary_id = Beneficiary::pluck('beneficiary_uid');

        return response($beneficiary_id,200);
    }


       /**
     * Attach Beneficiary to the specified resource  CARD.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function attach(Request $request)
    {
        //

        // $data = Card::where('card_sequence','=',$request->card)->get();
        $data = Card::where('card_sequence','=',$request->card_sequence)->update([
            'card_is_assigned' => 'True'
      ]);
        // $data->card_is_assigned = 'True';
        // $data->save();
        if($data){
         Beneficiary::where('beneficiary_uid','=',$request->beneficiary_id)->update([
                'is_assigned_card' => 'True'
          ]);
       $beneficiary = Beneficiary::where('beneficiary_uid','=',$request->beneficiary_id)->find(1);

       $attachCard = new Attachcard();

       $card = Attachcard::where('card_sequence', '=',$request->card_sequence)->first();

       if($card == null){
        $attachCard->agent_id = $request->agent;
        $attachCard->card_sequence = $request->card_sequence;
        $attachCard->beneficiary_name = $beneficiary->fullName;
 
        $attachCard->save();
       } else{
        return response(['message'=>'Card already attached', 'status' => 200]);
       }

    //    return response($beneficiary_name->fullName,200); 
        }


        return response([
            'data' =>  $attachCard,
            'message' => 'Card has been attached successfully.'
        ],200); 

        // return response($data,200); 
     // $client = new \GuzzleHttp\Client();
        // $res = $client->post('http://127.0.0.1:8000/api/usercard', [  
        //         'card_sequence' => '62362823482867562474',
        //         'card_is_assigned' => 'True'  
        // ]);
        // $result= $res->send();
       
    }
}