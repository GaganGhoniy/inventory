<?php

namespace App\Http\Controllers;

use App\Auth\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    public function user()
    {
        $data = User::get();
        return view('user.user', compact('data'));
    }

    public function role()
    {
        $user = User::get();
        $role = Role::get();
        return view('user.role', compact('user', 'role'));
    }

    public function profile()
    {
        $user = User::get();
        $role = Role::get();
        return view('user.profile', compact('user', 'role'));
    }
}
