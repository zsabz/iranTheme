<?php

namespace Admin\Http\Controllers\admin;
use Illuminate\Validation\Rules\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\pre_view;
use Illuminate\Support\Facades\Storage;
use Admin\Http\Requests\product as p;
use ZipArchive;
class SetProducts extends Controller
{

    function index(){
        $category= Category::all();
        return view('products/addProduct',compact('category'));
    }

    function setNewProducts(p $request)
    {

        $preVieww_path= Storage::putFile('public/preview/12',$request->preVieww);
        // dd(Storage::url($preVieww_path));
     




        $path = $request->file('mainFile')->store("source");
        
        // دریافت آدرس ذخیره شده فایل
        $downlodeLink = $path;
        
        $file = $request->file('img');
        $nameImg = $file->getClientOriginalName();
        $destinationPath = 'img/products/mainImg';
        $file->move($destinationPath, $nameImg);

        
        $data= $request->all();
        $data['athers_id']=Auth::user()->id;
        $data['status']=$data['status']?1:0;
        $data['downlodeLink']=$downlodeLink;
        $data['img']=$nameImg;

        $product = Product::create($data);
        $productid =$product->id;

        
        $categoryIds = [$request->cat1, $request->cat2]; // شناسه‌های دسته‌بندی‌هایی که محصول به آنها تعلق دارد
        $product->categories()->attach($categoryIds);


        
            // dd($previewNumber);
         
        dd($productid);
        return redirect('/admin/dashbord')->with('success','محصول اضافه شد');
    }

    

    public function store()
    {
        dd(132);
    }
}
