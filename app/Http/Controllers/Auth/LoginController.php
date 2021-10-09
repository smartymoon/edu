<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class LoginController extends Controller
{
    public function token(Request $request)
    {
        $validated = $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required',
        ]);

        $http = new Client();
        // todo check email belongs to which provider, for now just focus on teacher
        try {
            $request = $http->request('POST', request()->root() . '/api/oauth/token', [
                'form_params' => config('passport') + [
                    'username' => $validated['email'],
                    'password' => $validated['password']
                ]
            ]);
        } catch (RequestException $e) {
            throw  new UnauthorizedHttpException('', '账号验证失败');
        }

        if ($request->getStatusCode() == 401) {
            throw  new UnauthorizedHttpException('', '账号验证失败');
        }
        return response()->json($request->getBody()->getContents());
    }
}
