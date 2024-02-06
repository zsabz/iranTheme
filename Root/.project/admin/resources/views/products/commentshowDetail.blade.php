@extends('views::products.index');

<style>

  body
  {
    direction: rtl ;
    text-align: right;  
  }
  h3
  {
    font-family: 'b nazanin';
    color: yellowgreen;
  }


</style>
@section('commentshowDetail')

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card-body"  style="direction: rtl">
                  <h3> موضوع بلاگ : </h3>
                  {{-- @dd($product) --}}
                    <h4 class="card-title">{{ $product -> title }}</h4>
                  {{-- <p>موضوع : {{ $subjects -> title }}</p>  --}}
                  <h3> متن  بلاگ : </h3>
                   {{ $product -> text }}
                              {{ $comments->sender_name }} :
                                {{ $comments->comment }} 
                               <p onclick="ajax_change_statue(event,{{$comments->id}}, {{$comments->status}}, 'Comment')"
                                    class="btn btn-warning ">
                                    @if ($comments->status == 1)
                                        فعال
                                    @else
                                        غیرفعال
                                    @endif
                                    </a>
                                </p>
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
                  @foreach ($comments->child as $subitem)
                                <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $subitem->sender_name }} </td>
                          <td>    {{ $subitem->comment }} </td>
                                              <td>
                                    <form action="/admin/products/comment/{{ $subitem->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" type="submit">حذف</button>
                                    </form>
                                </td>
                                  <td><br><button onclick="ajax_change_statue(event,{{$subitem->id}}, {{$subitem->status}}, 'Comment')"
                                    class="btn btn-warning ">

                                    @if ($subitem->status == 1)
                                        فعال
                                    @else
                                        غیرفعال
                                    @endif
                                    </a>
</p>
                                </td>
                              
                                </tr>

               @endforeach
                    </tbody>
                </table>

                  </div>
    </div>
    <div class="col">
              
                <img src="/img/product/{{ $product -> image }}" style="width: 80%" >
               
    </div>
  </div>

                
                  @endsection