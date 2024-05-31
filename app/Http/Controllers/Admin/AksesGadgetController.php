<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AksesGadget;
use Illuminate\Http\Request;

class AksesGadgetController extends Controller
{
    public function index(){
        $gadgets = AksesGadget::all();
        $gadget = 'Akses Gadget';
        // dd($data);
        return view('admin.akses_gadget.index', compact('gadgets','gadget') );
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_akses' => 'required',
            'subtitle_akses' => 'required',
            'description_akses' => 'required',
            'teks1' => 'required',
            'teks2' => 'required',
            'register_akses' => 'required',
            'image_akses' => 'image|mimes:jpeg,png,jpg,gif,svg',
            // Aturan validasi untuk 'register_a' harus ditambahkan di sini
        ]);


        $gadgets = AksesGadget::find($id);

        if ($request->hasFile('image_akses')) {
            $imagePath = $request->file('image_akses')->store('uploads', 'public');
            $gadgets->image_akses = $imagePath;
        }

        $gadgets->update([
            'title_akses' => $validatedData['title_akses'],
            'subtitle_akses' => $validatedData['subtitle_akses'],
            'description_akses' => $validatedData['description_akses'],
            'teks1' => $validatedData['teks1'],
            'teks2' => $validatedData['teks2'],
            'register_akses' => $validatedData['register_akses'],
            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Akses gadget updated successfully');
    }
}
