<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    public function store(LoginRequest $request) {
        $request->authenticate();
        $request->session()->regenerate();

        return redirect(RouteServiceProvider::HOME);
    }
}
