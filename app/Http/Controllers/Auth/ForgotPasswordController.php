<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function create()
    {
        return view('forgotPassword');
    }

    public function store()
    {
        $validateData = request()->validate([
            'email' => ['required', 'email'],
        ]);
    }
}
