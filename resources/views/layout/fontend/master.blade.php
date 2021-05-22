<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ndc.krizantos.com/home_02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 04:19:52 GMT -->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    {{-- <base href="{{ asset('') }}clients/assets/"> --}}
	<link rel="apple-touch-icon" sizes="120x120" href="clients/assets/img/favicons/apple-touch-icon.png">
	{{-- <link rel="icon" type="image/png" sizes="32x32" href="clients/assets/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="clients/assets/img/favicons/favicon-16x16.png"> --}}
	<link rel="manifest" href="clients/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="clients/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="{{ url('/') }}/uploads/image/banners/logo-tittle-2.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


    <link rel="stylesheet" href="{{ url('/') }}/clients/assets/all.css">
    <script src="{{ url('/') }}/clients/assets/js/jquery.min.js"></script>
</head>
<body  data-spy="scroll" data-target=".header"  data-offset="76">
	@include('client.sites.header')
	@yield('main')
    @include('client.sites.footer')
	<div class="scroll_top">
        <i class="fa fa-chevron-up"></i>
    </div>
	<!-- Modal -->
	{{-- <div class="modal fade" id="gallery_modal" tabindex="-1" role="dialog" >
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
    	</button>
	      <div class="modal-body">
	       	<img src="index.html" alt="" class="gallery_modal_img">
	      </div>
	      <div class="gallery_modal-arrows">
	            <a href="javascript:void(0);" class="gallery_modal-arrow prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
	            <a href="javascript:void(0);" class="gallery_modal-arrow next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
	        </div>
	    </div>
	  </div>
	</div> --}}



	<script src="{{ url('/') }}/clients/assets/js/moment-with-locales.min.js"></script>
	<script src="{{ url('/') }}/clients/assets/js/bootstrap-select.min.js"></script>
	<script src="{{ url('/') }}/clients/assets/js/shuffle.min.js"></script>
	<script src="{{ url('/') }}/clients/assets/js/bootstrap.min.js"></script>
	<script src="{{ url('/') }}/clients/assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="{{ url('/') }}/clients/assets/js/slick.min.js"></script>
	<script src="{{ url('/') }}/clients/assets/js/rellax.min.js"></script>
	<script src="{{ url('/') }}/clients/assets/js/slick-lightbox.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSM5q5G28jLqw3fcBKoV5qRLUv_HcCnmM"></script>
	<script src="{{ url('/') }}/clients/assets/js/all.js"></script>
    <script src="{{ url('/') }}/clients/assets/js/login-register.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ url('/') }}/clients/assets/js/script.js"></script>
</body>

<!-- Mirrored from ndc.krizantos.com/home_02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 May 2021 04:19:53 GMT -->
</html>


<!-- 1. gallery-masonry - https://vestride.github.io/Shuffle/
2. bootstrap - http://getbootstrap.com/
3. bootstrap datepicker - https://eonasdan.github.io/bootstrap-datetimepicker/
4. bootstrap select - https://silviomoreto.github.io/bootstrap-select/
5. slick slider  - http://kenwheeler.github.io/slick/ -->
