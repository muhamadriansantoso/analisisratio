<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Rasio Profobilitas | Laba Operasi Bersih Terhadap Total Modal</title>
		<meta name="description" content="Base form control examples">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

		<!--end::Fonts -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<?php echo base_url();?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<?php echo base_url();?>assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo base_url();?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<?php echo base_url();?>assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>assets/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/media/logos/favicon.ico" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="index.html">
					<img alt="Logo" src="<?php echo base_url();?>assets/media/logos/logo-light.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

					<!-- begin:: Aside -->
					<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
						<div class="kt-aside__brand-tools">
							<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
								<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
											<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) " />
											<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) " />
										</g>
									</svg></span>
								<span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
											<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" />
											<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) " />
										</g>
									</svg></span>
							</button>

							<!--
			<button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
			-->
						</div>
					</div>

					<!-- end:: Aside -->

					<!-- begin:: Aside Menu -->
					<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__section ">
									<h4 class="kt-menu__section-text">Analisis Rasio</h4>
									<i class="kt-menu__section-icon flaticon-more-v2"></i>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ratio Likuiditas</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Current Ratio</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>cash-ratio/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Cash Ratio</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>quick-ratio-acid-test-ratio/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Quick Ratio (Acid Test Ratio)</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>working-capital-to-assets-ratio/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Working Capital to Total Assets Ratio</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ratio Leverage</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu"><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>total-debt-to-equity-ratio/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Total Debt to Equity Ratio</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>total-debt-to-total-capital-assets/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Total Debt to Total Capital Assets</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>long-term-debt-to-equity-ratio/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Long Term Debt to Equity Ratio</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>tangible-assets-debt-coverage/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tangible Assets Debt Coverage</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>time-interest-earned-ratio/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Time Interest Earned Ratio</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ratio Aktivitas</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>total-assets-turn-over/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Total Assets Turn Over</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>receivable-turn-over/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Receivable Turn Over</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>average-collection-period/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Average Collection Period</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>inventory-turn-over/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Inventory Turn Over</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>average-days-inventory/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Average Day's Inventory</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>working-capital-turn-over/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Working Capital Turn Over</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ratio Keuntungan</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>gross-profit-margin/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Gross Profit Magrin</span></a></li>
											<li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>operating-income-ratio-operating-profit-margin/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Operating Income Ratio (Operating Profit Margin)</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>operating-ratio/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Operating Ratio</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>net-profit-margin/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Net Profit Margin</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>earning-power-of-total-investment/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Earning Power of Total Investment</span></a></li>
											<li class="kt-menu__item  aria-haspopup="true"><a href="<?php echo base_url();?>net-earning-power-ratio-return-on-investment/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Net Earning Power Ratio Return On Investment</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>rate-of-return-for-the-owners/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Rate of Return for the Owners</span></a></li>
										</ul>
									</div>
								</li>
								<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ratio Profobilitas</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
									<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
										<ul class="kt-menu__subnav">
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>kinerja-laba-operasi/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Kinerja Laba Operasi</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>hasil-pengembalian-atas-total-aktiva-roi/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Hasil Pengembalian Atas Total Aktiva (ROI)</span></a></li>
											<li class="kt-menu__item kt-menu__item--active" aria-haspopup="true"><a href="<?php echo base_url();?>laba-operasi-bersih-terhadap-total-modal/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Laba Operasi Bersih Terhadap Total Modal</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>laba-bersih-terhadap-penjualan/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Laba Bersih Terhadap Penjualan</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>hasil-pengembalian-atas-equitas/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Hasil Pengembalian Atas Equitas</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>tingkat-profitabilitas-marjinal/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Tingkat Profitabilitas Marjinal</span></a></li>
											<li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>hasil-pengembalian-marginal-atas-equitas/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Hasil Pengembalian Marginal Atas Equitas</span></a></li>
										</ul>
									</div>
								</li>
                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ratio Penilaian</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>rasio-harga-laba/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Rasio Harga/Laba</span></a></li>
                                            <li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url();?>rasio-harga-pasar-terhadap-nilai-buku/" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Rasio Harga Pasar Terhadap Nilai Buku</span></a></li>
                                        </ul>
                                <li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>ukuran-efisiensi-operasi/" class="kt-menu__link "><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ukuran Efisiensi Operasi</span></a></li>
                                <li class="kt-menu__item" aria-haspopup="true"><a href="<?php echo base_url();?>ukuran-kebijakan-keuangan/" class="kt-menu__link "><span class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24" />
													<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
													<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000" />
												</g>
											</svg></span><span class="kt-menu__link-text">Ukuran Kebijakan Keuangan</span></a></li>
                                    </div>
                                </li>
							</ul>
						</div>
					</div>

					<!-- end:: Aside Menu -->
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="row">
								<div class="col-md-12">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
                                                    Laba Operasi Bersih Terhadap Total Modal
												</h3>
											</div>
										</div>

										<!--begin::Form-->
										<iframe name="form" style="display:none;"></iframe>
										<form class="kt-form" id="labaoperasibersihterhadaptotalmodal" method="post" target="form">
											<div class="kt-portlet__body">
												<div class="form-group form-group-last">
													<div class="alert alert-secondary" role="alert">
														<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
														<div class="alert-text">
                                                            Kemampuan penggunaan modal untuk menghasilkan laba operasi bersih.
                                                        </div>
													</div>
												</div>
												<div class="form-group">
													<label>Laba Operasi Bersih</label>
													<input type="number" class="form-control" name="labaoperasibersih" id="labaoperasibersih" placeholder="Masukkan Nilai Laba Operasi Bersih">
												</div>
												<div class="form-group">
													<label>Total Modal</label>
													<input type="number" class="form-control" name="totalmodal" id="totalmodal" placeholder="Masukkan Nilai Total Modal">
												</div>
												<div class="form-group">
													<div id="hasil"></div>
													<div id="error"></div>
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button class="btn btn-primary" name="hitung" id="hitung">Hitung</button>
													<button type="reset" class="btn btn-secondary">Reset</button>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>

									<!--end::Portlet-->
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="<?php echo base_url();?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<?php echo base_url();?>assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/components/vendors/bootstrap-switch/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/components/vendors/bootstrap-notify/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo base_url();?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Global App Bundle(used by all pages) -->
		<script src="<?php echo base_url();?>assets/app/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->

		<script type="text/javascript">
			$(document).ready(function() {
				$( "#labaoperasibersihterhadaptotalmodal" ).validate( {
		        rules: {
		            labaoperasibersih: "required",
		            totalmodal: "required"
		        },
		        messages: {
		            labaoperasibersih: "Silakan masukkan nilai laba operasi bersih Anda",
		            totalmodal: "Silakan masukkan nilai total modal Anda"
		        },
		        errorElement: "em",
		        errorPlacement: function ( error, element ) {
		            // Add the `help-block` class to the error element
		            error.addClass( "help-block" );

		            if ( element.prop( "type" ) === "checkbox" ) {
		                error.insertAfter( element.parent( "label" ) );
		            } else {
		                error.insertAfter( element );
		            }
		        },
		        highlight: function ( element, errorClass, validClass ) {
		            $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
		        },
		        unhighlight: function (element, errorClass, validClass) {
		            $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
		        }
		    	} );

		    	$("#hitung").click(function(){
			        if ($("#labaoperasibersih").val()!="" && $("#totalmodal").val()!=""){
			            $.ajax({
			                url : "<?php echo base_url();?>perhitungan/labaoperasibersihterhadaptotalmodal/",
			                type: "POST",
			                dataType:'json',
			                data:$('#labaoperasibersihterhadaptotalmodal').serialize(),
			                beforeSend: function(){
			                    $('#error').html('<div class="alert alert-info"><i class="fa fa-spinner fa-pulse"></i><b> Menghitung ... </b></div>');
			                },
			                success:function(data){
			                	$("#error").html('');
			                    if(data.ACK==1) {
			                    	$("#hasil").append(data.HTML);
			                    } else {
			                    	$("#error").html('<div class="alert alert-danger"><b>Perhitungan Gagal</b></div>');
                    				$('#error').delay(3000).fadeOut(400)
			                    }
			                }
			            });
			        }
			    });
			});
		</script>
	</body>

	<!-- end::Body -->
</html>