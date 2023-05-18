<?php

namespace App\Http\Controllers\Apk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApkCheckout extends Controller
{
    public function process(Request $request)
    {
        dd($request->all());
    }
}
