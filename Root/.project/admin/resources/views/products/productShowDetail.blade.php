@extends('views::products.index');

@section('productShowDetail')
<div class="row">
    {{-- <div class="col:6"> --}}
<div class="pd-20 card-box mb-30" dir="rtl">
    <div class="table-responsive">
       {{-- @dd($items) --}}
        <div class="form-group">
             <label>نام محصول :</label>
             <br/>
             <label><h3>{{$items -> name}}</h3></label>
        </div>
        <div class="form-group">
            <label>توضیحات محصول  :</label>
            <br/>
            <label><h3>{{$items -> title}}</h3></label>
       </div>

       <div class="form-group">
        <label> دسته بندی محصول :</label>
        <br/>
        <label><h3>{{$items->category-> title}}</h3></label>
   </div>
   <div class="form-group">
    <label>کلمات کلیدی :</label>
    <br/>
    @foreach ($items->keywords as $it)
   <h3> {{$it -> name}}-</h3>
    @endforeach
    </div>

    <div class="form-group">
        <h2 class="card-title" style="color:chocolate">جدول نظرات</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ردیف </th>
                        <th> نام نظر دهنده </th>
                        <th> نظر </th>
                      
                        <th colspan="4">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                   {{-- @dd($items) --}}
                    @foreach ($items->comments as $item)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $item->sender_name }} </td>
                            <td> {{ $item->text }} </td>
                            {{-- <td> {{ $item->text }} </td> --}}

                            <td>
                                <form action="/ad/coment/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">حذف</button>
                                </form>
                            </td>
                            
                             <td><a href="/ad/coment/{{ $item->id }}" class="btn btn-info ">مشاهده</a></td>
                           <td><button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Coment')"
                                 class="btn btn-success btn-sm">

                                @if ($item->status == 1)
                                    فعال
                                @else
                                    غیرفعال
                                @endif
                                </a>
</p>
                            </td>
                            {{-- @dd($comments->child) --}}
                            @foreach ($item->child as $it)
                            <tr>
                                <td> --{{ $loop->iteration }} </td>
                                <td> {{ $it->sender_name }} </td>
                                <td> {{ $it->text }} </td>
                                {{-- <td> {{ $item->text }} </td> --}}

                                <td>
                                    <form action="/ad/coment/{{ $it->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">حذف</button>
                                    </form>
                                </td>
                                
                                 <td><a href="/ad/coment/{{ $it->id }}" class="btn btn-info ">مشاهده</a></td>
      
                                {{-- <td> <a href="{{ route('admin.blogs.user.edit' , ['user' => $user->id]) }} ">ویرایش</a> </td> --}}

                                {{-- <td onclick="console.log(1)" --}}
                               <td><button onclick="ajax_change_statue(event,{{$it->id}}, {{$it->status}}, 'Coment')"
                                     class="btn btn-success btn-sm">

                                    @if ($it->status == 1)
                                        فعال
                                    @else
                                        غیرفعال
                                    @endif
                                    </a>
</p>
                                </td>
                            @endforeach
                        </tr>
                       
                    @endforeach
                </tbody>
            </table>
        </div>
   
        </div>


            
          <a href="/ad/productShow">بازگشت</a>
        
        </table>
    </div>
</div>
@endsection
