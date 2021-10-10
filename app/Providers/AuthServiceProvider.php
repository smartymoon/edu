<?php

namespace App\Providers;

use App\Teacher;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Laravel\Passport\RouteRegistrar;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


        Passport::tokensCan([
            Teacher::Principal => 'Principal is great',
            Teacher::Normal => 'normal teacher is better',
        ]);

        Passport::routes(function(RouteRegistrar $router) {
           // todo find a way get set provider here
           // config(['auth.guards.api.provider' => 'teacher|student']);
           config(['auth.guards.api.provider' => 'teachers']);
           $router->forAccessTokens();
        });
    }
}
