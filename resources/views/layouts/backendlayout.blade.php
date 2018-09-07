<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') - QeCADMT </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="#">
	<meta name="keywords" content="QeCAD Management Tool">
	<meta name="author" content="#">

	<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/bootstrap/css/bootstrap.min.css') }}">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/bootstrap-daterangepicker/css/daterangepicker.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datedropper/css/datedropper.min.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/flag-icon/flag-icon.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/menu-search/css/component.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
	@yield('css')
</head>
<body>

	<div class="theme-loader">
		<div class="ball-scale">
			<div class='contain'>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
				<div class="ring"><div class="frame"></div></div>
			</div>
		</div>
	</div>

	<div id="pcoded" class="pcoded">
		<div class="pcoded-overlay-box"></div>
		<div class="pcoded-container navbar-wrapper">
			<nav class="navbar header-navbar pcoded-header">
				<div class="navbar-wrapper">
					<div class="navbar-logo">
						<a class="mobile-menu" id="mobile-collapse" href="#">
							<i class="ti-menu"></i>
						</a>
						<a class="mobile-search morphsearch-search" href="#">
							<i class="ti-search"></i>
						</a>
						<a href="{{ url('/dashboard') }}">
							<img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="company-Logo" />
						</a>
						<a class="mobile-options">
							<i class="ti-more"></i>
						</a>
					</div>
					<div class="navbar-container container-fluid">
						<ul class="nav-left">
							<li>
								<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
							</li>
							<li>
								<a href="javascript:void(0);" onclick="javascript:toggleFullScreen()">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
						</ul>
						<ul class="nav-right">
							<li class="header-notification">
								<a href="javascript:void(0);">
									<i class="ti-bell"></i>
									<span class="badge bg-c-pink"></span>
								</a>
								<ul class="show-notification" style="overflow-y: scroll;height: 350px;">
									<li>
										<h6>Notifications</h6>
										<label class="label label-danger">New</label>
									</li>
									<li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li><li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li><li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li><li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li><li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li><li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li><li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li><li>
										<div class="media">
											<img class="d-flex align-self-center" src="{{ asset('assets/images/user.png') }}" alt="Generic placeholder image">
											<div class="media-body">
												<h5 class="notification-user">John Doe</h5>
												<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
												<span class="notification-time">30 minutes ago</span>
											</div>
										</div>
									</li>
									
								</ul>
							</li>
							<li class="header-notification">
								<a href="javascript:void(0);" class="displayChatbox">
									<i class="ti-user"></i>
									<span class="badge bg-c-green"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div id="sidebar" class="users p-chat-user showChat">
				<div class="had-container">
					<div class="card card_main p-fixed users-main">
						<div class="user-box">
							<div class="card-block">
								
							</div>
							<div class="main-friend-list">
								<div class="media userlist-box" data-id="1" data-status="online">
									<div class="col-md-12 col-xs-12">
										<div class="card user-card">
											<div class="card-header-img">
												<img class="img-fluid img-radius" src="{{ asset('assets/uploads/user/'.Auth::user()->profile_pic) }}" alt="card-img">
												<h4>{{ Auth::user()->name }}</h4>
												<h5>
													<a href="" class="__cf_email__">
														{{ Auth::user()->email }}
													</a>
												</h5>
												<h6>Super Admin</h6>
											</div>
											
											<div class="text-center m-15">
												<a  href="{{ url('/profile') }}" class="btn btn-success waves-effect waves-light">
													<i class="ti-user m-r-5"></i>Profile
												</a>
											</div>
											<div class="text-center m-15">
												<a  href="{{ url('/logout') }}" class="btn btn-warning waves-effect waves-light">
													<i class="ti-power-off m-r-5"></i>Logout
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="pcoded-main-container" >
				<div class="pcoded-wrapper ">
					<nav class="pcoded-navbar offcanvas" >
						<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
						<div class="pcoded-inner-navbar main-menu">
							<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
							<ul class="pcoded-item pcoded-left-item">
								{{-- <li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
										<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu">
										<li class="">
											<a href="index-2.html">
												<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
												<span class="pcoded-mtext" data-i18n="nav.dash.default">Default</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li> --}}
								<li class=""> 
									<a href="{{ url('/dashboard') }}">
										<span class="pcoded-micon">
											<span class="pcoded-micon"><i class="ti-home"></i></span>
										</span> 
										<span class="pcoded-mtext">Dashboard</span> 
										<span class="pcoded-mcaret"></span> 
									</a>
								</li>
							</ul>
							<ul class="pcoded-item pcoded-left-item">
								<li class="pcoded-hasmenu">
									<a href="javascript:void(0)">
										<span class="pcoded-micon"><i class="ti-user"></i><b>BC</b></span>
										<span class="pcoded-mtext" >Employee</span>
										<span class="pcoded-mcaret"></span>
									</a>
									<ul class="pcoded-submenu">
										<li class=" ">
											<a href="{{ url('/employee/add-employee') }}">
												<span class="pcoded-micon"><i class="ti-plus"></i></span>
												<span class="pcoded-mtext" >Add Employee</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
										<li class=" ">
											<a href="{{ url('/employee/view-employee') }}">
												<span class="pcoded-micon"><i class="ti-plus"></i></span>
												<span class="pcoded-mtext" >View Employee</span>
												<span class="pcoded-mcaret"></span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
					<div class="pcoded-content">
						<div class="pcoded-inner-content">
							<div class="main-body">
								<div class="page-wrapper">

									<div class="page-header card">
										<div class="row align-items-end">
											<div class="col-lg-8">
												<div class="page-header-title">	
													<div class="d-inline">
														<h4>@yield('page-title')</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
									@yield('content')								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('assets/bower_components/jquery/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/popper.js/js/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>


	<script type="text/javascript" src="{{ asset('assets/bower_components/modernizr/js/modernizr.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/modernizr/js/css-scrollbars.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/pages/advance-elements/moment-with-locales.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-daterangepicker/js/daterangepicker.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/bower_components/datedropper/js/datedropper.min.js') }}"></script>


	<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/pages/ckeditor/ckeditor.js') }}"></script>

	<script src="{{ asset('assets/pages/chart/echarts/js/echarts-all.js') }}" type="text/javascript"></script>


	<script type="text/javascript" src="{{ asset('assets/bower_components/i18next/js/i18next.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
	<script src="{{ asset('assets/pages/user-profile.js') }}"></script>
	<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo-12.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
	@yield('js')
</body>
</html>
