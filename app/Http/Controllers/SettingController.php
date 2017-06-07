<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\View;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $setting = Setting::first();

        return view('setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $templateNumber = $request->input('template_number', Setting::DEFAULT_TEMPLATE);

        $setting = Setting::first();

        if ($setting) {
            $setting->template_number = $templateNumber;
            $setting->save();
        } else {
            Setting::create([
                'template_number' => $templateNumber
            ]);
        }

        return redirect('setting')->with('success', 'Setting updated!');
    }

    public function preview($templateNumber)
    {
        if ($templateNumber && View::exists('home.login_' . $templateNumber)) {
            return view('home.login_' . $templateNumber);
        }

        return redirect('setting')->with('fail', 'Template not found!!!');
    }
}
