<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class LoginController extends Controller
{
    public function studentEchoAuth(Request $request)
    {
        return Broadcast::auth($request);
    }

    public function teacherEchoAuth(Request $request)
    {
        return Broadcast::auth($request);
    }

    /**
     * Create a new controller instance.
     */

    public function token(Request $request)
    {
        $validated = $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required',
        ]);

        $student = Student::where('email', $validated['email'])->select(['email', 'name', 'school_id', 'id'])->first();
        $teacher = $student ? null : Teacher::where('email', $validated['email'])->select(['email', 'name', 'school_id', 'id', 'role'])->first();

        if (!$student && !$teacher) {
            return $this->fail('sorry, email not in our system');
        }

        $http = new Client();
        $scope = $student ? Student::STUDENT : $teacher->role;

        try {
            $response = $http->request('POST', request()->root() . '/oauth/token', [
                'form_params' => config('passport') + [
                    'username' => $validated['email'],
                    'password' => $validated['password'],
                    'scope' => $scope
                ]
            ]);
        } catch (RequestException $e) {
            return $this->fail('login failed, ' . $e->getMessage());
        }

        $auth = json_decode((string) $response->getBody(), true);
        $auth['accessToken'] = $auth['access_token'];
        return  $this->success('login successful', [
            'auth' => $auth,
            'role' => $scope,
            'user' => $teacher ?: $student,
        ]);
    }
}
