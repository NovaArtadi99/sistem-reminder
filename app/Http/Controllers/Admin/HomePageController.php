<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $data = Home::all();
        $home = 'Home Data List';
        // dd($data);
        return view('admin.home.homeDataList', compact('data','home') );
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_home' => 'required',
            'subtitle_home' => 'required',
            'description_home' => 'required',
            'image_home' =>  'image|mimes:jpeg,png,jpg,gif',
            // Add validation for other fields as needed
        ]);

        $data = Home::find($id);

        if ($request->hasFile('image_home')) {
            $imagePath = $request->file('image_home')->store('uploads', 'public');
            $data->image_home = $imagePath;
        }

        $data->update([
            'title_home' => $validatedData['title_home'],
            'subtitle_home' => $validatedData['subtitle_home'],
            'description_home' => $validatedData['description_home'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Home data updated successfully');
    }
}


