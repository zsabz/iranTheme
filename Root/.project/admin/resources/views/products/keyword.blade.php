@extends('views::products.index');

@section('key')
<div class="pd-20 card-box mb-30" dir="rtl">
        <form action="key" method="post">
            @csrf
    <div class="row" >
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" placeholder="ورود کلمه کلیدیی">
    </div>

    <div class="col-md-2">
        <button class="badge badge-success">اضافه</button>
    </div>
    </div>
</form>
    {{-- <div class="clearfix mb-20">
        <div class="pull-left">
            <h4 class="text-blue h4">Contextual classes</h4>
            <p>
                Use classes
                <code>( .table-active, .table-success, .table-info,
                    .table-warning, .table-danger )</code>
                to color table rows or individual cells
            </p>
        </div>
        <div class="pull-right">
            <a href="#contextual-table" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
        </div>
    </div> --}}
    <br/>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">نام کلمه کلیدی</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col">ویرایش</th>
                    <th scope="col">حذف</th>
                </tr>
            </thead>
            @foreach ($Keywords as $item)        
            <tbody>
                <tr class="table-active">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> description}}</td>
                    
                    <td><a href="key/{{$item->id}}/edit" class="badge badge-primary">ویرایش</a></td>
                   
<td>
                    <form action="key/{{$item->id}}/" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">حذف</button>
                    </form>
</td>
<td><button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Keyword')"
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
    <div class="collapse collapse-box" id="contextual-table">
        <div class="code-box">
            <div class="clearfix">
                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#contextual-table-code"><i class="fa fa-clipboard"></i> Copy Code</a>
                <a href="#contextual-table" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
            </div>
            <pre><code class="xml copy-pre hljs" id="contextual-table-code">
<span class="hljs-tag">&lt;<span class="hljs-name">div</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-responsive"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">table</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table table-striped"</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-active"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-primary"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-secondary"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-success"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-danger"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-warning"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-info"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-light"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-name">tr</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"table-dark"</span>&gt;</span><span class="hljs-tag">&lt;<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">td</span>&gt;</span><span class="hljs-tag">&lt;/<span class="hljs-name">tr</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">tbody</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">table</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-name">div</span>&gt;</span>
        </code></pre>
        </div>
    </div>
</div>
@endsection
