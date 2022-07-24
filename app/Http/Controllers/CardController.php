<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Cardsdistributed;
use App\Models\Attachcard;

class CardController extends Controller
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
        return view('cards.index')->with('card', Card::orderBy('id','desc')->paginate($limit));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRequest $request)
    {
        //
        
        
        // dd($request->file('csv_file'));
        $nameF = "csv_" . time();
      
        // $path = $request->file('csv_file')->getRealPath();
        // $data = array_map('str_getcsv', file($path));
        // $csv_data = array_slice($data, 0, 2);

        if(isset($request->csv_file)){
                            
                                        // dd($request->file('csv_file'));
              $path = $request->file('csv_file')->getRealPath();
             
            if(($handle = fopen($path,'r')) !==FALSE){
                while(($data = fgetcsv($handle,1000,',')) !== FALSE){

                    $card = Card::where('card_sequence', '=',$data [0])->first();

                    if($card == null){
                        $csv_data = new Card();
                        $csv_data->card_sequence = $data [0];
                        $csv_data->card_is_assigned = $data [1];
                        $csv_data->save ();
                    }else{
                        $found = $card['card_sequence'];
                        $request->merge(['card_sequence' => $found]);
                        // return view('example-view');
                    }
       
                   /// save the data 
                 
       
                }
       
                fclose($handle);
               }
        }

        // return "File Uploaded successfully";
        @session()->flash('success', 'Success! Cards have been successfully Added ');
      
        $finalData = Card::all ();
        return view('cards.index')->with('card', $finalData );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRequest  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        //
        $card->card_sequence = $request->card_sequence;
        $card->card_is_assigned = $request->card_is_assigned; 

        if ($card->save()) {
        
        return response([
            'data'=>$card,
            'message'=> 'Card was successfully updated',
            'status' => 200
        ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }

     /**
     * Scan Cards for distribution on the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function scan(Request $request)
    {
        //
        // dd($request->agent_id);
        // return $request;
        if($request->agent_id && $request->card_scanned){
    $card = Attachcard::where('card_sequence', '=',$request->card_scanned)->first();

         if($card){

          $distribution = new Cardsdistributed();
          $distribution->agent_id = $request->agent_id;
          $distribution->beneficiary = $card->beneficiary_name;
          $distribution->card_scanned =  $request->card_scanned;
          $distribution->delivery_status = 'True';

          $distribution->save();

         }else{
            return response([
                'message' => 'Card not found.',
                'status' => 500
            ]);
         }

        
  
        }else{
            return response([
                'message' => 'Wrong data please try again',
                'status' => 401,
            ]);
        }


        return response(
            ['message' => 'data is successfully added..', 'status'=> 200]
        );

    }
}
