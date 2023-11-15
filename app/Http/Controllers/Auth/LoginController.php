<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            return redirect('workspace');
        }
        return view('login');
    }

    public function store(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $isAuthenticated = Auth::attempt([
            'username' => $username,
            'password' => $password
        ]);

        if (!$isAuthenticated) {
            return redirect()->back()->withErrors([
                'failed' => 'Username or password is incorrect'
            ]);
        }

        return redirect('workspace');
    }
}
