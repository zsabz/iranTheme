<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    function index(){
        return view('admin/category');
    }

    function store(Request $r){
        $r->validate([
                'title' => 'required|string|max:20',
                'type' => 'required|string|unique:'.Category::class,

            
        ]);
        $category = new category();
        $category->title= $r->title;
        $category->type=$r->type;
        $category->save();
        return back()->with('success','کتگوری با موفقیت اظافه شد');
    }
}
