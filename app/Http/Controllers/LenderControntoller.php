<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth;

use Illuminate\Support\Facades\Auth;
use App\Product;

class LenderControntoller extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadPost(Request $request)
    {
        // dd($request->name);
     

     $product=new product();

     $product->name = $request->name;
     $product->description = $request->description;
     $product->category = $request->category;
     $product->price = $request->price;
     $product->date_available = $request->date_available;
    
     $product->is_available =false;
     $product->lender_id = 1;

    $re=  $product->save();

    return view('lender', ['url' => 'lender','success'=>true]);


        
    }

    public function showproduct(){

        $product=product::all();

        return view('lender/showProduct')->with('products', $product);
    
    }


}
