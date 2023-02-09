<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('stock.index', compact('stocks'));
    }

    public function create()
    {
        return view('stock.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'investor_id' => 'required|integer|exists:investor,id',
            'import_id' => 'required|integer|exists:import,id',
            'procent' => 'required|numeric',
        ]);
        Stock::create($validatedData);
        return redirect()->back();
    }

    public function show(Stock $stock)
    {
        return view('stock.show', compact('stock'));
    }

    public function edit(Stock $stock)
    {
        return view('stock.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock)
    {
        $validatedData = $request->validate([
            'billz_id' => 'required|integer',
            'name' => 'required|string',
            'sum' => 'required|numeric'
        ]);
        $stock->update($validatedData);
        return redirect()->back();
    }

    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect() - back();
    }
}
