<?php

namespace App\Http\Controllers\downlod;
use App\Models\Pay;
use Illuminate\Support\Facades\Auth;

class Validation{
    function is_valid_pay($id){
        $pay = Pay::find($id);
        if($pay->status ==1){
            return true;
        }
        return false;
    }

    function is_belongs_to_user($id){
        $pay = Pay::find($id);
        if($pay->user_id == Auth::user()->id){
            return true;
        }
        return false;
    }

    function test(){
        dd(1254);
    }
}