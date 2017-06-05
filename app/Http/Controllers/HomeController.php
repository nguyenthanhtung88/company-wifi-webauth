<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $template = 'login_1';
        return view('home.' . $template);
    }
}
