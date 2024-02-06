@extends('views::products.component.layout');

@section('content')
  <p>صفحه ی ویرایش کاربران</p>
<form action="/ad/user/{{$item->id}}" method="post" dir="rtl">
    @csrf
    @method('PATCH')
    <div class="form-group row">
        <label class="col-sm-10 col-md-2 col-form-label">نوع یوزر</label><br/>
        
            <select name='role' class="custom-select col-md-12">
                <option value="">Choose...</option>                 
                <option value="admin" >admin</option>                 
                <option value="person">person</option>                 
                <option value="user">user</option>                 
            </select>
      
    </div>
<div class="row" >
<div class="col-md-6">
    <label>نام کاربری :</label>  <input class="form-control" name="name"  value="{{$item->name}}" type="text" placeholder={{$item->name}}>
  <label>ایمیل کاربری :</label>  <input class="form-control" name="email" value="{{$item->email}}" type="text" placeholder={{$item->email}}>
  <label>تلفن کاربری :</label>  <input class="form-control" name="phone" value="{{$item->phone}}" type="text" placeholder={{$item->phone}}>
</div>

</div>
<div class="col-sm-2">
<button class="badge badge-success">ویرایش</button>
</div>
</form>
        @endsection
