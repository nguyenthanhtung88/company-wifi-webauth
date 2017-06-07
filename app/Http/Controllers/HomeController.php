<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $templateNumber = !empty($setting) ? $setting->template_number : Setting::DEFAULT_TEMPLATE;

        return view('home.login_' . $templateNumber);
    }
}
