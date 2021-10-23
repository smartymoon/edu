<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        dump(env('PASSPORT_PUBLIC_KEY'));
        dump(env('PASSPORT_PRIVATE_KEY'));
        dump(config('app.passport_public_key'));
        dump(config('app.passport_private_key'));
        return 'I am api, ';
    }
}
