<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Post' => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
   
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('create-post',function ($user){
              return   Auth::check();
        });
    }
}
