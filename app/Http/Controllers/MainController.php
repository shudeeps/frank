<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MainController extends Controller
{
    public function main(){

        $products=Product::all();

      
        return view('welcome')->with('products',$products);
    }
}
