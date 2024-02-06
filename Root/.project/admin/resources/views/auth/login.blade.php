<head>
    @include('views::assets.style')
</head>
<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <img src="/vendors/images/deskapp-logo.svg" alt="">
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="/vendors/images/login-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To DeskApp</h2>
                        </div>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            @method('post')
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn">
                                        <input type="radio" name="options" id="admin">
                                        <div class="icon">
                                            <img src="/vendors/images/briefcase.svg" class="svg" alt="">
                                        </div>
                                        <span>I'm</span>
                                        Manager
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="options" id="user">
                                        <div class="icon">
                                            <img src="/vendors/images/person.svg" class="svg" alt="">
                                        </div>
                                        <span>I'm</span>
                                        Employee
                                    </label>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Username">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="**********">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.html">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <!--
                                        use code for form submit
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                    -->
                                        <button class="btn btn-primary btn-lg btn-block">Sign In</button>
                                    </div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373" style="color: rgb(112, 115, 115);">
                                        OR
                                    </div>
                                    <div class="input-group mb-0">
                                        <a class="btn btn-outline-primary btn-lg btn-block" href="reg">Register To Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome modal start -->
    <div class="welcome-modal" style="display: none;">
        <button class="welcome-modal-close">
            <i class="bi bi-x-lg"></i>
        </button>
        <iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
        <div class="text-center">
            <h3 class="h5 weight-500 text-center mb-2">
                Open source
                <span role="img" aria-label="gratitude">❤️</span>
            </h3>
            <div class="pb-2">
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="text-center mb-1">
            <div>
                <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-light btn-block btn-sm">
                    <span class="text-danger weight-600">STAR US</span>
                    <span class="weight-600">ON GITHUB</span>
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <script async="" defer="defer" src="https://buttons.github.io/buttons.js"></script>
        </div>
        <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
            DOWNLOAD
            <i class="fa fa-download"></i>
        </a>
        <p class="font-14 text-center mb-1 d-none d-md-block">
            Available in the following technologies:
        </p>
        <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
            <i class="fa fa-html5"></i>
        </div>
    </div>
    <button class="welcome-modal-btn">
        <i class="fa fa-download"></i> Download
    </button>
    <!-- welcome modal end -->
    <!-- js -->
    <script src="/vendors/scripts/core.js"></script>
    <script src="/vendors/scripts/script.min.js"></script>
    <script src="/vendors/scripts/process.js"></script>
    <script src="/vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
            height="0"
            width="0"
            style="display: none; visibility: hidden"
        ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;" data-ad-status="unfilled"><div id="aswift_0_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"><iframe id="aswift_0" name="aswift_0" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2973766580778258&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1699868457&amp;plat=3%3A16%2C4%3A16%2C9%3A32776%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1081344%2C32%3A32%2C41%3A32%2C42%3A32&amp;format=0x0&amp;url=file%3A%2F%2F%2FE%3A%2Fdeskapp%2Fdeskapp%2Flogin.html&amp;ea=0&amp;pra=5&amp;wgl=1&amp;easpi=0&amp;asro=0&amp;asiscm=1&amp;aslmt=0.4&amp;asamt=-1&amp;asedf=0&amp;asefa=1&amp;aseiel=1~2~5&amp;ascmds=1&amp;aslcwct=1&amp;asacwct=1&amp;uach=WyJXaW5kb3dzIiwiNi4wLjAiLCJ4ODYiLCIiLCIxMTkuMC42MDQ1LjE2MCIsbnVsbCwwLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTE5LjAuNjA0NS4xNjAiXSxbIkNocm9taXVtIiwiMTE5LjAuNjA0NS4xNjAiXSxbIk5vdD9BX0JyYW5kIiwiMjQuMC4wLjAiXV0sMF0.&amp;dt=1701065008536&amp;bpp=15&amp;bdt=2741&amp;idt=866&amp;shv=r20231109&amp;mjsv=m202311090101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;nras=1&amp;correlator=4238973184040&amp;frm=20&amp;pv=2&amp;ga_vid=105473784.1701065010&amp;ga_sid=1701065010&amp;ga_hid=803204898&amp;ga_fc=0&amp;u_tz=210&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=1366&amp;bih=651&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44795921%2C44809317%2C31078297%2C44807763%2C44808149%2C44808285%2C44809054%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=2324912721976371&amp;tmod=389729066&amp;uas=0&amp;nvt=1&amp;fsapi=1&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C651&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=32768&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;dtd=980" data-google-container-id="a!1" data-load-complete="true"></iframe></div></ins><iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0" style="display: none;"></iframe>
    {{-- <iframe id="google_esf" name="google_esf" src="https://googleads.g.doubleclick.net/pagead/html/r20231109/r20190131/zrt_lookup_fy2021.html" style="display: none;"></iframe> --}}
@include('views::assets.javascript')
</body>