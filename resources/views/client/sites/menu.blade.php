
<section class="section-menu section" id="section-menu">
    <div class="section-overlay-title -nowrap rellax" data-rellax-speed="1" data-rellax-percentage="0.5">
        <span>Menu</span>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 half-col-pd-rt ">
                <div class="section-title">
                    <h2>Menu</h2>
                </div>
                <p class="section-descr">
                    Sự lựa chọn của bạn
                </p>
                <div class="tabMenu">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs text-center" role="tablist">
                        <?php

                            $numOut =0;
                        ?>
                          @foreach ($cate as  $c)
                          <?php
                                $numOut++;

                          ?>
                            @if ($numOut==1)
                                <li role="presentation" class="active">
                                    <a href="#tab_{{$c->id}}" aria-controls="tab_{{$c->id}}" role="tab" data-toggle="tab">
                                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                        </svg>
                                        <span>{{$c->categories_name}}</span>
                                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                        </svg>
                                    </a>
                                </li>
                            @elseif ($numOut<=4)
                                <li role="presentation">
                                    <a href="#tab_{{$c->id}}" aria-controls="tab_{{$c->id}}" role="tab" data-toggle="tab">
                                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                        </svg>
                                        <span>{{$c->categories_name}}</span>
                                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                        </svg>
                                    </a>
                                </li>
                            @endif
                          @endforeach


                        <li class="tabMenu-all-wrapper">
                             <a href="{{route('get-menu')}}" class="btn btn-grey btn-md tabMenu-all">Menu</a>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <?php
                            $numOut =0;
                        ?>
                        @foreach ($cate as  $c)
                            <?php
                                $numOut++;
                            ?>
                            @if ($numOut<=4 && $numOut==1)
                                <div role="tabpanel" class="tab-pane active" id="tab_{{$c->id}}">
                                <h3 class="tabMenu-subtitle">{{$c->categories_name}}</h3>
                                <div class="tabMenu-slider tab_{{$c->id}}">
                                    <div class="tabMenu-slider_item">
                                        @foreach ($product as $p )
                                            @if ($c->id==$p->categories_id)
                                            <li class="tabMenu-item clearfix">
                                                <div class="tabMenu-content">
                                                    <div class="tabMenu-img">
                                                        <a href="{{route('product-detail',['slug'=>$p->product_slug])}}">  <img src="{{$p->product_image}}" alt=""></a>
                                                        {{-- <a href="{{route('product-detail')}}">  <img src="{{$p->product_image}}" alt=""></a> --}}
                                                    </div>
                                                    <div class="tabMenu-content_inner">
                                                        <p class="tabMenu-content-title">{{$p->product_name}}</p>
                                                        <p class="tabMenu-content-descr">{{$p->product_description}}</p>
                                                    </div>
                                                </div>
                                                <div class="tabMenu-price">
                                                    {{-- Dùng thẻ a thông qua href để gọi route trong laravel --}}
                                                    {{-- <a style="text-align: center;" href="{{route('update-cart',['id'=>$p->id])}}"><i class="fas fa-cart-arrow-down"></i></a> --}}
                                                    <a style="text-align: center;"  onclick="add_to_cart({{$p->id}})" ><i class="fas fa-cart-arrow-down"></i></a>
                                                    <span>{{ number_format($p->sale_price_values)}} VNĐ</span>
                                                </div>
                                            </li>
                                            @endif

                                        @endforeach
                                        <ul class="tabMenu-list">


                                        </ul>
                                    </div>

                                </div>
                                </div>


                            @else
                                <div role="tabpanel" class="tab-pane" id="tab_{{$c->id}}">
                                    <h3 class="tabMenu-subtitle">{{$c->categories_name}}</h3>
                                    <div class="tabMenu-slider tab_{{$c->id}}">
                                        <div class="tabMenu-slider_item">
                                            @foreach ($product as $p )
                                                @if ($c->id==$p->categories_id)
                                                <li class="tabMenu-item clearfix">
                                                    <div class="tabMenu-content">
                                                        <div class="tabMenu-img">
                                                            <a href="{{route('product-detail',['slug'=>$p->product_slug])}}">  <img src="{{$p->product_image}}" alt=""></a>
                                                            {{-- <a href="{{route('product-detail')}}">  <img src="{{$p->product_image}}" alt=""></a> --}}
                                                        </div>
                                                        <div class="tabMenu-content_inner">
                                                            <p class="tabMenu-content-title">{{$p->product_name}}</p>
                                                            <p class="tabMenu-content-descr">{{$p->product_description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="tabMenu-price">
                                                         {{-- Dùng thẻ a thông qua href để gọi route trong laravel --}}
                                                        {{-- <a style="text-align: center;" href="{{route('update-cart',['id'=>$p->id])}}" ><i class="fas fa-cart-arrow-down"></i></a> --}}
                                                        {{-- <a style="text-align: center;" href="{{route('update-cart',['id'=>$p->id])}}"><i class="fas fa-cart-arrow-down"></i></a> --}}
                                                    <a style="text-align: center;"  onclick="add_to_cart({{$p->id}})" ><i class="fas fa-cart-arrow-down"></i></a>
                                                    <span>{{ number_format($p->sale_price_values)}} VNĐ</span>
                                                    </div>
                                                </li>
                                                @endif

                                            @endforeach
                                            <ul class="tabMenu-list">


                                            </ul>
                                        </div>

                                </div>
                                </div>
                            @endif
                         @endforeach

                      </div>
                    </div>
            </div>
        </div>
    </div>
</section>
