<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
        <title>Administrator</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
        <link rel="shortcut icon" href="{{ asset('theme/assets/Logo-mobile.png') }}" />
		<!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ asset('Backend/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
		<!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{ asset('Backend/demo1/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('Backend/demo1/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('Backend/backend.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/datepicker3.css')}}" rel="stylesheet">
        <!--end::Global Stylesheets Bundle-->
		{{-- <style>
			.error {
				color: #FF0000;
				/* margin-top: 10px; */
				/* display: block; */
			}
		</style> --}}
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <!--begin::Main-->

		<!--begin::Root-->

		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="{{route('welcome')}}">
							{{-- <img alt="Logo" src="{{ asset('theme/assets/logo-desktop-light.png') }}" class="brand h-50px logo" /> --}}
							Administrator
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-left.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
										<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
									</g>
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">

                                <div class="menu-item">
									<a class="menu-link @if (Route::currentRouteName() == 'admin.dashboard') active @endif" href="{{ route('admin.dashboard') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Design/PenAndRuller.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
                                </div>

								
								<div class="menu-item">
									<a class="menu-link @if (Route::currentRouteName() == 'admin.leads') active @endif" href="{{ route('admin.leads') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Communication/Group.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Leads</span>
									</a>
								</div>

								<div class="menu-item">
									<a class="menu-link @if (Route::currentRouteName() == 'admin.profile') active @endif" href="{{ route('admin.profile') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotone/Communication/Group.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">My Profile</span>
									</a>
								</div>
								
								
								

								

								


								




								


							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
				</div>
				<!--end::Aside-->

				
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
									<span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="{{route('home')}}" class="d-lg-none">
									<img alt="Logo" src="{{ asset('theme/assets/logo-desktop-light.png') }}" class="h-30px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<!--begin::Menu-->
										<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
											{{-- <div class="menu-item me-lg-1">
												<a class="menu-link py-3" href="{{ route('admin.dashboard') }}">
													<span class="menu-title">Dashboard</span>
												</a>
											</div> --}}
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Topbar-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::Toolbar wrapper-->
									<div class="d-flex align-items-stretch flex-shrink-0">
										<!--begin::Search-->
										{{-- <div class="d-flex align-items-stretch ms-1 ms-lg-3">
											<!--begin::Search-->
											<div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
												<!--begin::Search toggle-->
												<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
													<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
														<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
												</div>
												<!--end::Search toggle-->
												<!--begin::Menu-->
												<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
													<!--begin::Wrapper-->
													<div data-kt-search-element="wrapper">
														<!--begin::Form-->
														<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
															<!--end::Input-->
															<!--begin::Spinner-->
															<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
															</span>
															<!--end::Spinner-->
															<!--begin::Reset-->
															<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
																<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																			<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																			<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
															<!--end::Reset-->
															<!--begin::Toolbar-->
															<div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
																<!--begin::Preferences toggle-->
																<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
																	<!--begin::Svg Icon | path: icons/duotone/Code/Settings4.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Preferences toggle-->
																<!--begin::Advanced search toggle-->
																<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
																	<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<polygon points="0 0 24 0 24 24 0 24" />
																				<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Advanced search toggle-->
															</div>
															<!--end::Toolbar-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Preferences-->
													<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
														<!--begin::Heading-->
														<h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<!--begin::Radio group-->
															<div class="nav-group nav-group-fluid">
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="users" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="orders" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="projects" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Radio group-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<!--begin::Radio group-->
															<div class="nav-group nav-group-fluid">
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="attachment" value="any" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Radio group-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
																<option value="next">Within the next</option>
																<option value="last">Within the last</option>
																<option value="between">Between</option>
																<option value="on">On</option>
															</select>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-8">
															<!--begin::Col-->
															<div class="col-6">
																<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-6">
																<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
																	<option value="days">Days</option>
																	<option value="weeks">Weeks</option>
																	<option value="months">Months</option>
																	<option value="years">Years</option>
																</select>
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
															<a href="../../demo1/dist/pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Preferences-->
													<!--begin::Preferences-->
													<form data-kt-search-element="preferences" class="pt-1 d-none">
														<!--begin::Heading-->
														<h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="pb-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
																<input class="form-check-input" type="checkbox" value="1" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
																<input class="form-check-input" type="checkbox" value="1" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end pt-7">
															<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
															<button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Preferences-->
												</div>
												<!--end::Menu-->
											</div>
											<!--end::Search-->
										</div>
										<!--end::Search--> --}}


										<!--begin::User-->
										<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
											<!--begin::Menu wrapper-->
											<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
												{{-- <img src="{{ asset('Backend/demo1/dist/assets/media/avatars/150-26.jpg') }}" alt="metronic" /> --}}
												{{ Auth::user()->name }}
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content d-flex align-items-center px-3">
														<!--begin::Avatar-->
														{{-- <div class="symbol symbol-50px me-5">
															<img alt="Logo" src="{{ asset('Backend/demo1/dist/assets/media/avatars/150-26.jpg') }}" />
														</div> --}}
														<!--end::Avatar-->
														<!--begin::Username-->
														<div class="d-flex flex-column">
															<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}</div>
															<a class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
														</div>
														<!--end::Username-->
													</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												{{-- <div class="menu-item px-5">
													<a href="" class="menu-link px-5">My Profile</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5 my-1">
													<a href="" class="menu-link px-5">Account Settings</a>
												</div> --}}
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
                                                    <a href="{{ route('admin.logout') }}" class="menu-link px-5" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">Sign Out</a>
                                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												{{-- <div class="separator my-2"></div> --}}
												<!--end::Menu separator-->
											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::User -->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
                    <!--end::Header-->

                    <!--begin::Content-->
                    @yield('content')
                    <!--end::Content-->

					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">{{date('Y')}}©</span>
								<a target="_blank" class="text-gray-800 text-hover-primary">Administrator</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<div id="loader"></div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('Backend/demo1/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('Backend/demo1/dist/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{ asset('Backend/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('Backend/demo1/dist/assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('Backend/demo1/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('Backend/demo1/dist/assets/js/custom/modals/create-app.js') }}"></script>
		<script src="{{ asset('Backend/demo1/dist/assets/js/custom/modals/upgrade-plan.js') }}"
        ></script>
		<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   		{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script> --}}
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <!--end::Page Custom Javascript-->
	    <script src="{{ asset('Backend/ckeditor/ckeditor.js') }}"></script>
		<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
         <!--Page Custom script-->
        @stack('scripts')
        <script src="{{ asset('js/admin.js').'?v='.time() }}"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>