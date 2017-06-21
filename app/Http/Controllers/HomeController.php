<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $companies = [
            [
                'country' => 'Framgia Vietnam Co., Ltd',
                'branches' => [
                    [
                        'name' => 'Ha Noi (Head office)',
                        'address' => '13F Keangnam Landmark 72 Tower, Plot E6, Pham Hung Road, Nam Tu Liem District., Ha Noi',
                    ],
                    [
                        'name' => 'Laboratory',
                        'address' => '9F HTP Building, 434 Tran Khat Chan, 1km from Bach Khoa University, Ha Noi',
                    ],
                    [
                        'name' => 'Ho Chi Minh',
                        'address' => '8F Nice building, 467 Dien Bien Phu Str., Ward 25, Binh Thanh district, HCMC',
                    ],
                    [
                        'name' => 'Da Nang',
                        'address' => '6F, Vinh Trung Plaza, 255~257 Hung Vuong Str., Vinh Trung ward, Thanh Khe district, Da Nang',
                    ]
                ]
            ],
        ];
        $setting = Setting::first();
        $templateNumber = !empty($setting) ? $setting->template_number : Setting::DEFAULT_TEMPLATE;

        return view('home.login_' . $templateNumber, compact('companies'));
    }
}
