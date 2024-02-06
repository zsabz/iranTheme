@extends('admin.component.layout');

@section('content')

<form action='addCategory' method='post'>
@csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">نوع دسته بندی</label>
            <div class="col-sm-12 col-md-10">
                <select name='type' class="custom-select col-12">
                    <option value="">Choose...</option>
                    <option value="tec">تکنولوژی</option>
                    <option value="type">محتوا</option>
                 
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
@endsection
