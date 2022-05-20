<?php

namespace App\Http\Controllers;

use App\Models\Pr;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PrController extends Controller
{
    public function index(): View
    {
        return view('prs.index', [
            'prs' => Pr::get(),
        ]);
    }

    public function create(): View
    {
        return view('prs.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();

        $pr = new Pr([
            'pr_id' => $requestData['pr_id'],
            'pr_price' => $requestData['pr_price'],
            'description' => $requestData['description'],
        ]);
        $pr->save();

        return redirect()->route('prs.show', ['pr' => $pr]);
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

    public function update(Request $request, Pr $pr)
    {
    $requestData = $request->all();

    $pr->pr_id = $requestData['pr_id'];
    $pr->pr_price = $requestData['pr_price'];
    $pr->description = $requestData['description'];
    $pr->save();

    return redirect()->route('prs.show', ['pr' => $pr]);
    }

    public function destroy(Pr $pr)
    {
        $pr->delete();
        return redirect()->route('prs.index');
    }
}
