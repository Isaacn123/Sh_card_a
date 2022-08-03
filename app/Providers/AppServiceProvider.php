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
            $view->with('categories',Category::all());
        }); 

        view()->composer('settings.company.edit-company', function($view){
            $view->with('companies',Company::findOrFail(auth()->user()->company_id));
        });

        view()->composer('auth.register', function($view){
            $view->with('companies',Company::all());
        });

        view()->composer('settings.user-info.edit-user', function($view){
            $view->with('roles',Role::all());
        });

        view()->composer('admin.admin', function($view){
            $attendance = Attendance::count();
            $totalBeneficiaries = Beneficiary::count();
            $activities = Training::count();
            $view->with(compact('attendance','totalBeneficiaries','activities'));
        });

        view()->composer('layouts.admin', function($view){
            
             $profile = Profile::findOrFail(auth()->user()->profile_id);
            $view->with(compact('profile'));
        });
        view()->composer('activities.index', function($view){
            $view->with('trainings',Training::all());
        });

        view()->composer('attendance.index', function($view){
            $attendances = Attendance::all();
            $agents = Agent::all();
            $view->with(compact('attendances','agents'));
        });

      
        // @include('settings.company.edit-company')
    
    
}



}
