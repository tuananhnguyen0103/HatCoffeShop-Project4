@extends('layout.fontend.master')
@section('title', 'Hạt Cafe')
@section('main')
<section class="section-welcome section -full-height -page_404" style="background-image: linear-gradient(to top , rgba(57, 236, 12, 0.5) 0%, rgba(5, 148, 48, 0.5) 100%) , url(img/ico_coffe_beans.png) ,  url(img/bg-welcome.png); ">
    <div class="content">
        <div class="page_404-block">
            <div class="page_404-title" style="color: rgba(10, 151, 57, 0.945)">Hạt cảm ơn!</div>
					<p class="page_404-descr">Cảm ơn vì đã tin tưởng</p>
					<a href="{{route('get-all-product-clienst')}}" class="btn btn-primary btn-xl">Quay lại</a>
        </div>
    </div>
</section>
@stop
