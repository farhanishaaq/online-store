<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
    //
    public function getindex(){

        $products = Product::all();
        return view('shop.index')->with('products', $products);
//        return view('shop.index');

    }

    public function addTocart(Request $request, $id){

         $product = Product::find($id);
         $oldCart = Session::has('cart') ? Session::get('cart'): null;
         $cart = new Cart($oldCart);
         $cart->add($product, $product->id);

         $request->session()->put('cart', $cart);
//         dd($request->session()->get('cart'));
         return redirect()->route('index');

    }

}
