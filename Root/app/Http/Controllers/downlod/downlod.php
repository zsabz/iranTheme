<?php

namespace App\Http\Controllers\downlod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\downlod\Validation;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
class downlod extends Controller
{
    private $validation ;
    function __construct(Validation $validation){
        $this->validation= $validation;
    }
   function index(Request $r){
       if($this->validation->is_belongs_to_user($r->payId) &&  $this->validation->is_valid_pay($r->payId) ){
            $product = Product::find($r->product)->downlodeLink;
           return  Storage::download($product);
    }
    //   return back();
   }
}
