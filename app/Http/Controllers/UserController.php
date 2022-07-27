<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Profile;

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

        // $data = User::orderBy('id','DESC')->paginate(5);
        // return view('users.index',compact('data'))
        //  ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name','name')->all();
        return view('users.create-user',compact('roles'));
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
        $profile = new Profile();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->user_role;
        $profile->full_name = $request->name;
        $profile->email = $request->email;
        $profile->user_id = $user->id;
        $profile->user_id = $user->id; 
        $profile->id = $user->id; 
     


        if($request->password == $request->password_confirmation){
          $user->save();
          $profile->save();
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

        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $article ='Passing Data to View';
        // compact('user','roles','userRole')
        // return view('ad',compact('user','roles','userRole'));
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



    // public function article() {
    //     $user = User::find(1);
    //     $article ='Passing Data to View';
    //     return view('settings.users.edit',compact('user','article'));
    // }
}
