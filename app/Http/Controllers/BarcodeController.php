<?php

namespace Market\Http\Controllers;

use Illuminate\Http\Request;
use Market\Models\Product\Product;
use Market\Http\Requests;

class BarcodeController extends Controller
{


    public function index()
    {

        $producto = Product::all(["name","price"]);
        return view('barcode')->with('producto',$producto);


    }


    //
}
