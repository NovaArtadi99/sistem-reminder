<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ListPrice;
use App\Models\Price;
use Illuminate\Http\Request;

class PricePageController extends Controller
{
    public function price(){
        $price = Price::all();
        return view ('user.frontpage.harga', [
            'price' => $price[0],
            'listprice' => ListPrice::all(),
            'active' => 'price'
        ]);
    }
}
