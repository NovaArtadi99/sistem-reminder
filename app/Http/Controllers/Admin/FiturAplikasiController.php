<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FiturAplikasi;
use Illuminate\Http\Request;

class FiturAplikasiController extends Controller
{
    public function index()
    {
        $pageTitle = 'Fitur Aplikasi';
        $fiturapp = FiturAplikasi::all();
        return view('admin.fitur_app.index', compact('fiturapp','pageTitle'));
    }

    public function create()
    {
        $pageTitle = 'Create New Fitur';
        return view('admin.fitur_app.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fitur_app_no' => 'required',
            'fitur_app_title' => 'required',
            'fitur_app_description' => 'required',
            'fitur_app_image' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
        ]);

        $imagePath = $request->file('fitur_app_image')->store('uploads','public');

        FiturAplikasi::create([
            'fitur_app_image' => $imagePath,
            'fitur_app_title' => $validatedData['fitur_app_title'],
            'fitur_app_description' => $validatedData['fitur_app_description'],
            'fitur_app_no' => $validatedData['fitur_app_no'],
        ]);

        return redirect()->route('admin.fitur.fitur')->with('success','Fitur created successfully');
    }

    public function edit($id)
    {
        $fiturapp = FiturAplikasi::find($id);
        $pageTitle = 'Edit Data Fitur ' . $fiturapp->fitur_app_title;
        return view('admin.fitur_app.edit', compact('fiturapp', 'pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'fitur_app_no' => 'required',
            'fitur_app_title' => 'required',
            'fitur_app_description' => 'required',
            'fitur_app_image' => 'sometimes|image|mimes:jpeg,png,jpg,svg,gif',
            // Add validation for other fields as needed
        ]);

        $fiturapp = FiturAplikasi::find($id);

        if($request->hasFile('fitur_app_image')) {
            $imagePath = $request->file('fitur_app_image')->store('uploads','public');
            $fiturapp->update([
                'fitur_app_image' => $imagePath,
            ]);
        }

        $fiturapp->update([
            'fitur_app_title' => $validatedData['fitur_app_title'],
            'fitur_app_description' => $validatedData['fitur_app_description'],
            'fitur_app_no' => $validatedData['fitur_app_no'],
        ]);

        return redirect()->route('app.index')->with('success', 'Fitur data updated successfully');
    }

    public function destroy($id)
    {
        $fiturapp = FiturAplikasi::findOrFail($id);
        $fiturapp->delete();

        return redirect()->route('app.index')->with('success','Fitur data deleted successfully');
    }
}

