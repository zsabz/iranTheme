@extends('views::products.index');

@section('category')
<div class="pd-20 card-box mb-30">
<form action='addCategory' method='post' dir="rtl">
@csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">نوع دسته بندی</label>
            <div class="col-sm-12 col-md-10">
                <select name='parent_id' class="custom-select col-12">
                    <option value="0">دسته بندی والد</option>
                    @foreach ($items as $item)                
                    <option value={{$item->id}}>{{$item->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">نام و عنوان دسته بندی</label>
            <div class="col-sm-12 col-md-10">
                <input name='title' class="form-control" placeholder="Search Here" type="search">
            </div>
        </div>
        
        <button type="submit" class="text-lg btn btn-success px-5 m-4">ثبت</button>
</form>
</div>
<br/>
<div class="hero__search__form d-none d-md-block position-relative">
  

<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">دسته بندی محصولات</h4>
            {{-- <p>Add class <code>.table</code></p> --}}
        </div>
    </div>

  


    <div class="table-responsive" dir="rtl">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام کلمه کلیدی</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            @foreach ($items as $item)        
            <tbody>
                <tr class="table table-striped">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$item -> title}}</td>
                    <td><a href="addCategory/{{$item->id}}/edit" class="badge badge-primary px-4">ویرایش</a></td>
                    <td>
                    <form action="addCategory/{{$item->id}}/" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="badge badge-danger px-4" type="submit">حذف</button>
                    </form>
                    </td>
                    <td><button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Category')"
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
                        @foreach ($item->child as $subitem)
                        <tr>
                        <th scope="row">--{{ $loop->iteration }}</th>
                        <td>{{$subitem -> title}}</td>
                        <td><a href="addCategory/{{$subitem->id}}/edit" class="badge badge-primary px-4">ویرایش</a></td>
                        <td>
                        <form action="addCategory/{{$subitem->id}}/" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="badge btn-danger px-4" type="submit">حذف</button>
                        </form>
                    </td>
                    <td><button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Category')"
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
                
                
            </tbody>
            @endforeach
            @endforeach
        </table>
    </div>
</div>

@include('views::products.page')
@endsection
