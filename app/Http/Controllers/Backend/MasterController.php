<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{
    public function login()
    {
        return view('backend.fixed.login');
    }

    public function adminLogin(Request $request)
    {
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('dashboard');
    }

    public function adminLogout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
