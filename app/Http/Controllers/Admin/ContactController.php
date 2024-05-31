<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        $pageTitle = 'Kontak Kami';
        // dd($data);
        return view('admin.contact.index', compact('contacts','pageTitle') );
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'alamat' =>  'required',
            // Add validation for other fields as needed
        ]);

        $contacts = Contact::find($id);

        // if ($request->hasFile('image_home')) {
        //     $imagePath = $request->file('image_home')->store('uploads', 'public');
        //     $data->image_home = $imagePath;
        // }

        $contacts->update([
            'name' => $validatedData['name'],
            'telepon' => $validatedData['telepon'],
            'email' => $validatedData['email'],
            'alamat' => $validatedData['alamat'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Kontak updated successfully');
    }
}
