<?php

namespace App\Http\Middleware;

use App\Student;
use App\Teacher;
use Closure;
use Laravel\Passport\Passport;

class OAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->method() === 'POST' && $request->getPathInfo() === '/oauth/token') {
            $scope = $request->input('scope');
            if ($scope === Teacher::Normal || $scope === Teacher::Principal) {
                config(['auth.guards.api.provider' => 'teachers']);
            } else if ($scope === Student::Student) {
                \Log::info('in student');
                config(['auth.guards.api.provider' => 'students']);
            }
        }

        \Log::info('hello oauth middleware', [
            'scope' => $request->input('scope'),
            'provider' => config('auth.guards.api.provider')
        ]);


        return $next($request);
    }
}
