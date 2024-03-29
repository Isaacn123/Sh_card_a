<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Company;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
     
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'type' => 1,
            'password' => Hash::make($data['password']),
        ]);

        // $user = new User();
        $campany = Company::create([
            'name' => $data['company_name'],
            'owner_id' => $user->id,
            'user_id' => $user->id
        ]);


        // dd($campany->company_id);
        $profile = new Profile();
        
        // .
        
        // $user->email = $data['email'];
        // $user->password = Hash::make($data['password']);
        $user->assignRole('admin');
        $user->role = 'admin';
        $profile->full_name = $data['name'];
        $profile->email = $data['email']; 
        $profile->user_id = $user->id; 
        // $profile->id = $user->id; 
        // $campany->user_id = $user->id;
        // $campany->owner_id = $user->id;
        $user->company_id = $campany->id;
        $profile->save();
        $user->profile_id = $profile->id;
        $user->save();
        
        // $campany->save();

        return $user;

    }
}
