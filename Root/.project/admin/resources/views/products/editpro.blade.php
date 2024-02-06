@extends('views::products.index');

@section('addpro')
    <form enctype="multipart/form-data" method="post" class="pd-20 card-box mb-30" action="/ad/addProduct/{{$item->id}}">
        @csrf
        @method('PATCH')
        <div dir='rtl' class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label> نام تم</label>
                    <input name='name' type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>عنوان تم</label>
                    {{-- @dd() --}}
                    <input name='title' type="text" class="form-control" value={{ $item->name }}>
                </div>
            </div>
        </div>


        <div dir='rtl' class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
            <label>قیمت تم</label>
            <input name='price' class="form-control" min='50000' value={{ number_format($item->price, 3, ',', ',') }}>
                 </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>نام کابر </label>
                    <select name="athers_id" class="custom-select col-12">
                        @foreach ($users as $user)
                        
                        <option class="form-control" value="{{$user->id}}" name ="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                 </div>
            </div>
        </div>



        <div class="form-group">
            <label> تصویر شاخص </label>
            <div class="custom-file">
                <input name='img' type="file" class="custom-file-input">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>

        <br>
        <br>
        <br>
        <hr>

        <p class='h2'>دسته بندی ها</p>



        {{-- <div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">بر اساس تکنولوژی :</label>
								<div class="col-sm-12 col-md-10">
									<select name='cat2' class="custom-select col-12">
										<option value=''>Choose...</option>
								    	 @foreach ($category as $cat)
                                                @if ($cat['type'] == 'tec')
										             <option value={{$cat['id']}}>{{$cat['title']}}</option>
                                                @endif
                                         @endforeach
									</select>
								</div>
							</div> --}}

        <div class="form-group row" style="direction: rtl">
            <label class="col-sm-12 col-md-2 col-form-label">انتخاب دسته بندی</label>
            <div class="col-sm-12 col-md-10">
                <select name="cat1" class="custom-select col-12">
                    <option value='' disabled>Choose...</option>
                    @foreach ($items as $parent_cat)
                        <option value={{ $parent_cat['id'] }} disabled>{{ $parent_cat['title'] }}</option>
                        @foreach ($parent_cat->child as $item)
                            --<option class="ps-3" value={{ $item['id'] }}>{{ $item['title'] }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            {{-- @foreach ($items->child as $item)
                                <option value={{$item['id']}}>{{$item['title']}}</option>
                                    
                                @endforeach --}}
        </div>
        <br>
        <br>
        <br>
        <hr>

        <p class='h2'>افزودن پیش نمایش</p>


        <div dir="rtl" class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>عنوان صفحه</label>
                    <input name="pre_title1" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>تصویر محصول</label>
                    <input name="pre_img1" type="file" class="form-control">
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <label>فایل صفحه</label>
                    <input name="pre_file1" type="file" class="form-control">
                </div>
            </div>

            <div class="col-md-2 col-sm-12">
                <button id="add_preview_row" type="button" class="btn btn-success">+</button>
                <input type="hidden" id ='preview_row_number' name="preview_row_number" value="1">
            </div>
        </div>

        <div id='preview_append'></div>


        <br>
        <br>
        <br>
        <br>
        <hr>



        <div class="custom-control custom-checkbox mb-5">
            <input name='status' type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1"> استاندار های لازم برای این تم رعایت شده</label>
        </div>


        <button type="submit" class="btn btn-success px-5 m-4">ثبت</button>
    </form>
@endsection
