@extends('layout.fontend.master')
@section('title', 'Hạt Cafe')
@section('main')

<section class="section section-shop -cart">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ol class="breadcrumb product-breadcrump">
                  <li><a href="home_01.html">Home</a></li>
                  <li class="active">Cart</li>
                </ol>
                <form id="cart-client">
                    @csrf
                    <div class="cart">
                        <div class="cart-table">
                            <div class="row cart-table_title">
                                {{-- <div class="col-sm-1">
                                    STT
                                </div> --}}
                                <div class="col-sm-2 cart-product_img" style="text-align: center" >
                                    Ảnh
                                </div>
                                <div class="col-sm-4 cart-product_title-block -center">
                                    Sản phẩm
                                </div>
                                <div class="col-sm-2 cart-product_price -center">
                                    Giá (VND)
                                </div>
                                <div class="col-sm-1 cart-product_quantity -center">
                                    Số lượng
                                </div>
                                <div class="col-sm-2 cart-product_total-price -center">
                                    Thành tiền (VND)
                                </div>
                                <div class="col-sm-1 cat-product_del">

                                </div>
                            </div>
                            <?php
                                $stt = 1;
                            ?>
                            @foreach (Cart::Content() as $item)
                            <div class="row cart-table_descr" >
                                {{-- <div class="col-sm-1 col-xs-8 cart-product_price" >
                                    <div class="cart-price" >
                                        {{$stt}}
                                    </div>
                                </div> --}}
                                <div class="col-sm-2 col-xs-4  cart-product_img" >
                                    <div class="cart-img" style="padding-right: 0;">
                                        <img src="{{$item->options->img}}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-8 cart-product_title-box -center">
                                    <div class="cart-product">
                                        <h5 class="cart-product_title">{{$item->name}}</h5>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-8 cart-product_price -center">
                                    <div class="cart-price cassh" >
                                        <p class="cash">
                                            {{ number_format($item->price) }}
                                        </p>

                                    </div>
                                </div>

                                    <div class="col-sm-1 cart-product_quantity -center">
                                        <div>
                                            {{-- <input type="hidden" name="product_id_{{$item->id}}" value="{{$item->id}}" style="display: none"> --}}
                                            {{-- Đặt tên cho thẻ chứa số lượng là mảng 2 chiều gồm:
                                            id của sản phẩm trong giỏ hàng "là 1 chuỗi tự sinh"
                                            Số lượng của sản phẩm trong giỏ hàng --}}
                                            <input type="number" name="{{$item->rowId}}" class="update-quantity"  min="1" max="10" value="{{ number_format($item->qty) }}">
                                            {{-- <input type="number" name="{{$item->qty}}" min="1" max="10" value="{{ number_format($item->qty) }}"> --}}
                                        </div>
                                    </div>
                                    <div class="col-sm-2  cart-product_total-price -center">
                                        <div class="cart-price -strong">
                                             <p class="total-in-product">{{ number_format($item->price*$item->qty, 0, '', ',') }}</p>
                                    </div>


                                </div>
                                <div class="col-sm-1  cat-product_del -center">
                                    <div>
                                        {{-- <a href="{{route('delete-product-cart',['rowId'=>$item->rowId])}}" class="cart-close">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a> --}}
                                        <a onclick="deleteProductInCart('{{$item->rowId}}',this)" class="cart-close">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                           </div>
                           <?php
                                $stt++;
                            ?>
                            @endforeach

                        </div>
                        <div class="cart-checkout_wrapper">
                            <div class="cart-checkout">
                                <a href="{{route('user-check-out')}}" class="btn btn-md btn-primary btn-ico btn-upper -mg_rt10">
                                    <span>Đặt hàng</span>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>

                                {{-- <a onclick="" class="btn btn-md btn-primary btn-ico btn-upper -mg_rt10">
                                    <span>Cập nhật giỏ hàng</span>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a> --}}
                                <button type="submit" class="btn btn-secondary btn-md btn-upper">Cập nhật giỏ hàng</button>
                                <div class="cart-total">
                                    <h5 class="cart-total_title">CART TOTALS:</h5>
                                    <div class="cart-total_price">
                                        {{ number_format(str_replace(',', '', Cart::priceTotal()), 0, '', ',') }}VND
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop
