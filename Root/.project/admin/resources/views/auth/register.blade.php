<head>
    @include('views::assets.style')
</head>
<body class="login-page">
    <body class="login-page">
		<div class="login-header box-shadow">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo">
					<a href="login.html">
						<img src="vendors/images/deskapp-logo.svg" alt="">
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="login.html">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/register-page-img.png" alt="">
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="register-box bg-white box-shadow border-radius-10">
							<div class="wizard-content">
								<form class="tab-wizard2 wizard-circle wizard clearfix" role="application" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="step">1</span> <span class="info">Basic Account Credentials</span></a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="step">2</span> <span class="info">Personal Information</span></a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="step">3</span> <span class="info">Payment Method &amp; Info</span></a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="step">4</span> <span class="info">Overview Information</span></a></li></ul></div><div class="content clearfix">
									<h5 id="steps-uid-0-h-0" tabindex="-1" class="title current">Basic Account Credentials</h5>
									<section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Email Address*</label>
												<div class="col-sm-8">
													<input type="email" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Username*</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Password*</label>
												<div class="col-sm-8">
													<input type="password" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Confirm Password*</label>
												<div class="col-sm-8">
													<input type="password" class="form-control">
												</div>
											</div>
										</div>
									</section>
									<!-- Step 2 -->
									<h5 id="steps-uid-0-h-1" tabindex="-1" class="title">Personal Information</h5>
									<section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Full Name*</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row align-items-center">
												<label class="col-sm-4 col-form-label">Gender*</label>
												<div class="col-sm-8">
													<div class="custom-control custom-radio custom-control-inline pb-0">
														<input type="radio" id="male" name="gender" class="custom-control-input">
														<label class="custom-control-label" for="male">Male</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline pb-0">
														<input type="radio" id="female" name="gender" class="custom-control-input">
														<label class="custom-control-label" for="female">Female</label>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">City</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">State</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</section>
									<!-- Step 3 -->
									<h5 id="steps-uid-0-h-2" tabindex="-1" class="title">Payment Method &amp; Info</h5>
									<section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
										<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Credit Card Type</label>
												<div class="col-sm-8">
													<div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" title="Select Card Type" tabindex="-98"><option class="bs-title-option" value=""></option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
														<option value="3">Option 3</option>
													</select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select Card Type"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Card Type</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
												</div>
											</div>
											<div class="form-group row align-items-center">
												<label class="col-sm-4 col-form-label">Credit Card Number</label>
												<div class="col-sm-8">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">CVC</label>
												<div class="col-sm-3">
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-4 col-form-label">Expiration Date</label>
												<div class="col-sm-8">
													<div class="row">
														<div class="col-6">
															<div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" title="Month" data-size="5" tabindex="-98"><option class="bs-title-option" value=""></option>
																<option value="01">January</option>
																<option value="02">February</option>
																<option value="03">March</option>
																<option value="04">April</option>
																<option value="05">May</option>
																<option value="06">June</option>
																<option value="07">July</option>
																<option value="08">August</option>
																<option value="09">September</option>
																<option value="10">October</option>
																<option value="11">November</option>
																<option value="12">December</option>
															</select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Month"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Month</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
														</div>
														<div class="col-6">
															<div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" title="Year" data-size="5" tabindex="-98"><option class="bs-title-option" value=""></option>
																<option>2020</option>
																<option>2019</option>
																<option>2018</option>
																<option>2017</option>
																<option>2016</option>
																<option>2015</option>
																<option>2014</option>
																<option>2013</option>
																<option>2012</option>
																<option>2011</option>
																<option>2010</option>
																<option>2009</option>
															</select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Year"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Year</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!-- Step 4 -->
									<h5 id="steps-uid-0-h-3" tabindex="-1" class="title">Overview Information</h5>
									<section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
										<div class="form-wrap max-width-600 mx-auto">
											<ul class="register-info">
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Email Address</div>
														<div class="col-sm-8">example@abc.com</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Username</div>
														<div class="col-sm-8">Example</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Password</div>
														<div class="col-sm-8">.....000</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Full Name</div>
														<div class="col-sm-8">john smith</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4 weight-600">Location</div>
														<div class="col-sm-8">123 Example</div>
													</div>
												</li>
											</ul>
											<div class="custom-control custom-checkbox mt-4">
												<input type="checkbox" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label" for="customCheck1">I have read and agreed to the terms of services and
													privacy policy</label>
											</div>
										</div>
									</section>
								</div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Submit</a></li></ul></div></form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- success Popup html Start -->
		<button type="button" id="success-modal-btn" hidden="" data-toggle="modal" data-target="#success-modal" data-backdrop="static">
			Launch modal
		</button>
		<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
				<div class="modal-content">
					<div class="modal-body text-center font-18">
						<h3 class="mb-20">Form Submitted!</h3>
						<div class="mb-30 text-center">
							<img src="vendors/images/success.png">
						</div>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
						eiusmod
					</div>
					<div class="modal-footer justify-content-center">
						<a href="login.html" class="btn btn-primary">Done</a>
					</div>
				</div>
			</div>
		</div>
		<!-- success Popup html End -->
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
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="vendors/scripts/steps-setting.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	

<ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;" data-ad-status="unfilled"><div id="aswift_0_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"><iframe id="aswift_0" name="aswift_0" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2973766580778258&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1699868457&amp;plat=3%3A16%2C4%3A16%2C9%3A32776%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1081344%2C32%3A32%2C41%3A32%2C42%3A32&amp;format=0x0&amp;url=file%3A%2F%2F%2FE%3A%2Fdeskapp%2Fdeskapp%2Fregister.html&amp;ea=0&amp;pra=5&amp;wgl=1&amp;easpi=0&amp;asro=0&amp;asiscm=1&amp;aslmt=0.4&amp;asamt=-1&amp;asedf=0&amp;asefa=1&amp;aseiel=1~2&amp;ascmds=1&amp;uach=WyJXaW5kb3dzIiwiNi4wLjAiLCJ4ODYiLCIiLCIxMTkuMC42MDQ1LjE2MCIsbnVsbCwwLG51bGwsIjY0IixbWyJHb29nbGUgQ2hyb21lIiwiMTE5LjAuNjA0NS4xNjAiXSxbIkNocm9taXVtIiwiMTE5LjAuNjA0NS4xNjAiXSxbIk5vdD9BX0JyYW5kIiwiMjQuMC4wLjAiXV0sMF0.&amp;dt=1701075248303&amp;bpp=17&amp;bdt=2232&amp;idt=932&amp;shv=r20231109&amp;mjsv=m202311140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;nras=1&amp;correlator=4820668456491&amp;frm=20&amp;pv=2&amp;ga_vid=242489174.1701075249&amp;ga_sid=1701075249&amp;ga_hid=2032384872&amp;ga_fc=0&amp;u_tz=210&amp;u_his=1&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=1366&amp;bih=651&amp;scr_x=0&amp;scr_y=0&amp;eid=44759876%2C44759927%2C44759837%2C31078020%2C31079758%2C31078297%2C31079699%2C44807754%2C44806139%2C44807764%2C44808148%2C44808284%2C44809053%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=853610033102035&amp;tmod=1067882514&amp;uas=3&amp;nvt=1&amp;fsapi=1&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C1366%2C651&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=32768&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;dtd=1069" data-google-container-id="a!1" data-load-complete="true"></iframe></div></ins><iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0" style="display: none;"></iframe></body>
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