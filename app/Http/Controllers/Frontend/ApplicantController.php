<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function selectRegAs()
    {
        return view('login.selectRegister');
    }

    public function selectApplicant()
    {
        // dd('ooo');
        return view('login.registerApplicant');
    }

    public function registration(Request $request)
    {
        $applicant = User::create([
            'name' => $request->applicantName,
            'email' => $request->applicantEmail,
            'password' => bcrypt($request->applicantPassword)
        ]);

        return redirect()->route('home')->with('success', 'Registration successful');
    }

    public function selectLoginAs()
    {
        return view('login.selectLogin');
    }

    public function loginApplicant()
    {
        return view('login.loginApplicant');
    }

    public function loginA(Request $request)
    {
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('home')->with('success','Logged in successfully');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
