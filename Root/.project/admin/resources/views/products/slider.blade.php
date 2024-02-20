@extends('views::products.index');

@section('slider')

<div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Dropzone</h4>
        </div>
    </div>
    <form class="dropzone dz-clickable" action="#" id="my-awesome-dropzone">
        
    <div class="dz-default dz-message"><span>Drop files here to upload</span></div></form>
</div>

    <div class="table-responsive" dir="rtl">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">عکس </th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            @foreach ($items as $item)
                <tbody>
                    <tr class="table-active">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><img src="/img/slider/{{ $item->name }}" style="width: 50px;height: 50px;"></td>
                        <td><a href="slider/{{ $item->id }}/edit" class="badge badge-primary">ویرایش</a></td>
                        <td>
                            <form action="slider/{{ $item->id }}/" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">حذف</button>
                            </form>
                        </td>
                        <td><button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Sloder')"
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
    <?php
    $folder = 'slider';
?>
@include('views::products.up')

@include('views::products.page')
@endsection
