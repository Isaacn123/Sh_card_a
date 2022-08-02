<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class RegisteruserController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    //


    public function  registeruser(Request $request){
        //   dd($request->company_id);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'company_id' => intval($request->company_id),
                'type' => 0,
                'password' => Hash::make($request->password),
            ]);
        
            $profile = new Profile();
            $user->assignRole('user');
            $profile->full_name = $request->name;
            $profile->email = $request->email; 
            $profile->user_id = $user->id; 
            

            // $profile->id = $user->id;
        
            $profile->save();
            $user->profile_id = $profile->id;
            $user->save();

             Auth::login($user);
        
             return redirect('/admin');
        
            }
        
        
        
        
}
