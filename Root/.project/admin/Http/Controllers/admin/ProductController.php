<?php
namespace Admin\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\Store;
use Admin\Models\Product;
use Admin\Models\Category;
use Admin\Models\Keyword;
use Admin\Models\Coment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    use SiteTraits;
    function index(){
        $items = Product::with('category','keywords','user')->get();
        // dd($items);
        $category = Category::where('parent_id', 0)->with('child')->get();  
        $keyword = Keyword::get();  
        $users = User::get();  

        return $this->view('views::products.addProduct', true)->with(compact('users','items','category','keyword'));
    }

    function showall(){
        
        $items = Product::with(['comments' => function($q){
            $q->orderby('id', 'desc')->limit(3);
        },'category','keywords','user'])->paginate(5);  
        // dd($items);
        return $this->view('views::products.productShow', true)->with(compact('items'));
    }

    function show($id)
    {
        $items = Product::with((['comments' => function($q){
            $q->where('parent_id', '0')->orderby('id', 'DESC');
        },'category','keywords']))->find($id);  
        return $this->view('views::products.productShowDetail', true)->with(compact('items'));
    }

    function store(Store $request){
       
        $item = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'title' => $request->title,
            // 'image' => $request->image,
            'category_id'=>$request->category_id,
            'athers_id'=>$request->athers_id,
            // session()->get('test'),
            'finalPrice'=>$request->finalPrice,
            'linkPreview'=>$request->link,
        ]);
        // dd($item);
        $item->keywords()->sync($request->states);
        return back()->with('success','کتگوری با موفقیت اظافه شد');
        }

        public function edit($id)
        {
              $items = Category::where('parent_id', 0)->with('child')->get();
              $users = User::get();
            //   $items = Category::get();
            // $items = Product::where('parent_id', 0)->with('child')->get();
            $item =  Product::where('id',$id)->with('comments','category','keywords','user')->first();
            // dd($item);
            return  $this->view('views::products/editpro',true)->with(compact('item','items','users'));      

        }

        public function update(Request $request, $id)
    {
        // dd($request);
        $product = Product::where('id', $id)->first();
        $product->update($request->all());

             return redirect('/ad/productShow');
    }
    
        public function destroy($id)
        {            
            $cat = Product::findOrFail($id);
            // SoftDeleted
            $cat->delete();
            $coment = Coment::where('product_id',$id)->first();
            if ($coment <> null){
            $coment->delete();
            }
            return redirect('/ad/productShomessagew')->with('', 'حذف با موفقیت انجام شد');
        }
}
