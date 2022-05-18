<?php

namespace App\Http\Controllers;

use App\Models\Pr;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PrController extends Controller
{
    public function index(): View
    {
        return view('prs.index');
    }

    public function create(): View
    {
        return view('prs.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

        public function show(Pr $pr): View
    {
            return view('prs.show', 
        [
            'pr' => $pr,
        ]);
    }

    public function edit(Pr $pr): View
    {
        return view('prs.edit',
        [
            'pr' => $pr,
        ]);
    }

        public function destroy()
    {

    }
}
