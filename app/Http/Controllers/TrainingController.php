<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Models\Training;
use App\Models\Agent;
use App\Models\Company;

class TrainingController extends Controller
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
        // Training::orderBy('id','desc')->paginate($limit)
        $trainings = Company::find(1)->trainings()->where('company_id','=',auth()->user()->company_id)->paginate($limit);
        return view('training.index')->with('training',$trainings );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('training.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTrainingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainingRequest $request)
    {
        //
        $uuid =  substr(uniqid(rand(), true), 4, 4);

        // return "Hello am Training";
        // return response($request);
        // $agent = Agent::find(auth()->user()->id);
    //    dd($agent->id);
        $str = "TR-{$uuid}";
        $training = new Training();
        $training->user_id = auth()->user()->id;
        $training->training_id = $str;
        $training->company_id = auth()->user()->company_id;
        $training->training_name =  $request->training_name;
        $training->training_description = $request->training_description;
        $training->no_of_beneficiaries = $request->beneficiary;
        $training->training_start_date = $request->training_start_date;
        $training->training_end_date  = $request->training_end_date;

        $training->save();
        @session()->flash('success', 'Success! You have successfully created Training.');
         
         $respo = response([
            'message' => 'Training created successfully.',
            'status' => 'success'
        ]);
        return redirect() -> route('training');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainingRequest  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingRequest $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        //
    }


      /**
     * List TRainings by ID the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function trainings($training)
    {
        //
        // $agent = Agent::find($training);
        return Training::all();
    }
}
