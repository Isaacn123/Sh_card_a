<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Spatie\Permission\Models\Role;
use App\Models\User;
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
    
        view()->composer('settings.users.index', function($view){
            $limit=10;
            $view->with('users',User::all());
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
    
}



}
