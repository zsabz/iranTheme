@if ($items->lastPage() > 1)
<div class="row" dir="rtl"><div class="col-sm-12 col-md-5"></div>
<div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
        <ul class="pagination">
        
            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                <a href="{{ $items->previousPageUrl() }}" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">
                    <i class="ion-chevron-right"></i>
                </a>
            </li>

     {{-- <div class="btn-group" role="group" aria-label="Basic example">
         <a class="btn btn-primary mx-2 btn-primary" href="{{ $items->previousPageUrl() }}">قبلی</a> --}}
         @for ($i = 1; $i <= $items->lastPage(); $i++)
            @if ($i == ($items->currentPage() - 1) || $i == ($items->currentPage() + 1) || $i == ($items->currentPage()))
            
            
            <li class="paginate_button page-item {{($i == $items->currentPage()) ? 'active' : ''}}">
            <a aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link" href="{{ $items->url($i) }}">{{ $i }} </a> 
                </a>
            </li>
            
            {{-- <a class="mx-1 rounded btn btn-{{ $i == $items->currentPage() ? 'primary' : 'secondary' }}"
                 href="{{ $items->url($i) }}">{{ $i }}</a> --}}
            @endif
         @endfor
         {{-- <a class="btn btn-primary mx-2" href="{{ $items->nextPageUrl() }}">بعدی</a> --}}
         <a href="{{ $items->nextPageUrl() }}" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">
            <i class="ion-chevron-left"></i>
        </a>
     </div>
 @endif
