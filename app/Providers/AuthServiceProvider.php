<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

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
    protected function decide($user,$nameprop){
        $role_id=User::find($user->id)->role_id;
        $role1=Role::find($role_id)->$nameprop;
        return $role1 ? true:false;
    }
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('posts', function ($user) {//We have  PostPolicy 
            return $this->decide($user,'posts');
        });
        
        Gate::define('show_profiles', function ($user) {
            return $this->decide($user,'show_profiles');
        });
        Gate::define('add_category', function ($user) {
            return $this->decide($user,'add_category');
        });
        Gate::define('delete_users', function ($user) {
            return $this->decide($user,'delete_users');
        });
        Gate::define('delete_posts', function ($user) {
            return $this->decide($user,'delete_posts');
        });
    }
}
