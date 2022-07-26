<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->user_role;

        if($request->password == $request->password_confirmation){
          $user->save();
          $user->assignRole($request->user_role);

        }else{
            
            return back()->with('error', 'Passwords do not match');
        }


        return redirect('settings')->with('success','User created successfully.');

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
        $user = User::find($id);

        $user->name = $request->firstname . ' ' . $request->lastname;
        $user->email = $request->email;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->update();
        return redirect('settings')->with('success',"User has been updated successfully.");
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
     * Update Password the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateuserPassword(Request $request, $id)
    {
        //
        $user = User::find($id);

        // dd(Hash::make($request->old_password));

        if(Hash::check($request->old_password,$user->password)){


            // if($request->password == )
       
             if($request->password == $request->password_confirmation){

                 $user->password = Hash::make($request->password);
                 $user->update();
                 
            
             }else{

                return back()->with('error', 'New passwords do not match. please try again.');
             }


        }else{

            return back()->with('error','Old password mismatch..please try again.');
        }

        return redirect('settings')->with('success',"Password has been updated successfully.");
    }
}
