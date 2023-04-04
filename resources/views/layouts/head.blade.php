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

                            			@if(Auth::user()->jabatan == 1)
										<!--begin::Item-->
										<li class="nav-item mr-3">
											{{-- <a href="{{url('kartukendali/'.\Carbon\Carbon::now()->format('m').'/'.\Carbon\Carbon::now()->format('Y'))}}/10" class="nav-link py-4 px-6">Kartu Kendali</a> --}}
											<a href="{{url('kartukendali')}}/02" class="nav-link py-4 px-6">Kartu Kendali</a>
										</li>
										<li class="nav-item mr-3">
											<a href="{{url('formlist')}}" class="nav-link py-4 px-6">Peserta</a>
										</li>
										<li class="nav-item mr-3">
											<a href="{{url('/pejabat')}}" class="nav-link py-4 px-6">Pejabat</a>
										</li>
										<li class="nav-item mr-3">
											<a href="{{url('/user')}}" class="nav-link py-4 px-6">Akun</a>
										</li>
										{{-- <li class="nav-item mr-3">
											<a href="{{url('/kurikulum')}}" class="nav-link py-4 px-6">Kurikulum</a>
										</li> --}}
										<li class="nav-item mr-3">
											<a href="{{url('/setting')}}" class="nav-link py-4 px-6">Setting</a>
										</li>
										<!--end::Item-->
										@else 
										@endif
									
									</ul>
									<!--begin::Tab Navs-->
								</div>
								<!--end::Left-->
								<!--begin::Topbar-->
								<div class="topbar bg-primary">
									<!--begin::Search-->
									<div class="dropdown">

									
									</div>
									<!--end::Quick Actions-->
									
									<!--begin::User-->
									<div class="topbar-item">
										<div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
											<div class="d-flex flex-column text-right pr-sm-3">
												<span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-sm-inline">{{Auth::user()->name}}</span>
												{{-- <span class="text-white font-weight-bolder font-size-sm d-none d-sm-inline">UX Designer</span> --}}
											</div>
											<span class="symbol symbol-35">
												<span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">{{substr(Auth::user()->name, 0,1)}}</span>
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

                            			@if(Auth::user()->jabatan == 1)
										<!--begin::Item-->
										<li class="nav-item mr-2">
											<a href="{{url('/user')}}" class="nav-link btn btn-clean">Akun</a>
										</li>
										<li class="nav-item mr-2">
											<a href="{{url('/pejabat')}}" class="nav-link btn btn-clean">Pejabat</a>
										</li>
										{{-- <li class="nav-item mr-2">
											<a href="{{url('/kurikulum')}}" class="nav-link btn btn-clean">Kurikulum</a>
										</li> --}}
										<li class="nav-item mr-2">
											<a href="{{url('/setting')}}" class="nav-link btn btn-clean">Setting</a>
										</li>
										<!--end::Item-->
										@else
										@endif

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
														<a href="{{Auth::user()->jabatan == 1 ? url('') : url('kartukendali/02')}}" class="menu-link">
															<span class="menu-text">Dashboard</span>
														</a>
													</li>
													@if(Auth::user()->jabatan == 1)
													<li class="menu-item" aria-haspopup="true">
														<a href="{{url('pelatihan')}}" class="menu-link">
															<span class="menu-text">Pelatihan</span>
														</a>
													</li>
													@endif
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
											</div>
											<div class="d-flex align-items-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">Generate Reports</a>
											</div>
										</div>
										<!--begin::Tab Pane-->
									</div>
								</div>
							</div>
						</div>
					</div>


                    {{-- content --}}
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
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->name }}</a>
						{{-- <div class="text-muted mt-1">{{ jabatan(Auth::user()->jabatan) }}</div> --}}
						<div class="navi mt-2">
							<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
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
									<span class="navi-text text-muted text-hover-primary">{{ Auth::user()->email }}</span>
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
		<script src="{{asset('metronics/demo7/js/pages/features/charts/apexcharts.js')}}"></script>
		<script src="{{asset('metronics/demo7/js/pages/features/miscellaneous/toastr.js')}}"></script>
        
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
                        $('#nipUser').val(data.nip);
                        $('#pajakUser option[value="'+data.pajak+'"]').prop('selected', true);
                        $('#passwordUser').val(data.password);
                        
                    })
                });

				$('body').on('click', '.jadwalModalEdit', function () {
                    var jadwal_id = $(this).data('id');
                    $.get("" +'/jadwal/' + jadwal_id +'/edit', function (data) {
                        $('#modelHeading').html("Edit Data");
                        $('#form-user-edit').html('<form action="/jadwal/'+data.id+'/update" method="POST">');
                        $('#jadwalModalEdit').modal('show');
                        $('#jadwal_id').val(data.id);
                        $('#pelatihan_id').val(data.pelatihan_id);
                        $('#mata_pelatihan').val(data.mata_pelatihan);
                        $('#tgl').val(data.tgl);
                        $('#waktu_mulai').val(data.waktu_mulai);
                        $('#waktu_akhir').val(data.waktu_akhir);
                        $('#jp').val(data.jp);
                        $('#narasumber option[value="'+data.user_id+'"]').prop('selected', true);
                        $('input[name=type][value="'+data.type+'"]').prop('checked', true);
                        $('input[name=async][value="'+data.async+'"]').prop('checked', true);
                        $('#user_id').val(data.narasumber);
                        
                    })
                });

				$('body').on('click', '.penyelenggaraModalEdit', function () {
                    var id = $(this).data('id');
                    $.get("" +'/penyelenggara/' + id +'/edit', function (data) {
                        $('#modelHeading').html("Edit Data Panitia");
                        $('#form-user-edit').html('<form action="/penyelenggara/'+data.id+'/update" method="POST">');
                        $('#penyelenggaraModalEdit').modal('show');
                        $('#id').val(data.id);
                        $('#nama').val(data.nama);
                        $('#kedudukan').val(data.kedudukan);
                        $('#jabatan').val(data.jabatan);
                        
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

		<script>
			@if(Session::has('msg'))
				toastr.options = {
					"closeButton": false,
					"debug": false,
					"newestOnTop": false,
					"progressBar": false,
					"positionClass": "toast-top-right",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
				toastr.success("{{ session('msg') }}");
			@endif
		</script>

		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>