<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index(){
        $rmd = Reminder::all();
        $reminder = 'Reminder Pasien';
        // dd($data);
        return view('admin.fitur_permudah.index', compact('rmd','reminder' ));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_reminder' => 'required',
            'subtitle_reminder' => 'required',
            'description_reminder' => 'required',
            'list1' => 'required',
            'list2' => 'required',
            'list3' => 'required',
            'list4' => 'required',
            'reminder_image' => 'image|mimes:jpeg,png,jpg,gif',
            'register' => 'required',
            // Add validation for other fields as needed
        ]);

        $rmd = Reminder::find($id);

        if ($request->hasFile('reminder_image')) {
            $imagePath = $request->file('reminder_image')->store('uploads', 'public');
            $rmd->reminder_image = $imagePath;
        }


        $rmd = Reminder::find($id);

        $rmd->update([
            'title_reminder' => $validatedData['title_reminder'],
            'subtitle_reminder' => $validatedData['subtitle_reminder'],
            'description_reminder' => $validatedData['description_reminder'],
            'list1' => $validatedData['list1'],
            'list2' => $validatedData['list2'],
            'list3' => $validatedData['list3'],
            'list4' => $validatedData['liast4'],
            'register' =>$validatedData['register'],

            // Update other fields as needed
        ]);

        return redirect()->back()->with('success', 'Fitur reminder updated successfully');
    }
}
