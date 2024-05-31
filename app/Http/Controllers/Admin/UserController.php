<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ganti 'User' dengan model User yang sebenarnya
        return view('admin.DataUser.dataUser', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.DataUser.createDataUser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required',
            'status' => 'required', // Tambahkan baris ini untuk field 'status'
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Tambahkan validasi untuk photo
        ]);

        // Menggunakan Hash::make untuk mengenkripsi password
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'photo' => $request->photo,
        ]);

        // Proses unggah foto
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/photos'), $fileName);
            $user->photo = $fileName;
            $user->save(); // Simpan nama file foto ke database
        }

        return redirect()->route('admin.admin.users')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.DataUser.editDataUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $password = $request->filled('password') ? Hash::make($request->password) : $user->password;

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password, // Gunakan password yang telah diambil dari request
        'role' => $request->role,
        'status' => $request->status,
        'photo' => $request->photo,
    ]);

        return redirect()->route('admin.admin.users')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.admin.users')->with('success', 'User deleted successfully');
    }
}
