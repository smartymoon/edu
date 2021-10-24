<?php

namespace App\Providers;

use App\Http\Middleware\OAuthMiddleware;
use App\Student;
use App\Teacher;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
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
            Teacher::PRINCIPAL => 'Principal is great',
            Teacher::NORMAL => 'normal teacher is better',
            Student::STUDENT => 'student in a school',
        ]);

        Passport::routes(function (RouteRegistrar $router) {
            Route::middleware(OAuthMiddleware::class)->group(function () use ($router) {
                $router->forAccessTokens();
            });
        });
    }
}
