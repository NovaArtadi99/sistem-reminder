<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $pageTitle = 'Price';
        $price = Price::all();
        return view('admin.price.index', compact('price','pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Fitur';
        return view('admin.price.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);


        return redirect()->route('admin.price.store')->with('success','Price created successfully');
    }

    public function edit($id)
    {
        $price = Price::find($id);
        $pageTitle = 'Edit Data Fitur ' . $price->name;
        return view('admin.price.edit', compact('price', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            // Add validation for other fields as needed
        ]);

        $price = Price::find($id);

        $price->update([
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
        ]);

        return redirect()->route('admin.price.index')->with('success', 'Price data updated successfully');
    }

    public function destroy($id)
    {
        $price = Price::findOrFail($id);
        $price->delete();

        return redirect()->route('admin.price.index')->with('success','Price data deleted successfully');
    }
}
