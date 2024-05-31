<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GaleryPageController extends Controller
{

    public function gallery(){
        $gallery = Gallery::all();
        return view ('user.frontpage.galery', [
            'gallery' => $gallery[0],
            'galleryimage' => GalleryImage::all(),
            'active' => 'gallery'
         ]);
    }
}
