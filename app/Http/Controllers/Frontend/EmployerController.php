<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function selectEmployer()
    {
        return view('login.registerEmployer');
    }

    public function registration(Request $request)
    {
        User::create([
            'name' => $request->employerName,
            'email' => $request->employerEmail,
            'password' => bcrypt($request->employerPassword)
        ]);

        return redirect()->route('home');
    }

    public function loginEmployer()
    {
        return view('login.loginEmployer');
    }

    public function loginE(Request $request)
    {
        Auth::attempt([
            'email' => $request->employerEmail,
            'password' => $request->employerPassword
        ]);

        return redirect()->route('home');
    }
}
