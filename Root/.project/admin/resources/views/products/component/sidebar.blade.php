@extends('views::master');

@section('sidebar')
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            {{-- <img src="vendors/images/logo.png" alt="" > --}}
        <!-- صفحه ی نخست -->
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll mCustomScrollbar _mCS_3"><div id="mCSB_3" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
        <div class="sidebar-menu icon-style-1 icon-list-style-1">
            <ul id="accordion-menu">
                <li class="dropdown show">
                    <a href="javascript:;" class="dropdown-toggle" data-option="on">
                        <span class="micon bi bi-house"></span><span class="mtext">بازگشت به سایت</span>
                    </a>
                    <ul class="submenu" style="display: block;">
                        <li><a target='_blanket' href="/ad/dash" class="active">صفحه ی نخست</a></li>
                        <li><a target='_blanket' href="/shop">فروشگاه</a></li>
                        <li><a target='_blanket' href="/blog">وبلاگ</a></li>
                    </ul>
                </li>

                 <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-table"></span><span class="mtext">بلاگ  </span>
                    </a>
                    <ul class="submenu">
                    
                        <li><a href="/ad/productShow">لیست محصولات منتشر شده</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">محصولات</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/ad/addProduct">افزودن محصول </a></li>
                        <li><a href="/ad/productShow">نمایش محصولات</a></li>
                        <li><a href="/ad/addCategory">دسته بندی</a></li>
                        <li><a href="/ad/product/key"> کلمات کلیدی</a></li>
                        <li><a href="/ad/user">کاربران</a></li>
                        <li><a href="/ad/coment">نظرات</a></li>
                        <li><a href="/ad/slider">اسلایدر</a></li>
                    </ul>
                </li>
               
      
            </ul>
        </div>
    </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 71px; max-height: 275px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
</div>


@endsection