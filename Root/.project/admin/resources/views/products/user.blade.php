@extends('views::products.index');

@section('user')
<div dir="rtl">
<form action='user' method='post' class="pd-20 card-box mb-30" dir="rtl">
@csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">نوع یوزر</label>
            <div class="col-sm-12 col-md-10">
                <select name='role' class="custom-select col-12">
                    <option value="">Choose...</option>                 
                    <option value="">admin</option>                 
                    <option value="">person</option>                 
                    <option value="">user</option>                 
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">نام</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="name" type="text" placeholder="نام">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">ایمیل</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="email" type="text" placeholder="ایمیل">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">رمز</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="password" value="password" type="password">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">تلفن</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="phone" type="text" placeholder="تلفن">
            </div>
        </div>

        

        <button type="submit" class="text-lg btn btn-success px-5 m-4">ثبت</button>
</form>


<br/>
    <div class="table-responsive pd-20 card-box mb-30" >
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام کاربر</th>
                    <th scope="col">ایمیل کاربر</th>
                    <th scope="col">نقش کاربر</th>
                    {{-- <th scope="col">رمز کاربر</th> --}}
                    <th scope="col">تعدا کل محصولات کاربر</th>
                    <th scope="col">تلفن کاربر</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            @foreach ($items as $item)        
            <tbody>
                <tr class="table-active">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> email}}</td>
                    <td>{{$item -> role}}</td>
                    <td>{{$item -> products_count}}</td>
                    {{-- <td>{{$item -> password}}</td> --}}
                    <td>{{$item -> phone}}</td>
                    <td><a href="user/{{$item->id}}/edit" class="badge badge-primary">ویرایش</a></td>
                    <td><a href="user/{{$item->id}}" class="badge badge-warning">مشاهده</a></td>
                    {{-- <td> --}}
                    {{-- <form action="user/{{$item->id}}/" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="badge badge-danger" type="submit">حذف</button>
                    </form> --}}
                    {{-- </td> --}}
                    <td><button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'User')"
                        class="badge badge-success">

                       @if ($item->status == 1)
                           فعال
                       @else
                           غیرفعال
                       @endif
                       </a>
</p>
                   </td>
                </tr>
                      
            @endforeach
        </table>
    </div>
</div>

@include('views::products.page')
@endsection
