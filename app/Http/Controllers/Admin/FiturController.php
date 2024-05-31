<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index(){
        $fiturs = Fitur::all();
        $pageTitle = 'Fitur';
        // dd($data);
        return view('admin.fitur.index', compact('fiturs','pageTitle' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fitur_title' => 'required',
            'fitur_subtitle' => 'required',
            'fitur_description' => 'required',
            // Add validation for other fields as needed
        ]);

        $fiturs = Fitur::find($id);

        $fiturs->update([
            'fitur_title' => $validatedData['fitur_title'],
            'fitur_subtitle' => $validatedData['fitur_subtitle'],
            'fitur_description' => $validatedData['fitur_description'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Fitur data updated successfully');
    }
}
