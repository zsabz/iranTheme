@extends('views::products.component.layout');

@section('content')
  
<form action="/ad/product/key/{{$keyword->id}}" method="post" dir="rtl">
    @csrf
    @method('PATCH')
<div class="row" >
<div class="col-md-10">
<input class="form-control" name="name" type="text" placeholder={{$keyword->name}}>
</div>

<div class="col-md-2">
<button class="badge badge-success">ویرایش</button>
</div>
</div>
</form>
        @endsection
