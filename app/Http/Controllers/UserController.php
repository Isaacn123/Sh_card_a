<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Profile;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

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
        //\
        $user = User::where('id','=',$id)->first();
        $company= Company::where('company_id','=',$user->company_id)->first();
        return response([
            'user' => $user,
            'company' => $company->name,
            'message' => "data available"
        ]);

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
        $profile = Profile::find($id);
        $user->name = $request->firstname . ' ' . $request->lastname;
        $user->email = $request->email;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $profile->firstname = $request->firstname;
        $profile->lastname = $request->lastname;
        $profile->email = $request->email;
        $profile->date_of_birth = $request->date_of_birth;;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->update();
        $profile->update();
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



    public function company() {
        $user = User::find(1);
        $article ='Passing Data to View';
        // compact('user','article')
        return view('auth.newCompany.register');
    
    }

    public function updateuser(Request $request, $id){
       
        $user = User::find($request->user_id_st);
           dd($request);
           $profile = Profile::where('profile_id','=',$user->profile_id);
        //    $user->firstname = $request->first_name_st == null ? $user->firstname : $request->first_name_st;
        //    $user->lastname = $request->last_name_st == null ?  $user->lastname : $request->last_name_st;
        //    $profile->firstname = $request->first_name_st  == null ? $user->firstname : $request->first_name_st;
        //    $profile->lastname = $request->last_name_st == null ?   $user->lastname : $request->last_name_st;

        //    $profile->date_of_birth = $request->date_of_birth_st_st;
        //    $user->gender = $request->gender_st_st;
        //    $user->date_of_birth = $request->date_of_birth_st_st;
        //    if($request->role_st != "Choose Role"){
        //     $user->assignRole($request->role_st);
        //     if($request->role_st == 'admin'){
        //         $user->type = 1;
        //     }else{
        //         $user->type = 0; 
        //     }
        //    } else{

        //    }

        //    $user->update();
        //    $profile->update();
         
         
         
         
         
         
         return redirect('settings')->with('success','successfully updated User');
         
           // 'first_name_st'
            // '#last_name_st'
            // '#gender_st_st'
            // '#date_of_birth_st_st'
            // '#user_id_st'
    }

}

