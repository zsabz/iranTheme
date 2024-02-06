@extends('views::products.index');

@section('user')
<div class="pd-20 card-box mb-30" dir="rtl">
    <div class="table-responsive">
        <div class="form-group">
            <label>عکس :</label>
            <br/>
            <img src="/img/users/{{$user -> pic}}"/>
       </div> 
        <div class="form-group">
             <label>نام :</label>
             <br/>
             <label>{{$user -> name}}</label>
        </div>
        <div class="form-group">
            <label>تعداد کل محصولات فعال :</label>
            <br/>
            <label>{{$count}}
       </div></label> 
        <div class="form-group">
            <label>ایمیل کاربر :</label>
            <br/>
            <label>{{$user -> email}}</label>
       </div>

       <div class="form-group">
        <label>نقش کاربر :</label>
        <br/>
        <label>{{$user -> role}}</label>
   </div>
   <div class="form-group">
    <label> تلفن کاربر :</label>
    <br/>
    <label>{{$user -> phone}}</label>
</div>

@include('views::products.productSection');
 
          <a href="/ad/user">بازگشت</a>        
        </table>
    </div>
</div>
@endsection
