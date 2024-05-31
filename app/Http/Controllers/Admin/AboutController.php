<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        $pageTitle = 'About';
        // dd($data);
        return view('admin.about.index', compact('abouts','pageTitle') );
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'buttom1' => 'required',
            'buttom2' =>  'required',
            'name' =>  'required',
            'list' =>  'required',
            'list2' =>  'required',
            'list3' =>  'required',
            'list4' =>  'required',
            'list5' =>  'required',
            'list6' =>  'required',
            // Add validation for other fields as needed
        ]);

        $abouts = About::find($id);

        // if ($request->hasFile('image_home')) {
        //     $imagePath = $request->file('image_home')->store('uploads', 'public');
        //     $data->image_home = $imagePath;
        // }

        $abouts->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'buttom1' => $validatedData['buttom1'],
            'buttom2' => $validatedData['buttom2'],
            'name' => $validatedData['name'],
            'list' => $validatedData['list1'],
            'list2' => $validatedData['list2'],
            'list3' => $validatedData['list3'],
            'list4' => $validatedData['list4'],
            'list5' => $validatedData['list5'],
            'list6' => $validatedData['list6'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Halaman About updated successfully');
    }
}
