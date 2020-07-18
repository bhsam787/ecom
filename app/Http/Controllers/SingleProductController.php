<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SingleProductController extends Controller
{
    public function index(Product $product ){

      return view('Frontend.product-detail',[
        'product'=>$product
      ]);
    }
}
