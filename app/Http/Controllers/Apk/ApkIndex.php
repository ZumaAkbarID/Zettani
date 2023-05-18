<?php

namespace App\Http\Controllers\Apk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApkIndex extends Controller
{
    public function index()
    {
        return view('Apk.Index', [
            'info' => parent::dataInfo('Aplikasi Premium Murah')
        ]);
    }
}
