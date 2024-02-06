@extends('views::products.index');

@section('comment')
              
    <div class="card" dir="rtl">
        <div class="card-body">
            <h4 class="card-title">جدول نظرات</h4>
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
                        @if(Session()->has('message'))
                        <script>alert('حذف با موفقیت انجام شد')</script>
                     
                        {{-- <h1 style="color: rgb(158, 0, 32)">{{session()->get('message')}}</h1> --}}
                        @endif
                        @foreach ($comments as $item)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $item->sender_name }} </td>
                                <td> {{ $item->text }} </td>
                                {{-- <td> {{ $item->text }} </td> --}}
                                <td>
                                    <form action="coment/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return myDelete();" type="submit">حذف</button>
                                    </form>
                                </td>
                                
                                 <td><a href="coment/{{ $item->id }}" class="btn btn-info ">مشاهده</a></td>
                              
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
                                        <a class="btn btn-danger" onclick="return myFunction();" href="coment/{{ $it->id }}"><i class="fa fa-trash"></i></a> <a></a>
                                        <form action="coment/{{ $it->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" onclick="return myFunction();" type="submit">حذف</button>
                                        </form>
                                    </td>
                                    
                                     <td><a href="coment/{{ $it->id }}" class="btn btn-info ">مشاهده</a></td>
          
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
    </div>
    
{{-- @php
 $items=$comments;   
@endphp
                @include('admin.page')
            </div> --}}
         {{-- @include('admin.layouts.active') --}}
         @endsection
         {{-- <script>alert('حذف انجام شد ')</script> --}}
  
