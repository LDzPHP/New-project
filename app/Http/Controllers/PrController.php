<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrStoreRequest;
use App\Http\Requests\PrUpdateRequest;
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

    public function store(PrStoreRequest $prStoreRequest)
    {
        $validatedData = $prStoreRequest->validated();

        $pr = new Pr([
            'pr_id' => $validatedData['pr_id'],
            'pr_price' => $validatedData['pr_price'],
            'description' => $validatedData['description'],
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

    public function update(PrUpdateRequest $prUpdateRequest, Pr $pr)
        {
        $validatedData = $prUpdateRequest->validate([
            'pr_id' => 'required',
            'pr_price' => 'required',
            'description' => 'required',
        ]);
    
        $pr->pr_id = $validatedData['pr_id'];
        $pr->pr_price = $validatedData['pr_price'];
        $pr->description = $validatedData['description'];
        $pr->save();

        return redirect()->route('prs.show', ['pr' => $pr]);
        }

    public function destroy(Pr $pr)
    {
        $pr->delete();
        return redirect()->route('prs.index');
    }
}
