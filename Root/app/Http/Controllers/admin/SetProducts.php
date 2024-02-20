<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\pre_view;
use Illuminate\Support\Facades\Storage;
class SetProducts extends Controller
{

    function index(){
        $category= Category::all();
    
        return view('admin/addProduct',compact('category'));
    }




    function setNewProducts(Request $request){

        $request->validate([
            'cat1' => 'required',
            'cat2' => 'required',
        ]);

        
        $user = Auth::user();
        if($user->roll =='user')
            return;


            $path = $request->file('mainFile')->store("source");
            // dd($path);
            // دریافت آدرس ذخیره شده فایل
            $downlodeLink = $path;
            // $downlodeLink = Storage::url($path);

            $file = $request->file('img');
            $nameImg = $file->getClientOriginalName();
            $destinationPath = 'img/products/mainImg';
            $file->move($destinationPath, $nameImg);
            // dd($nameImg );

            $product = Product::create([
            'athers_id'=>$user->id,
            'name'=>$request->name,
            'title'=>$request->title,
            'price'=>$request->price,
            'img'=> $nameImg,
            // 'description'=>$request->description,
            'description'=>'bbbb',
            'status'=>($request->status == 'on')?1:0,
            'downlodeLink'=>$downlodeLink,

        ]);

        
        $categoryIds = [$request->cat1, $request->cat2]; // شناسه‌های دسته‌بندی‌هایی که محصول به آنها تعلق دارد
        $product->categories()->attach($categoryIds);


        $productid =$product->id;
        $previewNumber= $request->preview_row_number;
        for($i=0;$i<$previewNumber ; $i++){      
            $j=$i+1;
              if($_POST["pre_title$j"]!=null){

                  $pre_img = $request->file("pre_img$j");
                  $pre_nameImg = $pre_img->getClientOriginalName();
                  $pre_destinationPath = "pre_view/products/$productid/img/";
                  $pre_img->move($pre_destinationPath, $pre_nameImg);
      
      
                  $pre_file = $request->file("pre_file$j");
                  $pre_nameFile = $pre_file->getClientOriginalName();
                  $pre_destinationPath = "pre_view/products/$productid/file/";
                  $pre_file->move($pre_destinationPath,  $pre_nameFile);
      
                  pre_view::create([
                      
                          'title'=> $_POST["pre_title$j"],
                          'img'=>$pre_nameImg,
                          'file'=>$pre_nameFile,
                          'product_id'=>$productid,
                      ]);

              }

        //    echo $_POST["pre_title$j"];
        }
            // dd($previewNumber);
         

        return redirect('/admin/dashbord')->with('success','محصول اضافه شد');
    }
}
