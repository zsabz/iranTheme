<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Store;
use App\Models\User;
use Admin\Models\Product;
use Admin\Models\Category;
use Admin\Models\Keyword;
use Illuminate\Support\Facades\Auth;
use Admin\Http\Controllers\Traits\SiteTraits;

class UserController extends Controller
{
    use SiteTraits;

    function index(){
        $items = User::get();
    //    $items=$items->with('products')->count();
        $count = Product::where('athers_id',$items[0]->id)->count();
        // dd($items);
        return $this->view('views::products.user', true)->with(compact('items','count'));
    }

    function show($id){
        $items = Product::with('category','keywords')->get();
        $category = Category::where('parent_id', 0)->with('child')->get();  
        $keyword = Keyword::get();  
        $user = User::with('product')->get()->find($id);  
        $count = Product::where('athers_id',$id)->where('status',1)->count();  
       
        return $this->view('views::products.usershow', true)->with(compact('count','items','category','keyword','user'));
    }

    function store(Store $r){
        
        $r->validate([
                'name' => 'required|string|max:20',
                'password' => 'required',
                'email'=>'required',
                'phone'=>'min:3',
                'role'=>'',
            
        ]);
        $r=User::create([
            'name'=>$r->name,            
            'email'=>$r->email,            
            'password'=>$r->password,            
            'role'=>$r->role,            
            'phone'=>$r->phone,            
        ]);
    
        return back()->with('success','کاربر با موفقیت اظافه شد');
        }
        public function edit($id)
        {
            // $items = User::where('parent_id', 0)->with('child')->get();
            $item =  User::where('id',$id)->first();
            // dd($item);
            return view('views::products/edituser')->with(compact('item'));
            
        }

        public function update(Request $request, $id)
    {
        // dd($request->role);
            $user = User::where('id', $id)->first();
            $user->update($request->all());
            // dd($user);
           
             return redirect('/ad/user');
    }

        public function destroy($id)
        {
            
            $cat = User::findOrFail($id);
            $cat->delete();
            return back();
            //
        }
}
