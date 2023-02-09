<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::all();
        return view('investor.index', compact('investors'));
    }

    public function create()
    {
        return view('investor.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'balance' => 'required|numeric',
        ]);
        Investor::create($validatedData);
        return redirect()->back();
    }

    public function show(Investor $investor)
    {
        return view('investor.show', compact('investor'));
    }

    public function edit(Investor $investor)
    {
        return view('investor.edit', compact('investor'));
    }

    public function update(Request $request, Investor $investor)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'balance' => 'required|numeric'
        ]);
        $investor->update($validatedData);
        return redirect()->back();
    }

    public function destroy(Investor $investor)
    {
        $investor->delete();
        return redirect() - back();
    }
}
