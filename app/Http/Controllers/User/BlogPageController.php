<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function blog(){
        return view ('user.frontpage.blog', [
            'active' => 'blog'
        ]);
    }
}
