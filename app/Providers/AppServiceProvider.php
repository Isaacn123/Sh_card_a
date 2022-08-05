<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Category;
use App\Models\Profile;
use App\Models\Company;
use App\Models\Beneficiary;
use App\Models\Training;
use App\Models\Attendance;
use App\Models\Agent;
use Spatie\Permission\Models\Permission;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Force SSL in production
        view()->composer('settings.edit.index', function($view){
            $limit=4;
            $view->with('roles',Role::all());
        });
    
        view()->composer('settings.user-info.index', function($view){
            $limit=10;
            $view->with('users',Company::where('id','=',auth()->user()->company_id)->first());
        });

        view()->composer('settings.users.edit', function($view){
            $limit=10;
            $view->with('singleuser',User::find(auth()->user()->id));
        });

        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }

        view()->composer('settings.users.create-user', function($view){
            $limit=4;
            $view->with('roles',Role::all());
        });

        view()->composer('settings.users.update-password', function($view){
            $view->with('passwordsUpdate',User::find(auth()->user()->id));
        });
       
        view()->composer('settings.edit.roles', function($view){
            $view->with('roles_team',Role::all());
        });   
        
        view()->composer('settings.edit.create-role', function($view){
            $view->with('permission',Permission::all());
        });


        view()->composer('profile.edit', function($view){
            $view->with('profile',Profile::findOrFail(auth()->user()->profile_id));
        }); 
        view()->composer('profile.index', function($view){
            $view->with('profile',Profile::findOrFail(auth()->user()->profile_id));
        }); 
        view()->composer('packages.create', function($view){
            // 'company_id',
            // Category::where('id','=',auth()->user()->company_id)->first()
            
            $view->with('categories',Company::find(1)->category()->where('company_id','=',auth()->user()->company_id)->get());
        }); 

        view()->composer('settings.company.edit-company', function($view){
            $companies = Company::where('id','=',auth()->user()->company_id)->first();
            // Company::where('id','=',auth()->user()->company_id)->get()
            $view->with('companies',$companies);
        });

        view()->composer('auth.register', function($view){
            $view->with('companies',Company::all());
        });

        view()->composer('settings.user-info.edit-user', function($view){
            $view->with('roles',Role::all());
        });

        view()->composer('admin.admin', function($view){
            // where('id','=',auth()->user()->company_id)->first()->count();
            // where('id','=',auth()->user()->company_id)->first()
            // $attendance = Company::find(1)->attendances()->where('company_id','=',auth()->user()->company_id)->count();
            $attendance = Attendance::where('company_id','=',auth()->user()->company_id)->count();
            $attendances = Attendance::where('company_id','=',auth()->user()->company_id)->get();
            // $totalBeneficiaries = Company::find(1)->beneficiaries()->where('company_id','=',auth()->user()->company_id)->count();
            $totalBeneficiaries = Beneficiary::where('company_id','=',auth()->user()->company_id)->count();
            $totalMales = Beneficiary::where('company_id','=',auth()->user()->company_id)->where('gender','=',"Male")->count();
            $totalFemales = Beneficiary::where('company_id','=',auth()->user()->company_id)->where('gender','=',"Female")->count();
            // $activities = Company::find(1)->trainings()->where('company_id','=',auth()->user()->company_id)->count();
            $activities = Training::where('company_id','=',auth()->user()->company_id)->count();
            $view->with(compact('attendance','totalBeneficiaries','activities','totalMales','totalFemales','attendances'));
        });

        view()->composer('layouts.admin', function($view){
            
             $profile = Profile::findOrFail(auth()->user()->profile_id);
             $company = Company::findOrFail(auth()->user()->company_id);
            $view->with(compact('profile','company'));
        });
        view()->composer('activities.index', function($view){
            // where('company_id','=',auth()->user()->company_id)->first(
            // whereRelation('company_id')

            $view->with('trainings',Company::find(1)->trainings()->where('company_id','=',auth()->user()->company_id)->get());
        });

        view()->composer('attendance.index', function($view){
            // $attendances = Company::find(1)->attendances()->where('company_id','=',auth()->user()->company_id);
               $attendances = Attendance::where('company_id','=',auth()->user()->company_id)->get();
            $agents = Agent::all();
            $view->with(compact('attendances','agents'));
        });

      
        // @include('settings.company.edit-company')
    
    
}



}
