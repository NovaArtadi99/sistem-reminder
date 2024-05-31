<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SolusiHarga;
use Illuminate\Http\Request;

class SolusiHargaController extends Controller
{

    public function index(){
        $hargas = SolusiHarga::all();
        $hrg = 'Solusi Hargag';
        // dd($data);
        return view('admin.solusi_harga.harga', compact('hargas','hrg' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_hrg' => 'required',
            'subtitle_hrg' => 'required',
            'description_hrg' => 'required',
            // Add validation for other fields as needed
        ]);


        $hargas = SolusiHarga::find($id);

        $hargas->update([
            'title_hrg' => $validatedData['title_hrg'],
            'subtitle_hrg' => $validatedData['subtitle_hrg'],
            'description_hrg' => $validatedData['description_hrg'],

            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Title Solusi Harga updated successfully');
    }

}
