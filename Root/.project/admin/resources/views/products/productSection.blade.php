<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">محصولات</h4>
        </div>
    </div>


    <div class="table-responsive" dir="rtl">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام محصول  </th>
                    <th scope="col">دسته بندی</th>
                    <th scope="col">نام کاربر </th>
                    <th scope="col">کلمات کلیدی</th>
                    <th scope="col">کامنت ها</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            {{-- @dd($items[0]->user) --}}
            @if(Session()->has('message'))
            <script>alert('حذف با موفقیت انجام شد')</script>
            @endif
            @foreach ($items as $item)        
            <tbody>
                <tr class="table table-striped">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$item -> name}}</td>
                    <td>{{$item->category -> title}}</td>
                    <td>{{$item->user -> name}}</td>
                    <td>
                        @foreach ($item->keywords as $it)
                        {{$it -> name}}-
                        @endforeach
                    </td>
                    <td>
                        @foreach ($item->comments as $it)
                       <p class="mb-0 comment-td"> - {{$it -> text}}</p>
                        @endforeach
                    </td>
                    <td><a href="/ad/product/{{$item->id}}/edit" class="badge badge-primary px-4">ویرایش</a></td>
                    <td>
                    <form action="/ad/product/{{$item->id}}/" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="badge badge-danger px-4" type="submit">حذف</button>
                    </form>
                    </td>
                    <td><a href="/ad/product/{{$item->id}}" class="badge badge-warning">مشاهده</a></td>
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
        </table>
    </div>
</div>