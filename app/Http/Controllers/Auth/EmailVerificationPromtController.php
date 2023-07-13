<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class EmailVerificationPromtController extends Controller
{
    public function __invoke()
    {
        return request()->user()->hasVerifiedEmail()
            ? redirect()->intended(RouteServiceProvider::HOME)
            : view('auth.verify-email');
    }
}
