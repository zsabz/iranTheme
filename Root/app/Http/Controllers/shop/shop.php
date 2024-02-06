<?php

namespace App\Http\Controllers\shop;
use Inertia\Inertia;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class shop extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $r)
    {
        $products=Product::orderBy("id","desc")->paginate(9);
        $category['item']=Category::all();
        $category['price']=['max'=>$products->max('price'),'min'=>$products->min('price')];
        
        // return Inertia::render('shop/Main',['products'=>$products]);
        return view('shop/index',compact('products','category'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::find($id);
        // dd($product->previews);
        return view('shop/product',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
