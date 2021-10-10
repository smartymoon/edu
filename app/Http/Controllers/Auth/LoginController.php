<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Student;
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

        $isStudent = Student::where('email', $validated['email'])->value('id');
        $teacherRole = Teacher::where('email', $validated['email'])->value('role');

        if (!$isStudent && !$teacherRole) {
            return $this->fail('sorry, email not in our system');
        }



        $http = new Client();
        try {
            $response = $http->request('POST', request()->root() . '/oauth/token', [
                'form_params' => config('passport') + [
                    'username' => $validated['email'],
                    'password' => $validated['password'],
                    'scope' => $isStudent ? Student::Student : $teacherRole,
                ]
            ]);
        } catch (RequestException $e) {
            return $this->fail('login failed, ' . $e->getMessage());
        }

        return  $this->success('login successful', json_decode((string) $response->getBody(), true));
    }

}
