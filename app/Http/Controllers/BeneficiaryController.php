<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BeneficiaryRequestController;
use App\Models\Beneficiary;

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
}
