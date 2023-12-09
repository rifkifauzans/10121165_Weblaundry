<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakerController extends Controller
{
    public function maker()
    {
        return view('about.maker');
    }
}
