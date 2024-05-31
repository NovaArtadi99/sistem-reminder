<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturPageController extends Controller
{
    public function fitur(){
        $fiturs = Fitur::all();
        // $procces = WorkProcces::all();
        // $workprocces = WorkProcces_2::all();
        // $combine = Combine::all();
        return view('user.frontpage.fitur', [
            // 'dataFiturMenu' => FiturContainerMenu::all(),
            'fiturs' => $fiturs[0],
            // 'workprocces' => $procces[0],
            // 'workprocces_2' => $workprocces[0],
            // 'combine' => $combine[0],
            'active' => 'fitur'
        ]);
    }
}
