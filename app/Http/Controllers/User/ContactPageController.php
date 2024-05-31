<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function contact(){
        return view ('user.frontpage.contact', [
            'active' => 'contact'
        ]);
    }
}
