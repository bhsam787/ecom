<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use cart;
use App\Product;

class ShopController extends Controller
{
    Public function add(){
      $product= Product::find(request()->product_id);

      $cart=Cart::add([
        'id'=>$product->name,
        'price'=>$product->name,
        'description'=>$product->name,
        'quanity'=>request()->quantity
      ]);
      dd($cart);
    }
}
