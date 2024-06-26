<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(User $userData)
    {
        $viewData = [
            'title' => 'Login',
            'data' => $userData->get(),
        ];

        return view('admin.auth.login', $viewData);
    }

    public function login_proses(Request $request)
    {
         // Validate the form data
         $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.admin.dashboard')->with('success', 'Yeay, Kamu berhasil Login');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()
            ->route('login')
            ->with('success', 'kamu berhasil logout');
    }
}
