@extends('views::products.index');

@section('slider')



<div class="col-md-12">
    <h1>Laravel 10 Drag and Drop File Upload with Dropzone JS - ItSolutionStuff.com</h1>

    <form action="" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
        @csrf
        <div>
            <h4>Upload Multiple Image By Click On Box</h4>
        </div>
    </form>
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
                    </tr>

                </tbody>
            @endforeach
        </table>
    </div>
    {{-- <script> --}}
        <script type="text/javascript">
  
            Dropzone.autoDiscover = false;
      
            var dropzone = new Dropzone('#image-upload', {
                  thumbnailWidth: 200,
                  maxFilesize: 1,
                  acceptedFiles: ".jpeg,.jpg,.png,.gif"
                });
      
    </script>
    </body>
@endsection
