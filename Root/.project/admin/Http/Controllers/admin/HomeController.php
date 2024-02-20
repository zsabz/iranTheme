<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\Store;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Admin\Models\Product;
use Admin\Models\coment;
class HomeController extends Controller
{
    use SiteTraits;
    function index(){
        // $count = Product::where('athers_id',$items[0]->id)->count();
        $countUser=User::count();
        $countProd=Product::count();
        $countcom=Coment::count();
        $total=Product::select('price')->sum('price');
        $pro=Product::with('user')->orderBy('created_at','desc')->where('status',0)->get();
        $users=User::orderBy('created_at','desc')->get()->take(5);
        $products=Product::orderBy('created_at','desc')->get()->take(5);
        $coments=Coment::orderBy('created_at','desc')->get()->take(5);
        // dd($pro);
        return   $this->view('views::products/dashboard', true)->with(compact('coments','users','products','pro','countUser','countProd','countcom','total'));

    }

    function store(Store $r){
        
        $r->validate([
                'title' => 'required|string|max:20',
                'parent_id' => 'required',

            
        ]);
        $category = new category();
        $category->title= $r->title;
        $category->parent_id=$r->parent_id;
        $category->save();
        return back()->with('success','کتگوری با موفقیت اظافه شد');
        }
        public function edit($id)
        {
            $items = Category::where('parent_id', 0)->with('child')->get();
            $item =  Category::where('id',$id)->first();
            // dd($item);
            return view('views::products/editcat')->with(compact('item','items'));
            
        }

        public function update(Request $request, $id)
    {
        // dd($request->all());
            $cat = Category::where('id', $id)->first();
            $cat->update($request->all());
            // dd($key);
             return redirect('/ad/addCategory');
    }

        public function destroy(Request $request)
        {
            // dd('ii');
            $model = 'Admin\Models\\' . $request->mainModel;
            $relatedModel = 'Admin\Models\\' . $request->relatedModel;
            $fk = lcfirst($request->mainModel) . '_id';
            
            $item=$model::find($request->id);
            $rel = $relatedModel::where($fk, $request->id)->get();
        // dd( $request->relatedModel);
        // dd($rel);
        if(count($rel)< 1){
            $item->delete();
            return back()->with('message', 'حذف انجام شد');
        }
        return back()->with('message', 'این محصول دارای' .$request->relatedModel .'و قادر به حذف نیستید');
            //
        }
    

        public function delete (request  $request){
            dd('ttt');
     
        

}
}
