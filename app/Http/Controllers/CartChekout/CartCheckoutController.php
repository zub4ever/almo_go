<?php

namespace App\Http\Controllers\CartChekout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartCheckoutController extends Controller
{
    public function welcome (){

        return view("cartCheckout.welcome");
    }
    public function create (){

        return view("cartCheckout.create");
    }
}
