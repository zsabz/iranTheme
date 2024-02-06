@extends('views::products.component.layout');

@section('content')
  
<form action="/ad/addCategory/{{$item->id}}" method="post" dir="rtl">
    @csrf
    @method('PATCH')
    <div class="form-group row" dir="rtl">
        @if($item->parent_id != 0)
        <label class="col-sm-12 col-md-2 col-form-label">نوع دسته بندی</label>
        <div class="col-sm-6 col-md-6">
            <select name='parent_id' class="custom-select col-12">
                <option value="">Choose...</option>
                @foreach ($items as $i)
                    
                <option value={{$i->id}}  @if ($item->parent_id == $i->id) selected="selected" @endif 
                    id={{ $i->id }}>{{$i->title}}</option>
                @endforeach
               
             
            </select>
        </div>
    </div>

<div class="row" >
<div class="col-md-10">
<input class="form-control" name="title" type="text" placeholder="{{$item->title}} ">    
@else
<input class="form-control" name="title" type="text" placeholder="{{$item->title}} ">    
@endif
{{-- <input class="form-control" name="parent_id" type="text" placeholder=""> --}}
</div>
<div class="col-md-2">
<button class="badge badge-success">ویرایش</button>
</div>
</div>
</form>
        @endsection
