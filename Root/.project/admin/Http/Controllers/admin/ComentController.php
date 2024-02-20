<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\Store;
use Admin\Models\Coment;
use Admin\Models\Product;


class ComentController extends Controller
{
    use SiteTraits;
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('ii');
        $comments = Coment::where('parent_id', 0)->with('child')->paginate(5);
    // dd($comments);
        return $this->view('views::products.commentshow', true)->with(compact('comments'));
        // return view('admin.commentshow')->with(compact('comments'));

    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        // dd($id);
        //  $blog_id = Comment::select('blog_id')->where('id', $id)->first();
         $comments=Coment::where('id',$id)->with('child')->first();
        //  dd($comments);
        $product = Product::with('comments')->find($comments->products_id);
        // dd($product);
        $comments->status = 1;
        $comments->save();
        foreach ($comments->child as $value) {
        //    dd($value->approved);
            $value->status = 1;
            $value->save();
        }
    return $this->view('views::products.commentshowDetail', true)   ->with(compact('comments','product'));

    
            // $blog=Blog::with('comment.replies','keywords')->find($id);
            // return view ('admin.showblog')
            // ->with(compact('blog'))
        ;
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)
    {
        // @dd('55');
        $comment = Coment::findOrFail($id);
        $parent=Coment::find($id);
        // dd($parent->parent_id);
        if($parent->parent_id == 0 )
        {
            // @dd($parent->id);
            Coment::where('parent_id', $parent->id)->delete();
            $comment->delete();
            // echo "nooo";
        }
        else
        {
                     $comment->delete();
        }
        return redirect()->back()->with('message', 'حذف با موفقیت انجام شد');
        //
    }

     public function active(Request $request)
    {
        
        $com = Comment::find($request->id);

        $txt= 'غیرفعال';
        if ($com->status == 0)
        {
            $com->status = 1;
            $txt= 'فعال';
        }else{
            $com->status = 0;
        }
        $com->update();
        
        return response()->json(['status' => 200, 'message' => 'عملیات مورد نظر با موفقیت انجام شد!', 'txt' => $txt]);
    }
}
