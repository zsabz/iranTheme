<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Store;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    function index(){
        $items = User::get();  
        // dd($items);
        return view('views::products/user')->with(compact('items'));
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
