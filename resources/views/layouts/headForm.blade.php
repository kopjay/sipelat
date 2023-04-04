<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>SIPELAT</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('metronics/demo7/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('metronics/demo7/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('metronics/demo7/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('metronics/demo7/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		{{-- <link rel="shortcut icon" href="{{asset('images/logo-headers.png')}}" /> --}}
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="{{asset('images/sipelat-white.png')}}" class="max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header flex-column header-fixed">
						<!--begin::Top-->
						<div class="header-top">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Left-->
								<div class="d-none d-lg-flex align-items-center mr-3">
									<!--begin::Logo-->
									<a href="{{url('/')}}" class="mr-5">
										<img alt="Logo" src="{{asset('images/sipelat-white.png')}}" class="max-h-60px" />
									</a>
									<!--end::Logo-->
									<!--begin::Tab Navs(for desktop mode)-->
									<ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
										<!--begin::Item-->
										<li class="nav-item">
											<a href="{{url('/')}}" class="nav-link py-4 px-6 active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
										</li>
										<!--end::Item-->

                            			
									
									</ul>
									<!--begin::Tab Navs-->
								</div>
								<!--end::Left-->
								<!--begin::Topbar-->
								<div class="topbar bg-primary">
									<!--begin::Search-->
									<div class="dropdown">
										<!--begin::Toggle-->
										<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
											<div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
												<span class="svg-icon svg-icon-xl">
													<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</div>
										</div>
										<!--end::Toggle-->
										<!--begin::Dropdown-->
										<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
											<div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
												<!--begin:Form-->
												<form method="get" class="quick-search-form">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">
																<span class="svg-icon svg-icon-lg">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
														</div>
														<input type="text" class="form-control" placeholder="Search..." />
														<div class="input-group-append">
															<span class="input-group-text">
																<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
															</span>
														</div>
													</div>
												</form>
												<!--end::Form-->
												<!--begin::Scroll-->
												<div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
												<!--end::Scroll-->
											</div>
										</div>
										<!--end::Dropdown-->
									</div>
									<!--end::Search-->
									<!--begin::Notifications-->
									<div class="dropdown">
										<!--begin::Toggle-->
										<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
											<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1 pulse pulse-white">
												<span class="svg-icon svg-icon-xl">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
															<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
												<span class="pulse-ring"></span>
											</div>
										</div>
										<!--end::Toggle-->
										
									</div>
									<!--end::Notifications-->
									<!--begin::Quick Actions-->
									<div class="dropdown">
										<!--begin::Toggle-->
										<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
											<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
												<span class="svg-icon svg-icon-xl">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
															<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
															<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
															<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</div>
										</div>
										<!--end::Toggle-->
									
									</div>
									<!--end::Quick Actions-->
									
									<!--begin::User-->
									<div class="topbar-item">
										<div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
											<div class="d-flex flex-column text-right pr-sm-3">
												<span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-sm-inline"></span>
												{{-- <span class="text-white font-weight-bolder font-size-sm d-none d-sm-inline">UX Designer</span> --}}
											</div>
											<span class="symbol symbol-35">
												<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30"></span>
											</span>
										</div>
									</div>
									<!--end::User-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Top-->
						<!--begin::Bottom-->
						<div class="header-bottom">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Header Menu Wrapper-->
								<div class="header-navs header-navs-left" id="kt_header_navs">
									<!--begin::Tab Navs(for tablet and mobile modes)-->
									<ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="{{url('/')}}" class="nav-link btn btn-clean active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
										</li>
										<!--end::Item-->

									</ul>
									<!--begin::Tab Navs-->
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tab Pane-->
										<div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
											<!--begin::Menu-->
											<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
												<!--begin::Nav-->
												<ul class="menu-nav">
													<li class="menu-item menu-item-active" aria-haspopup="true">
														<a href="{{url('')}}" class="menu-link">
															<span class="menu-text">Dashboard</span>
														</a>
													</li>
													{{-- <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
														<a href="{{url('/menu')}}" class="menu-link">
															<span class="menu-text">Menu</span>
														</a>
													</li> --}}
												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Menu-->
										</div>
										<!--begin::Tab Pane-->
										<!--begin::Tab Pane-->
										<div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
											<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-light-success font-weight-bold mr-3 my-2 my-lg-0">Latest Orders</a>
												<a href="#" class="btn btn-light-primary font-weight-bold my-2 my-lg-0">Customer Service</a>
												<!--end::Actions-->
											</div>
											<div class="d-flex align-items-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">Generate Reports</a>
												<!--end::Actions-->
											</div>
										</div>
										<!--begin::Tab Pane-->
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Bottom-->
					</div>
					<!--end::Header-->


                    {{-- isi --}}
                    @yield('content')




                    <!--begin::Footer-->
					<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<a href="#" target="_blank" class="text-dark-75 text-hover-primary">SIPELAT</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="#" target="_blank" class="nav-link pr-3 pl-0">About</a>
								<a href="#" target="_blank" class="nav-link px-3">Team</a>
								<a href="#" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Search Panel-->
		<div id="kt_quick_search" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between mb-5">
				<h3 class="font-weight-bold m-0">Search
				<small class="text-muted font-size-sm ml-2">files, reports, members</small></h3>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_search_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content">
				<!--begin::Container-->
				<div class="quick-search quick-search-offcanvas quick-search-has-result" id="kt_quick_search_offcanvas">
					<!--begin::Form-->
					<form method="get" class="quick-search-form border-bottom pt-5 pb-1">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Search..." />
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
								</span>
							</div>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Search Panel-->
		<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
				{{-- <small class="text-muted font-size-sm ml-2">12 messages</small></h3> --}}
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">
				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<div class="symbol-label" style="background-image:url('/images/user-template.png')"></div>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">User</a>
						<div class="text-muted mt-1"></div>
						<div class="navi mt-2">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary"></span>
								</span>
							</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</button>
                            </form>
						</div>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>
				<!--end::Separator-->
				<!--begin::Nav-->
				{{-- <div class="navi navi-spacer-x-0 p-0">
					<!--begin::Item-->
					<a href="{{url('/user')}}" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Profile</div>
								<div class="text-muted">Account settings and more
								<span class="label label-light-danger label-inline font-weight-bold">update</span></div>
							</div>
						</div>
					</a>
					<!--end:Item-->
					
				</div> --}}
				<!--end::Nav-->
				<!--begin::Separator-->
				<div class="separator separator-dashed my-7"></div>
				<!--end::Separator-->
				
			</div>
			<!--end::Content-->
		</div>
		<!-- end::User Panel-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		



		<!--end::Demo Panel-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('metronics/demo7/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('metronics/demo7/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('metronics/demo7/js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('metronics/demo7/js/pages/crud/ktdatatable/base/html-table.js')}}"></script>
        {{-- <script src="{{asset('metronics/demo7/js/pages/crud/ktdatatable/base/html-table2.js')}}"></script> --}}

		<script src="{{asset('metronics/demo7/js/pages/custom/wizard/wizard-3.js')}}"></script>
        <script>
            $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        
                $('body').on('click', '.spmModalEdit', function () {
                    var spm_id = $(this).data('id');
                    var	rows = '';
                    var	rows_spt = '';
                    var	rows_dokumen = '';
                    var	rows_spm = '';
                    $.get("" +'/' + spm_id +'/edit', function (data) {
                        $('#modelHeading').html("Edit Customer");
                        $('#spmModalEdit').modal('show');
                        $('#spm_id').val(data.id);
                        $('.spm-id').val(data.id);
                        $('#nota_dinas').val(data.nota_dinas);
                        $('#nota_dinas_keterangan').val(data.nota_dinas_keterangan);
                        $('#spt_keterangan').val(data.spt_keterangan);
                        $('#dokumen_tipe').val(data.dokumen_tipe);
                        $('#dokumen_keterangan').val(data.dokumen_keterangan);
                        $('#spm_keterangan').val(data.spm_keterangan);
                        $('#status').val(data.status);
                        $.each(data.file_nota_dinas, function( key, value ) {
                                rows = rows + '<tr>';
                                rows = rows + '<td>'+value.id+'</td>';
                                rows = rows + '<td>'+value.nama+'</td>';
                                rows = rows + '<td>'+value.created_at+'</td>';
                                rows = rows + '<td>';
                                    rows = rows + '<a href="../file/download/'+value.file+'/'+value.nama+'/"><button type="button" class="btn btn-light btn-elevate-hover btn-circle btn-icon"><i class="fa fa-download" style="color:slateblue;"></i></button></a>';

                                    rows = rows + '</td>';
                                rows = rows + '</tr>';
                        });
                        $('#file_nota_dinas').html(rows);

                        $.each(data.file_spt, function( key, value ) {
                                rows_spt = rows_spt + '<tr>';
                                rows_spt = rows_spt + '<td>'+value.id+'</td>';
                                rows_spt = rows_spt + '<td>'+value.nama+'</td>';
                                rows_spt = rows_spt + '<td>'+value.created_at+'</td>';
                                rows_spt = rows_spt + '<td>';
                                    rows_spt = rows_spt + '<a href="../file/download/'+value.file+'/'+value.nama+'/"><button type="button" class="btn btn-light btn-elevate-hover btn-circle btn-icon"><i class="fa fa-download" style="color:slateblue;"></i></button></a>';

                                    rows_spt = rows_spt + '</td>';
                                rows_spt = rows_spt + '</tr>';
                        });
                        $('#file_spt').html(rows_spt);

                        $.each(data.file_dokumen, function( key, value ) {
                                rows_dokumen = rows_dokumen + '<tr>';
                                rows_dokumen = rows_dokumen + '<td>'+value.id+'</td>';
                                rows_dokumen = rows_dokumen + '<td>'+value.nama+'</td>';
                                rows_dokumen = rows_dokumen + '<td>'+value.created_at+'</td>';
                                rows_dokumen = rows_dokumen + '<td>';
                                    rows_dokumen = rows_dokumen + '<a href="../file/download/'+value.file+'/'+value.nama+'/"><button type="button" class="btn btn-light btn-elevate-hover btn-circle btn-icon"><i class="fa fa-download" style="color:slateblue;"></i></button></a>';

                                    rows_dokumen = rows_dokumen + '</td>';
                                rows_dokumen = rows_dokumen + '</tr>';
                        });
                        $('#file_dokumen').html(rows_dokumen);

                        $.each(data.file_spm, function( key, value ) {
                                rows_spm = rows_spm + '<tr>';
                                rows_spm = rows_spm + '<td>'+value.id+'</td>';
                                rows_spm = rows_spm + '<td>'+value.nama+'</td>';
                                rows_spm = rows_spm + '<td>'+value.created_at+'</td>';
                                rows_spm = rows_spm + '<td>';
                                    rows_spm = rows_spm + '<a href="../file/download/'+value.file+'/'+value.nama+'/"><button type="button" class="btn btn-light btn-elevate-hover btn-circle btn-icon"><i class="fa fa-download" style="color:slateblue;"></i></button></a>';

                                    rows_spm = rows_spm + '</td>';
                                rows_spm = rows_spm + '</tr>';
                        });
                        $('#file_spm').html(rows_spm);
                    })
                });

				$('body').on('click', '.userModalEdit', function () {
                    var user_id = $(this).data('id');
                    $.get("" +'/user/' + user_id +'/edit', function (data) {
                        $('#modelHeading').html("Edit Data");
                        $('#form-user-edit').html('<form action="/user/'+data.id+'/update" method="POST">');
                        $('#userModalEdit').modal('show');
                        $('#user_id').val(data.id);
                        $('#nameUser').val(data.name);
                        $('#emailUser').val(data.email);
                        $('#jabatanUser').val(data.jabatan);
                        $('#passwordUser').val(data.password);
                        
                    })
                });

				$('body').on('click', '.poliModalEdit', function () {
                    var pasien_id = $(this).data('id');
                    $.get("" +'/poli/' + pasien_id +'/edit', function (data) {
                        $('#modelHeading').html("Edit Opname");
                        $('#form-poli-edit').html('<form action="/poli/'+data.id+'/update" method="POST">');
                        $('#poliModalEdit').modal('show');
                        $('#pasien_id').val(data.id);
                        $('#nama').val(data.nama);
                        $('#nik').val(data.nik);
                        $('#nip').val(data.nip);
                        $('#jenis_kelamin').val(data.jenis_kelamin);
                        $('#usia').val(data.usia);
                        $('#tanggal_lahir').val(data.tanggal_lahir);
                        $('#golongan_darah').val(data.golongan_darah);
                        $('#bagian').val(data.bagian);
                        $('#alamat').val(data.alamat);
                        $('#riwayat_alergi_obat').val(data.riwayat_alergi_obat);
                        
                    })
                });

				$('body').on('click', '.tatausahaModalEdit', function () {
                    var tatausaha_id = $(this).data('id');
                    var	rows_tatausaha = '';
                    $.get("" +'/tatausaha/' + tatausaha_id +'/edit', function (data) {
                        $('#modelHeading').html("Edit Data");
                        $('#form-tatausaha-edit').html('<form action="/tatausaha/'+data.id+'/update" method="POST">');
                        $('#tatausahaModalEdit').modal('show');
                        $('#tatausaha_id').val(data.id);
                        $('#namatatausaha').val(data.nama);
                        $('#nodokumentatausaha').val(data.no_dokumen);
                        $('#tglrevisitatausaha').val(data.tgl_revisi);
                        $('#norevisitatausaha').val(data.no_revisi);
                        $('#statustatausaha').val(data.status);
                        $('#idjenistatausaha').val(data.id_jenis); 
						$.each(data.file_tatausaha, function( key, value ) {
                                rows_tatausaha = rows_tatausaha + '<tr>';
                                // rows_tatausaha = rows_tatausaha + '<td>'+value.id+'</td>';
                                rows_tatausaha = rows_tatausaha + '<td>'+value.nama+'</td>';
                                // rows_tatausaha = rows_tatausaha + '<td>'+value.created_at+'</td>';
                                rows_tatausaha = rows_tatausaha + '<td>';
                                    rows_tatausaha = rows_tatausaha + '<a href="../file/download/'+value.file+'/'+value.nama+'/"><button type="button" class="btn btn-light btn-elevate-hover btn-circle btn-icon"><i class="fa fa-download" style="color:slateblue;"></i></button></a>';
                                    rows_tatausaha = rows_tatausaha + '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'+value.id+'" data-original-title="Delete" class="btn btn-light btn-elevate-hover btn-circle btn-icon deleteFileTatausaha"><i class="fa fa-trash" style="color:rgb(186, 51, 51);"></i></a>';
                                rows_tatausaha = rows_tatausaha + '</td>';
								
                                rows_tatausaha = rows_tatausaha + '</tr>';
                        });
                        $('.file_tatausaha').html(rows_tatausaha);
                    })
                });

				$('body').on('click', '.deleteFileTatausaha', function () {
					var filetu_id = $(this).data('id');
					confirm("Are You sure want to delete !");

					$.ajax({
						type: "DELETE",
						url: ""+'/tatausaha/deleteFile/'+filetu_id,
						success: function (data) {
							// $(".file_tatausaha").reload();
							location.reload();
						},
						error: function (data) {
							console.log('Error:', data);
						}
					});
					
				});

            });
        </script>

		<script type="text/javascript">
			$(function()
			{
				$(document).on('click', '.btn-add', function(e)
				{
					e.preventDefault();

					var controlForm = $('.controls'),
						currentEntry = $(this).parents('.entry:first'),
						newEntry = $(currentEntry.clone()).appendTo(controlForm);

					newEntry.find('input').val('');
					controlForm.find('.entry:not(:last) .btn-add')
						.removeClass('btn-add').addClass('btn-remove')
						.removeClass('btn-success').addClass('btn-danger')
						.html('<span class="fa fa-minus"></span>');
				}).on('click', '.btn-remove', function(e)
				{
					$(this).parents('.entry:first').remove();

					e.preventDefault();
					return false;
				});
			});

		</script>

		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>