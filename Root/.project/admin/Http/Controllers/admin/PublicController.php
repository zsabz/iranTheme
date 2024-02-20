<?php
namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\Store;
use Admin\Models\Product;
use Admin\Models\Category;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    use SiteTraits;
    function index(){
        
        return $this->view('views::dashboard', true);

    }
 
    public function active(Request $request)
    {
        
        // dd('kkk');
        $model = app()->make('\Admin\Models\\'.$request->model);
        $model = $model::find($request->id);
        // dd($model);

        $txt= 'غیرفعال';
        if ($model->status == 0)
        {
            $model->status = 1;
            $txt= 'فعال';
        }else{
            $model->status = 0;
        }
        $model->update();
        
        return response()->json(['status' => 200, 'message' => 'عملیات مورد نظر با موفقیت انجام شد!', 'txt' => $txt]);
// `email_verified_at`;
    }

  public function upload(Request $request)
    {
        // dd($request->all());
        // $model = app()->make('\App\Models\\'.$request->model);
        // $model = $model::find($request->id);
        // dd($model);


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
