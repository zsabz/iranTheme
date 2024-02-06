@extends('views::products.component.layout');

@section('content')
  
<form action="/ad/product/slider/{{$item->id}}" method="post" dir="rtl">
    @csrf
    @method('PATCH')
<div class="row" >
<div class="col-md-10">
<input class="form-control" name="name" type="text" placeholder={{$item->name}}>
</div>

<div class="col-md-2">
<button class="badge badge-success">ویرایش</button>
</div>
</div>
</form>
        @endsection
