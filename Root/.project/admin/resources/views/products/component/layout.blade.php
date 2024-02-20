<?php 
use Illuminate\Support\Facades\Auth;
 $user = Auth::user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


        @yield('head')


    <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="/vendors/styles/icon-font.min.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="/src/plugins/datatables/css/responsive.bootstrap4.min.css"
    />
    <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css" />

    
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
    ></script>
    <script
        async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here">
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <!-- <span class="badge notification-active"></span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside" style="max-height: 0px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="" class="mCS_img_loaded">
                                        <h3>John Doe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo1.jpg" alt="" class="mCS_img_loaded">
                                        <h3>Lea R. Frith</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo2.jpg" alt="" class="mCS_img_loaded">
                                        <h3>Erik L. Richards</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo3.jpg" alt="" class="mCS_img_loaded">
                                        <h3>John Doe</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/photo4.jpg" alt="" class="mCS_img_loaded">
                                        <h3>Renee I. Hansen</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="vendors/images/img.jpg" alt="" class="mCS_img_loaded">
                                        <h3>Vicki M. Coleman</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed...
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="vendors/images/photo1.jpg" alt="">
                        </span>
                        <span class="user-name"> {{$user->name}} </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="vendors/images/logo.png" alt="" >
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
                            <li><a href="./addProduct">افزودن محصول </a></li>
                            <li><a href="./listProduct">لیست محصولات منتشر شده</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-option="off">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Forms</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="/admin/addCategory"> اظافه کردن کتگوری</a></li>
                         
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
                                <img src="vendors/images/coming-soon.png" alt="" width="25" class="mCS_img_loaded"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 71px; max-height: 275px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
    </div>






        <div class="main-container">
            <div  class="pd-20 card-box mb-30">
            @if(session('success'))
            
<div class='alert alert-success '> {{session('success')}}</div>
@endif

@if(session('error'))
<div class='alert alert-danger '> {{session('error')}}</div>
@endif

@if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
        <li class='alert alert-danger'>{{$error}}</li>
    @endforeach
    </ul>
@endif
                @yield('content')
            </div>
        </div>




    <script async  defer="defer"  src="/vendors/scripts/buttons.js"></script>
    <script src="/vendors/scripts/core.js"></script>
    <script src="/vendors/scripts/script.min.js"></script>
    <script src="/vendors/scripts/process.js"></script>
    <script src="/vendors/scripts/layout-settings.js"></script>
    <script src="/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="/vendors/scripts/dashboard3.js"></script>
    <script src='/js/fdsaretrr.js'><script>
</body>
</html>



