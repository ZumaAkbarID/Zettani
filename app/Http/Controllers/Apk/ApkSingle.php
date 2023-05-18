<?php

namespace App\Http\Controllers\Apk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApkSingle extends Controller
{
    public function index()
    {
        return view('Apk.Single', [
            'info' => parent::dataInfo('Aplikasi Premium Murah'),
            'includeForm' => [
                'WA', 'Payment'
            ],
            'includeMenu' => [
                'Youtube'
            ]
        ]);
    }
}
