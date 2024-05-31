<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        $data = Home::all();
        $pageTitle = 'Dashboard';
        $jumlahuser = User::count();
        // dd($data);
        return view('admin.dashboard.dashboard', compact('data', 'pageTitle', 'jumlahuser'));

    }

}
