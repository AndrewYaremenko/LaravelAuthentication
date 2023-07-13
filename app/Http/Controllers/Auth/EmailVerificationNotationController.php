<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class EmailVerificationNotationController extends Controller
{
    public function __invoke()
    {
        if (request()->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    
        request()->user()->sendEmailVerificationNotification();
    
        return back()->with('status', 'Verification link sent!');
    }
}
