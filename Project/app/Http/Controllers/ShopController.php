<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopController extends Controller
{

    public function index ()
    {

        $aProducts = Product::all();

        return view( 'shop', [ 'aProducts' => $aProducts ] );
    }
}
