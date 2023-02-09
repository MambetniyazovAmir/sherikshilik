<?php

namespace App\Http\Controllers;

use App\Models\Import;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function index()
    {
        $imports = Import::all();
        return view('import.index', compact('imports'));
    }

    public function create()
    {
        return view('import.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'billz_id' => 'required|integer',
            'name' => 'required|string',
            'sum' => 'required|numeric',
        ]);
        Import::create($validatedData);
        return redirect()->back();
    }

    public function show(Import $import)
    {
        return view('import.show', compact('import'));
    }

    public function edit(Import $import)
    {
        return view('import.edit', compact('import'));
    }

    public function update(Request $request, Import $import)
    {
        $validatedData = $request->validate([
            'billz_id' => 'required|integer',
            'name' => 'required|string',
            'sum' => 'required|numeric'
        ]);
        $import->update($validatedData);
        return redirect()->back();
    }

    public function destroy(Import $import)
    {
        $import->delete();
        return redirect() - back();
    }
}
