<?php

namespace App\Http\Controllers\basket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Support\Facades\URL;

class basket extends Controller
{
    function index(){
        if (Session::has('basket')) {
            $productIds =Session::get('basket');
            $products = Product::whereIn('id', $productIds)->get();    
            $prices = array_column($products->toArray(), 'price');
            $sum=array_sum($prices);
            $url = URL::signedRoute('pay', ['amount' => $sum]);
            return Inertia::render('Shop/Basket',['products'=>$products,'signedUrl'=>$url]);
        } 
         
            return Inertia::render('Shop/BasketEmpty');


        

            // return view('shop/basket',compact('products'));
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
        if(Session::has('basket')){

            
             return response()->json([
                'data' =>  count( $basketInfo)
            ],200) ;
        }

        return response()->json([
            'data' =>  0
        ],200) ;
        
    }
    
    function forget(){
        Session::forget('basket');
        return back();

    }
    function removeItem($id){
        if (!Session::has('basket')) return;

        $basketInfo =Session::get('basket');   
        $newArray = array_filter($basketInfo, function ($basketInfo ) use($id){
            // حذف عناصری که مقدار 64 را دارند
            return  $basketInfo != $id;
        });
        Session::put('basket', $newArray);   
        return redirect()->back();
    }
}