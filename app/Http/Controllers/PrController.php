<?php

namespace App\Http\Controllers;

use App\Models\Pr;

class PrController extends Controller
{
    public function index()
    {
        $pr = Pr::find(1);
        dd($pr);
    }
}
