<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Package;
use App\Models\Agent;
use App\Models\Category;
use App\Http\Resources\Packageapi;
use App\Models\Company;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $packages = Package::all();
        $packages = Company::find(1)->packages()->where('company_id','=',auth()->user()->company_id)->get();
        return view('packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('packages.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageRequest $request)
    {
        //
       $package = new Package();
       $package->name = $request->name;
       $slug = Str::slug($request->name);
    //    dd($request->category);
       $package->description = $request->description;
       $package->company_id = auth()->user()->company_id;
       $package->quantity = $request->quantity;
       $package->user_id = auth()->user()->id;
       $package->category = $request->category;
       $package->slug = $slug;
       $package->start_date = $request->start_date;
       $package->end_date = $request->end_date;

       $package ->save();
       return redirect('package')->with('success',' Package has been successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show($package)
    {
        //
       $packages = Package::find($package);
       return response([
        'packages'=>$packages,
        'status' => 200,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageRequest $request)
    {
        //
        // packageid
        $id = $request->packageid;
        $package  = Package::find($id);

        $package ->name = $request->packagename1;
        $package ->description = $request->packagedesc1;

        if($package->update()){
            return redirect('package')->with('success', 'Package has been updated successfully.'); 
           }else{
              return redirect('package')->with('error',' Package already exists.');
          }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apiPackages($agent_id)
    {
        //
        // $packages = Package::all();
        $agent = Agent::where('agent_id',$agent_id)->first();
        $packages = Company::find(1)->packages()->where('company_id','=',$agent->company_id)->get();
       
        return response([
            'packages' =>  Packageapi::collection($packages)->resolve(),
            'message' => "Packages successfully retrieved."
        ]);

        // return $packages;
    }

}
