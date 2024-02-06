<?php

namespace App\Http\Controllers\basket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
class basket extends Controller
{
    function index(){
        if (Session::has('basket')) {
            $productIds =Session::get('basket');
        $products = Product::whereIn('id', $productIds)->get();    
            
        } else {
            
            $products ='';

        }
            return view('shop/basket',compact('products'));
    }


    function addToBasket($id){

        if (!Session::has('basket')) {
            Session::put('basket', [$id]);
            return;
        }
        $basketInfo =Session::get('basket');   
        if (in_array( $id,$basketInfo)){
            return;
        } 
            $basketInfo[] =    $id;
            Session::put('basket', $basketInfo);               
    }


    function GetBasketData(){
        $basketInfo =Session::get('basket');
        echo count( $basketInfo);
    }
    
    function forget(){
        Session::forget('basket');
        return back();

    }
}
