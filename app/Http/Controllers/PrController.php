<?php

namespace App\Http\Controllers;

use App\Models\Pr;

class PrController extends Controller
{
    public function index()
    {
        return view('prs.index');
    }

    public function create()
    {
        return view('prs.create');
    }

    public function store()
    {

    }

    public function show($id)
    {
        $pr = Pr::find($id);
        return view('prs.show', [
            'pr' => $pr,
        ]);
    }

    public function edit($pr)
    {
        $pr = Pr::findOrFail($pr);

        return view('prs.edit',
        [
            'pr' => $pr,
        ]);
    }

        public function destroy()
    {

    }
}
