@extends('views::products.index');

@section('dashboard')
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="title pb-20">
        <h2 class="h3 mb-0">آمار های کلی</h2>
    </div>

    <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{$countUser}}</div>
                        <div class="font-14 text-secondary weight-500">
                            تعداد کاربران
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);">
                            <img src="/img/icons/team.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{$countProd}}</div>
                        <div class="font-14 text-secondary weight-500">
                            تعداد محصولات
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#ff5b5b" style="color: rgb(255, 91, 91);">
                            <img src="/img/icons/pro.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{$countcom}}</div>
                        <div class="font-14 text-secondary weight-500">
                            تعداد نظرات
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <img src="/img/icons/comments.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">{{number_format($total)}}</div>
                        <div class="font-14 text-secondary weight-500">کل درامد</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);">
                            <img src="/img/icons/price.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-4 col-md-6 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px" dir="rtl">
                <div class=" justify-content-between">
                    <div class="h5 mb-0">کاربران</div>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown" style="color: rgb(27, 49, 51);">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="/ad/user"><i class="dw dw-eye"></i> View</a>
                            {{-- <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a> --}}
                            {{-- <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a> --}}
                        </div>
                    </div>
                </div>
                <div class="user-list">
                    <ul>
                        @foreach ($users as $user)
                            
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="name-avatar d-flex align-items-center pr-2">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img src="/img/users/{{$user->pic}}" class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                </div>
                                <div class="txt">
                                    <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7" style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                    <div class="font-14 weight-600">{{$user->name}}</div>
                                    <div class="font-12 weight-500" data-color="#b2b1b6" style="color: rgb(178, 177, 182);">
                                        Pediatrician
                                    </div>
                                </div>
                            </div>
                            <div class="cta flex-shrink-0">
                                <button onclick="ajax_change_statue(event,{{$user->id}}, {{$user->status}}, 'User')"
                                class="badge badge-success">
        
                               @if ($user->status == 1)
                                   فعال
                               @else
                                   غیرفعال
                               @endif
                            </div>
                        </li>
                        @endforeach
                   
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px" dir="rtl">
                <div class=" justify-content-between">
                    <div class="h5 mb-0">نظرات</div>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown" style="color: rgb(27, 49, 51);">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="/ad/coment"><i class="dw dw-eye"></i> View</a>
                            {{-- <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a> --}}
                            {{-- <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a> --}}
                        </div>
                    </div>
                </div>
                <div class="user-list">
                    <ul>
                        @foreach ($coments as $item)
                            
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="name-avatar d-flex align-items-center pr-2">
                                <div class="txt">
                                    <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7" style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                    <div class="font-14 weight-600">{{$item->text}}</div>
                                    <div class="font-12 weight-500" data-color="#b2b1b6" style="color: rgb(178, 177, 182);">
                                        Pediatrician
                                    </div>
                                </div>
                            </div>
                            <div class="cta flex-shrink-0">
                                <button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Coment')"
                                class="badge badge-success">
        
                               @if ($user->status == 1)
                                   فعال
                               @else
                                   غیرفعال
                               @endif
                            </div>
                        </li>
                        @endforeach
                   
                    </ul>
                </div>
            </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px" dir="rtl">
                <div class=" justify-content-between">
                    <div class="h5 mb-0">محصولات</div>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" data-color="#1b3133" href="#" role="button" data-toggle="dropdown" style="color: rgb(27, 49, 51);">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="/ad/productShow"><i class="dw dw-eye"></i> View</a>
                            {{-- <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a> --}}
                            {{-- <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a> --}}
                        </div>
                    </div>
                </div>
                <div class="user-list">
                    <ul>
                        @foreach ($products as $item)
                            
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="name-avatar d-flex align-items-center pr-2">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img src="/img/products/{{$item->img}}" class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                </div>
                                <div class="txt">
                                    <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5" data-color="#265ed7" style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                    <div class="font-14 weight-600">{{$item->name}}</div>
                                    <div class="font-12 weight-500" data-color="#b2b1b6" style="color: rgb(178, 177, 182);">
                                        Pediatrician
                                    </div>
                                </div>
                            </div>
                            <div class="cta flex-shrink-0">
                                <button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Product')"
                                class="badge badge-success">
        
                               @if ($item->status == 1)
                                   فعال
                               @else
                                   غیرفعال
                               @endif
                            </div>
                        </li>
                        @endforeach
                   
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">  محصولات تایید نشده </div>
        <div id="DataTables_Table_0_wrapper" dir="rtl" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="data-table table nowrap dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid">
            <thead>
                <tr role="row"><th class="table-plus sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">نام محصول</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending">قیمت</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Weight: activate to sort column ascending">نام کاربر</th></tr>
            </thead>
            <tbody>
                
            <tr role="row" class="odd">@foreach ($pro as $item)
                <td class="table-plus sorting_1" tabindex="0">
                   <div class="name-avatar d-flex align-items-center">
                       <div class="avatar mr-2 flex-shrink-0">
                           <img src="vendors/images/photo8.jpg" class="border-radius-100 shadow" width="40" height="40" alt="">
                       </div>
                       <div class="txt">
                           <div class="weight-600">{{$item->title}}</div>
                       </div>
                   </div>
               </td>
               <td>{{number_format($item->price)}}</td>
               <td>{{$item->user->name}}</td>
            
               <td>
                <button onclick="ajax_change_statue(event,{{$item->id}}, {{$item->status}}, 'Product')"
                    class="badge badge-success">

                   @if ($item->status == 1)
                       فعال
                   @else
                       غیرفعال
                   @endif
               </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i class="ion-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i class="ion-chevron-right"></i></a></li></ul></div></div></div></div>
    </div>

  
</div>
      
@endsection
