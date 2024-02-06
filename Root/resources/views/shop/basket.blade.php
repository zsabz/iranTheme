<?php  
use Illuminate\Support\Facades\Route;
?>

@extends('shop.leyout');

@section('content')

@if($products == null)
<div class='h2 pt-5 text-center' style='height:50%'>

سبد خرید شما خالی است
</div>
@else
    {{$sum=0}}
    @foreach ($products as $product)

        <div>
            {{$product->name}} {{$product->price}}
            {{$sum +=$product->price}}
        </div>
        
    @endforeach
    <div>جمع کل : {{$sum}}</div>
<?php
$orderId = 145;
$url = url("/pay/$sum/$orderId ");
$signedUrl = URL::signedRoute('pay', ['amount' => $sum, 'orderId' => $orderId]);

?>

    <a href='{{$signedUrl}}' class='btnj btn-success'> رفتن به درگاه پرداخت</a>
    <br>
    <a href='/basketforget' class='btn btn-info'>خالی کردن سبد خرید</a>
    @endif 

@endsection