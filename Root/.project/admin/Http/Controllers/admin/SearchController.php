<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\Store;
use Admin\Models\Category;
use Admin\Models\Keyword;
use Illuminate\Support\Facades\Auth;
class SearchController extends Controller
{
    use SiteTraits;

    public function search(Request $request)
    {
        // dd($request->word);
        /** when get query string from search box */
        // if ($request->type == "form") {
            // $request->validate([
            //     'search-box' => 'nullable|alpha_space',
            // ]);
            // $products = \App\Models\Product::select('name', 'id')->where('status', 1)->where('name', 'LIKE', '%' . $request->get('search_word') . '%')->limit(3)->get();
            $products = \Admin\Models\Product::select('name', 'id')->where('status', 1)->where('name', 'LIKE', '%' . $request->word . '%')->limit(3)->get();
            $keys = \Admin\Models\Keyword::select('name', 'id')->where('status', 1)->where('name', 'LIKE', '%' .  $request->word . '%')->limit(3)->get();
            // dd($request->word,$keys);
            // $bsubjects = \App\Models\Bsubject::select('title', 'id')->where('active', 1)->where('title', 'LIKE', '%' . $request->get('search-box') . '%')->limit(3)->get();
            // $psubjects = \App\Models\Psubject::select('title', 'id')->where('active', 1)->where('title', 'LIKE', '%' . $request->get('search-box') . '%')->limit(3)->get();
            // $keywords  = \App\Models\Keyword::select('title', 'id')->where('active', 1)->where('title', 'LIKE', '%' . $request->get('search-box') . '%')->limit(3)->get();
            // return response()->json(['status' => 200, 'result' => ['products' => $products, 'blogs' => $blogs, 'bsubjects' => $bsubjects, 'psubjects' => $psubjects, 'keywords' => $keywords]]);
            // dd('word');
            return response()->json(['status' => 200, 'result' => ['products' => $products,'keys' => $keys]]);
        // }
        // $perPage = 4;
        /** search by subject or keyword using "cat" variable for product or blog; */
    //     if (request()->get('cat')) {
    //         switch (request()->get('cat')) {
    //             case "psubject":
    //                 $category = 'subject';
    //                 $item_searchby = 'موضوع';
    //                 $items = Product::where('active', 1);
    //                 $searchby = Psubject::find($id);
    //                 /** check if this category has child or not
    //                  * if has { list all its products}
    //                  * if not {list parent category its own products}
    //                  */
    //                 $children = Psubject::where('parent_id', $id)->get(); //just in search view is needed
    //                 if ($children->count() > 0) {
    //                     $items = $items->whereIn('subject_id', $children->pluck('id'));
    //                 } else {
    //                     $items = $items->where('subject_id', $id);
    //                 }
    //                 break;
    //             case "bsubject":
    //                 $category = 'subject';
    //                 $item_searchby = 'موضوع';
    //                 $items = Blog::where('active', 1);
    //                 $searchby = Bsubject::find($id);
    //                 $items = $items->where('subject_id', $id);
    //                 break;
    //             case "bkeyword":
    //                 $category = 'keyword';
    //                 $item_searchby = 'کلمه کلیدی';
    //                 $searchby = Keyword::find($id);
    //                 $items = Blog::where('active', 1);
    //                 $items = $items->whereHas('keywords', function ($q) use ($id) {
    //                     $q->where('keyword_id', $id);
    //                 });
    //                 break;
    //             case "pkeyword":
    //                 $category = 'keyword';
    //                 $item_searchby = 'کلمه کلیدی';
    //                 $searchby = Keyword::find($id);
    //                 $items = Product::where('active', 1);
    //                 $items = $items->whereHas('keywords', function ($q) use ($id) {
    //                     $q->where('keyword_id', $id);
    //                 });
    //                 break;
    //             default:
    //                 $item_searchby = 'کلیه محصولات';
    //                 $searchby = 'کلیه محصولات';
    //                 break;
    //         }
    //     } else {
    //         /** when cat not set */
    //         $item_searchby = 'کلیه محصولات';
    //         $searchby = 'کلیه محصولات';
    //         /** if there isn't cat, get m = model name */
    //         if (request()->get('m')) {
    //             $children = ''; /* just in search view is needed */
    //             if (request()->get('m') == 'product') {
    //                 $items = Product::where('active', 1);
    //                 // $searchby = Psubject::find($id);
    //                 // $items = $items->where('subject_id', $id);
    //             } else {
    //                 $items = Blog::where('active', 1);
    //                 // $searchby = Bsubject::find($id);
    //                 // $items = $items->where('subject_id', $id);
    //             }
    //         }
    //     }
    //     $items = $this->sortCheck($items);
    //     $items = $this->priceCheck($items);
    //     $items = $this->brandCheck($items);
    //     $items = $this->colorCheck($items);
    //     $items = $this->sizeCheck($items);
    //     $items = $items->paginate($perPage);
    //     $page_title = "نتایج جستجو";
        
    //     $brands = \App\Models\Brand::all(); //get all brands
    //     $colors = \App\Models\FeatureValue::where('feature_id', 1)->get(); //get all colors
    //     $sizes = \App\Models\FeatureValue::where('feature_id', 2)->get(); //get all sizes
        
    //     $subjects = Psubject::all(); //to use in filter tag
    //     $keywords = Keyword::all();
    //     $last_6_items = Product::orderby('id', 'desc')->limit(6)->get();
    //     if ($request->ajax()) {
    //         $allItems = $items->total();
    //         $viewName = request()->get('m') == 'product' ? 'siteV::products.list' : 'siteV::blogs.blog';
    //         $view = view($viewName)->with(compact('items', 'page_title', 'brands', 'colors', 'sizes', 'item_searchby', 'subjects', 'children', 'searchby', 'keywords', 'last_6_items'))->render();
    //         return response()->json(['status' => 200, 'allItems' => $allItems, 'response' => $view, 'heading' => Messages::$messages['toast']['heading']['info'], 'text' => Messages::$messages['cart']['updatedTrue'], 'icon' => Messages::$messages['toast']['icon']['info']]);
    //     }
    //     return view('siteV::Components.search_result')->with(compact('items', 'page_title', 'item_searchby', 'searchby', 'keywords', 'last_6_items', 'children'));



    //     /***** */
    //     $request->validate([
    //         'searchinput' => 'nullable|alpha_space',
    //     ]);
    //     $blogs = Blog::where('title', 'LIKE', '%' . $request->searchinput . '%')->get();
    //     $keywords = Keyword::where('title', 'LIKE', '%' . $request->searchinput . '%')->get();
    //     $subjects = Subject::where('title', 'LIKE', '%' . $request->searchinput . '%')->get();
    //     // $response = Blog::where('title', 'LIKE', '%' . $request->searchinput . '%')->get();
    //     return response()->json(['blogs' => $blogs, 'keywords' => $keywords, 'subjects' => $subjects]);
    //     // return $result = Blog::where('title', 'LIKE', '%' . $request->searchinput . '%');
    // }
    // public function sortCheck($items)
    // {
    //     if ((request()->get('sortby'))) {
    //         if (request()->sortby != 'null' || request()->sortby != "" || request()->sortby != null) {
    //             if (request()->sortby == 'subject') {
    //                 return $items = $items->withAggregate('subject', 'title')->orderby('subject_title', 'asc');
    //             } else {
    //                 return $items = $items->orderby(request()->sortby, request()->sorttype);
    //             }
    //         } else {
    //             return $items = $items->orderby('id', 'desc');
    //         }
    //     } else {
    //         return $items = $items->orderby('id', 'desc');
    //     }
    }

     
}
