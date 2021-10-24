<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($message = '', $data = '')
    {
        return [
            'code' => 200,
            'message' => $message,
            'data' => $data
       ];
    }

    public function fail($message, $data = '')
    {
        return [
            'code' => 204,
            'message' => $message,
            'data' => $data
        ];
    }
}
