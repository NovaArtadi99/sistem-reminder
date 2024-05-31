<?php

namespace App\Http\Controllers;

use App\Models\FiturOptimalkan;
use Illuminate\Http\Request;

class FiturOptimalController extends Controller
{
    public function index(){
        $fitur = FiturOptimalkan::all();
        $ftr = 'Fitur Optimalkan';
        // dd($data);
        return view('admin.fitur2.index', compact('fitur','ftr') );
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'register' =>  'required',
            // Add validation for other fields as needed
        ]);

        $data = FiturOptimalkan::find($id);

        $data->update([
            'title' => $validatedData['title'],
            'subtitle' => $validatedData['subtitle'],
            'description' => $validatedData['description'],
            'register' => $validatedData['register'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Fitur optimalkan updated successfully');
    }
}
