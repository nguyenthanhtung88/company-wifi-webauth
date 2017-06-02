<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $template = 'login_1';
        return view('home.' . $template);
    }
}
