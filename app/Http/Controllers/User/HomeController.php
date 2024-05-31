<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AksesGadget;
use App\Models\Contact;
use App\Models\Fitur;
use App\Models\FiturAplikasi;
use App\Models\FiturOptimalkan;
use App\Models\Home;
use App\Models\Price;
use App\Models\Reminder;
use App\Models\SolusiHarga;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Home::all();
        $gadgets = AksesGadget::all();
        $fiturs = Fitur::all();
        $rmd = Reminder::all();
        $hargas = SolusiHarga::all();
        $fitur = FiturOptimalkan::all();
        $fiturapp = FiturAplikasi::all();
        $contacts = Contact::all();
        $abouts = About::all();

        // dd($data);
        return view('user.frontpage.home', [
        'data' => $data[0],
        'gadgets' => $gadgets[0],
        'fiturs' => $fiturs[0],
        'rmd' => $rmd[0],
        'hargas' => $hargas[0],
        'fitur' => $fitur[0],
        'fiturapp' => $fiturapp[0],
        'price' => Price::all(),
        'contacts' => $contacts[0],
        'abouts' => $abouts[0],
        'active' => 'index',
        ]);
    }
}










