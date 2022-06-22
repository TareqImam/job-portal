<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function jobpostview()
    {
        return view('backend.pages.admin');
    }
}
