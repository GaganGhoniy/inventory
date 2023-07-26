<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login()                { return view('authentication.login');}
    function register()             { return view('authentication.register');}
    function forgotpassword()       { return view('authentication.forgotpassword');}
    function error404()             { return view('authentication.error404');}
}