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
                        <li><a target='_blanket' href="/" class="active">صفحه ی نخست</a></li>
                        <li><a target='_blanket' href="/shop">فروشگاه</a></li>
                        <li><a target='_blanket' href="/blog">وبلاگ</a></li>
                    </ul>
                </li>

                 <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-table"></span><span class="mtext">محصولات من</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/ad/addProduct">افزودن محصول </a></li>
                        <li><a href="/ad/productShow">لیست محصولات منتشر شده</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">فرم</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/ad/addCategory">دسته بندی</a></li>
                        <li><a href="/ad/product/key"> کلمات کلیدی</a></li>
                        <li><a href="/ad/user">کاربران</a></li>
                        <li><a href="/ad/coment">نظرات</a></li>
                        <li><a href="/ad/productShow">محصولات</a></li>
                        <li><a href="/ad/slider">اسلایدر</a></li>
                    </ul>
                </li>
               
                <li>
                    <a href="calendar.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-archive"></span><span class="mtext"> UI Elements </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li>
                            <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                        </li>
                        <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                        <li><a href="ui-notification.html">Notification</a></li>
                        <li><a href="ui-timeline.html">Timeline</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-list-group.html">List group</a></li>
                        <li><a href="ui-range-slider.html">Range slider</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-command"></span><span class="mtext">Icons</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
                        <li><a href="font-awesome.html">FontAwesome Icons</a></li>
                        <li><a href="foundation.html">Foundation Icons</a></li>
                        <li><a href="ionicons.html">Ionicons Icons</a></li>
                        <li><a href="themify.html">Themify Icons</a></li>
                        <li><a href="custom-icon.html">Custom Icons</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">Charts</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="highchart.html">Highchart</a></li>
                        <li><a href="knob-chart.html">jQuery Knob</a></li>
                        <li><a href="jvectormap.html">jvectormap</a></li>
                        <li><a href="apexcharts.html">Apexcharts</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-file-earmark-text"></span><span class="mtext">Additional Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="video-player.html">Video Player</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="reset-password.html">Reset Password</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-bug"></span><span class="mtext">Error Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="400.html">400</a></li>
                        <li><a href="403.html">403</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="500.html">500</a></li>
                        <li><a href="503.html">503</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-back"></span><span class="mtext">Extra Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="blank.html">Blank</a></li>
                        <li><a href="contact-directory.html">Contact Directory</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="product-detail.html">Product Detail</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="pricing-table.html">Pricing Tables</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-hdd-stack"></span><span class="mtext">Multi Level Menu</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-option="off">
                                <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="javascript:;">Level 2</a></li>
                                <li><a href="javascript:;">Level 2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-diagram-3"></span><span class="mtext">Sitemap</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="invoice.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Invoice</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle" data-option="off">
                        <span class="micon bi bi-file-pdf"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-layout-text-window-reverse"></span>
                        <span class="mtext">Landing Page
                            {{-- <img src="vendors/images/coming-soon.png" alt="" width="25" class="mCS_img_loaded"></span> --}}
                    </a>
                </li>
            </ul>
        </div>
    </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 71px; max-height: 275px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
</div>


@endsection