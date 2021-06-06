<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // 'App\Models\Food' => 'App\Policies\FoodPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function(Customer $customer){
            return $customer->role == 'admin';
        });

        Gate::define('isCollaborator', function(Customer $customer){
            return $customer->role == 'collaborator';
        });

        Gate::define('isGuest', function(Customer $customer){
            return $customer->role == 'guest';
        });
    }
}
