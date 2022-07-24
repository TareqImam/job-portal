<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function registration(Request $request)
    {
        Applicant::create([
            'applicantName' => $request->applicantName,
            'applicantEmail' => $request->applicantEmail,
            'applicantPassword' => bcrypt($request->applicantPassword)
        ]);

        User::create([
            'name' => $request->applicantName,
            'email' => $request->applicantEmail,
            'password' => bcrypt($request->applicantPassword)
        ]);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        Auth::attempt([
            'email' => $request->applicantEmail,
            'password' => $request->applicantPassword
        ]);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
