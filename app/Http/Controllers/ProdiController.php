<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function user()
    {
        return view('prodi.user');
    }
}
