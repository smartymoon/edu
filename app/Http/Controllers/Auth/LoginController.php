<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Teacher;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function token(Request $request)
    {
        $validated = $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required',
        ]);

        $http = new Client();
        // todo check email belongs to which provider, for now just focus on teacher
        try {
            $response = $http->request('POST', request()->root() . '/oauth/token', [
                'form_params' => config('passport') + [
                    'username' => $validated['email'],
                    'password' => $validated['password'],
                    'scope' => Teacher::Principal
                ]
            ]);
        } catch (RequestException $e) {
            return $this->fail('login failed');
        }

        return  $this->success('login successful', json_decode((string) $response->getBody(), true));
    }

}
