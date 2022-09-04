<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
        <title>{{ config('app.name', 'CelebrateMe') }}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="shortcut icon" href="{{ asset('theme/assets/Logo-mobile.png') }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->


        <link href="{{ asset('Backend/demo1/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href=" {{ asset('Backend/demo1/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
        <!--begin::Main-->

        @yield('content')

        <script src="{{ asset('Backend/demo1/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('Backend/demo1/dist/assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('Backend/demo1/dist/assets/js/custom/authentication/sign-in/general.js') }}"></script>
	</body>
	<!--end::Body-->
</html>
