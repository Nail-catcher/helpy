<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeAdminController extends Controller
{
    public function index()
    {
        return view('welcomeadmin');
    }
}
