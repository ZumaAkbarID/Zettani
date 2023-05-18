<?php

namespace App\Http\Controllers\Toko;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokoIndex extends Controller
{
    public function index()
    {
        return view('Toko.Index');
    }
}
