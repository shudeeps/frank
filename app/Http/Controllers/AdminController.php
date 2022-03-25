<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Lender;
use Auth;

class AdminController extends Controller
{
    public function giveAccess(){
     
        $product=product::all()->where('is-available', '=',0);

     
        // dd($product);

        return view('admin/giveAccess')->with('products', $product);


    }

    public function showLender(){

        $lenders=lender::all();

        return view('admin/showLender')->with('products', $lenders);
       
    }
}
