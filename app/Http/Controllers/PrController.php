<?php

namespace App\Http\Controllers;

use App\Models\Pr;

class PrController extends Controller
{
    public function index()
    {
        $pr = Pr::get();
        dd($pr);
    }
}
