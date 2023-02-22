<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('frontend.auth.register');
    }

    public function signin()
    {
        return view('frontend.auth.login');
    }
}
