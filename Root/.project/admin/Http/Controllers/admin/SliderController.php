<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Store;
use Admin\Models\Slider;
use Admin\Http\Controllers\Traits\SiteTraits;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    use SiteTraits;

    function index(){
        $items = Slider::get();  
        return $this->view('views::products/slider')->with(compact('items'));
    }

    function store(Store $r){
        
        $r->validate([
                'name' => 'required|string|max:20',                       
        ]);
        $r=User::create([
            'name'=>$r->name,                    
        ]);
    
        return back()->with('success','عکس اضافه شد');
        }
        public function edit($id)
        {
            // dd(111);
            $item =  Slider::where('id',$id)->first();
            // dd($item);
            return view('views::products/editslider')->with(compact('item')); 
        }

        public function update(Request $request, $id)
    {
        // dd($request->role);
            $user = Slider::where('id', $id)->first();
            $user->update($request->all());
            // dd($user);
           
             return redirect('/ad/user');
    }

        public function destroy($id)
        {
            $cat = User::findOrFail($id);
            $cat->delete();
        }

        public function upload(Request $request)
        {    
            dd('ySPs');
             $image = $request->file('file');
             // dd($image);
              $imageName = time() . '.' . $image->extension();
              $image->move(public_path('img/'.$request->folder), $imageName);
            
            $images = session()->has('images') ? session()->get('images') : [];
            $images[] = $imageName;
    
            session()->forget('images');
            session()->put('images', $images);
    
                // dd(session()->get('test'));
            return response()->json(['imgName' => $imageName]);
        }
    
        
}
