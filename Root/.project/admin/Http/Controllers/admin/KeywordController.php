<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Models\Keyword;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorekeywordRequest;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\UpdatekeywordRequest;
class KeywordController extends Controller
{
    use SiteTraits;
    public function index()
    {
        // dd('rr');
        $Keywords= Keyword :: paginate(5);
        // dd($Keywords);
        // return view('views::products.keyword')->with(compact('Keywords'));
        return $this->view('views::products.keyword', true)->with(compact('Keywords')); 

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
   
      public function store(StorekeywordRequest $request)
    {
            $items=Keyword::create([
            'name'=>$request->title,            
        ]);
        return back();
        // return redirect('admin/blogs/subject');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keyword =  Keyword::where('id',$id)->first();
        // dd($keyword);
        return view('views::products.editkey')->with(compact('keyword'));
        
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
        // dd($request->all());
            $key = Keyword::where('id', $id)->first();
            $key->update($request->all());
            // dd($key);
             return redirect('/ad/product/key');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)
    {
        //   dd("12");
        $Keyword = Keyword::findOrFail($id);
        $Keyword->delete();
        return back();
        //
    }
}
