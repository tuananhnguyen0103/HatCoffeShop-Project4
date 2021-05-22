@extends('layout.fontend.master')
@section('title', 'Hạt Cafe')
@section('main')

    {{-- <section class="section-welcome section -full-height" style="background-image: linear-gradient(to top , rgba(0,0,0, 0.5) 0%, rgba(0,0,0,0.5) 100%) ,  url(clients/assets/img/bg-welcome.png);">
        <div class="content">
            <div class="logo-center">
                <img src="clients/assets/img/logo_white_lg.png" alt="">
            </div>
        </div>
    </section> --}}
<section class="menu-section_masonry">
    <div class="container-fluid">
        <ul class="menu-filter_menu">
            <li>
                <a href="javascript:void(0);" class="active" data-group="all">
                    <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                        l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z" />
                    </svg>
                    <span>All</span>
                    <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                        l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z" />
                    </svg>
                </a>
            </li>
            @foreach ($cate as $c)
            <li>
                <a href="javascript:void(0);" data-group="{{$c->categories_name}}">
                    <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                        l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z" />
                    </svg>
                    <span>{{$c->categories_name}}</span>
                    <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                        l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z" />
                    </svg>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="menu-grid" id="menu-grid">
            <?php
                $numOut =0;
            ?>
            @foreach ($cate as  $c)
                <?php
                    $numOut++;
                ?>
                @if ($numOut%2==0)
                    <div class="menu-grid_item -right" data-groups='["{{$c->categories_name}}"]'>
                        <div class="menu-grid_content">
                            <div class="tabMenu ">
                                <div class="menu-title_block -md">
                                    <h2>{{$c->categories_name}}</h2>
                                    <p>{{$c->categories_description}}</p>
                                </div>
                                <div class="tabMenu-slider">
                                    <div class="tabMenu-slider_item">
                                        <ul class="tabMenu-list ">
                                            @foreach ($product as $p )
                                            @if ($c->id==$p->categories_id)
                                            <li class="tabMenu-item clearfix">
                                                <div class="tabMenu-content">
                                                    <div class="tabMenu-img">
                                                        <a href="{{route('product-detail',['slug'=>$p->product_slug])}}"><img src="{{$p->product_image}}" alt=""></a>

                                                    </div>
                                                    <div class="tabMenu-content_inner">
                                                        <p class="tabMenu-content-title">{{$p->product_name}}</p>
                                                        <p class="tabMenu-content-descr">{{$p->product_description}}</p>
                                                    </div>
                                                </div>
                                                <div class="tabMenu-price">

                                                    <a style="text-align: center;"  onclick="add_to_cart({{$p->id}})" ><i class="fas fa-cart-arrow-down"></i></a>
                                                    <span style="font-size:1.5rem">{{ number_format($p->sale_price_values)}} VNĐ</span>
                                                </div>
                                            </li>
                                            @endif

                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-grid_img_wrapper">
                            <div class="menu-grid_img">
                                <div class="img" style="background-image: url('{{$c->categories_images}}');">
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="menu-grid_item" data-groups='["{{$c->categories_name}}"]''>
                        <div class="menu-grid_content">
                            <div class="tabMenu ">
                                <div class="menu-title_block -md">
                                    <h2>{{$c->categories_name}}</h2>
                                    <p>{{$c->categories_description}}</p>
                                </div>
                                <div class="tabMenu-slider">
                                    <div class="tabMenu-slider_item">
                                        <ul class="tabMenu-list ">
                                            @foreach ($product as $p )
                                            @if ($c->id==$p->categories_id)
                                            <li class="tabMenu-item clearfix">
                                                <div class="tabMenu-content">
                                                    <div class="tabMenu-img">
                                                        <a href="{{route('product-detail',['slug'=>$p->product_slug])}}"><img src="{{$p->product_image}}" alt=""></a>

                                                    </div>
                                                    <div class="tabMenu-content_inner">
                                                        <p class="tabMenu-content-title">{{$p->product_name}}</p>
                                                        <p class="tabMenu-content-descr">{{$p->product_description}}</p>
                                                    </div>
                                                </div>
                                                <div class="tabMenu-price">

                                                    <a style="text-align: center;"  onclick="add_to_cart({{$p->id}})" ><i class="fas fa-cart-arrow-down"></i></a>
                                                    <span style="font-size:1.5rem">{{ number_format($p->sale_price_values)}} VNĐ</span>
                                                </div>
                                            </li>
                                            @endif

                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-grid_img_wrapper">
                            <div class="menu-grid_img">
                                <div class="img" style="background-image: url({{$c->categories_images}});"></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer-copyright text-center">
        Next Door Coffee 2018
    </div>
</footer>
@stop
