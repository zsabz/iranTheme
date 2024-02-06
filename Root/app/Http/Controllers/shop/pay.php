<?php
namespace App\Http\Controllers\shop;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use App\Models\Pay as pays;
use Illuminate\Support\Facades\Auth;
class pay extends Controller
{
    function _constructor(){
        $this->middleware('auth');
    }
    function GetBasketData(){
        $basketInfo =Session::get('basket');
        return $basketInfo;
    }
    function insertOrder($amount){
        // dd(auth::user()->id);
        $productIds =$this->GetBasketData();
        $jsonProductIds = json_encode($productIds);
        $pay = new Pays();
        $pay->product_id = $jsonProductIds;
        $pay->user_id = auth::user()->id;
        $pay->status= 0;
        $pay->authority= 0;
        $pay->amount=$amount;
        $pay->save();
        return $pay->id;
    }
   function index($amount){
    $invoice = new Invoice();
    // $invoice->amount(request()->mount);
    $pay_id=$this->insertOrder($amount);

    $invoice->amount($amount);
    $payment = Payment::callbackUrl(route('payresult',"id=$pay_id"));
    $payment->purchase($invoice, function ($driver, $transactionId) {});
    $payment->config('description', 'خرید کفش و صندل از تزار مارکت');
    return $payment->pay()->render();
   }


   function result(request $r){
    if($r->Status =='OK'){
        $payRecord=pays::find($r->id);
        $payRecord->status =1;
        Session::forget('basket');
    }
    echo $r->id;
   }
}
