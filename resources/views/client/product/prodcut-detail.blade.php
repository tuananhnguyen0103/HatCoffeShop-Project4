@extends('layout.fontend.master')
@section('title', 'Hạt Cafe')
@section('main')

<section class="section section-product -pd_top_0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="product">
                    <ol class="breadcrumb product-breadcrump">
                      <li><a href="{{route('get-all-product-clienst')}}">Trang chủ</a></li>
                      <li><a href="{{route('get-menu')}}">Menu</a></li>
                      <li class="active">Chi tiết sản phảm</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-7 ">
                            <div class="product-img_slider clearfix">
                                <div class="product-img_slider_nav" id="product-img_slider_nav">
                                    <img src="{{ url('/') }}/{{$product->product_image}}" alt="">
                                </div>
                                <div class="product-img_slider_for" style="background-image: '{{ url('/') }}/{{$product->product_image}}';">
                                    <img src="{{ url('/') }}/{{$product->product_image}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <h3 class="product-inner_title">{{$product->product_name}}</h3>
                            <span class="product-inner_subtitle">{{$cate->categories_name}}</span>

                            <div class="product-inner_subtitle">
                                Số lượng:
                                <input type="number" name="product_quantity" id="product_quantity" style="border: #555 0.4rem; margin: 1rem 0rem 1rem 3rem; " min="1" max="10" value="1">
                                {{-- <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                <i class="fa fa-star rating_empty" aria-hidden="true"></i>
                                <i class="fa fa-star rating_empty" aria-hidden="true"></i> --}}
                            </div>
                            <div class="product-inner_price_block">
                                {{-- <div class="product-inner_price_old">42.00 <span>$</span></div> --}}
                                <div class="product-inner_price_new">{{ number_format($product->sale_price_values)}} <span>VNĐ</span></div>
                            </div>
                            <p class="product-inner_descr">
                                {{$product->product_description}}
                            </p>
                            <a  id="add_to_cart_detail" class="btn btn-md btn-primary btn-upper btn-ico"><span>Thêm giỏ hàng</span><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a href="{{route('user-check-out')}}" class="btn btn-md btn-primary btn-ico btn-upper -mg_rt10">
                                <span>Đặt hàng</span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-inner_tabs">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#product-inner_tab1" aria-controls="product-inner_tab1" role="tab" data-toggle="tab">Miêu tả</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active fade in" id="product-inner_tab1">
                            <h5 class="product-descr_title">{{$product->product_name}}</h5>
                            <p>{{$product->product_description}}</p>
                        </div>
                        {{-- <div role="tabpanel" class="tab-pane" id="product-inner_tab2">
                            <table class="product-info_table">
                                <tbody>
                                  <tr>
                                    <td class="product-info_title">Product Dimensions</td>
                                    <td>28.5 x 15.5 x 10.5 cm</td>
                                  </tr>
                                  <tr>
                                    <td class="product-info_title">Weight</td>
                                    <td>1 Kilograms</td>
                                  </tr>
                                  <tr>
                                    <td class="product-info_title">Country of origin</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td class="product-info_title">Brand</td>
                                    <td>Marcafe</td>
                                  </tr>
                                  <tr>
                                    <td class="product-info_title">Format</td>
                                    <td>Coffee whole bean</td>
                                  </tr>
                                  <tr>
                                    <td class="product-info_title">Speciality</td>
                                    <td>Gluten Free</td>
                                  </tr>
                                  <tr>
                                    <td class="product-info_title">Manufacturer/Producer</td>
                                    <td>Marcafe</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="product-inner_tab3">
                            <div class="product-comment">
                                <div class="comment-item">
                                    <h5 class="comment-title">Great single origin coffee</h5>
                                    <div class="comment-rating_box">
                                        <span class="comment-rating_title">Rating</span>
                                        <div class="comment-rating">
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_empty" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_empty" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="comment-content_box">
                                        <p class="comment-descr"> This coffee is great. Everyone I serve it to loves it and asks where I get it from.</p>
                                        <div class="comment-detail">
                                            <div class="comment-author">Review by <strong>Christopher</strong></div>
                                            <div class="comment-date">Posted on <span>3/6/17</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item">
                                    <h5 class="comment-title">The Absolute Best</h5>
                                    <div class="comment-rating_box">
                                        <span class="comment-rating_title">Rating</span>
                                        <div class="comment-rating">
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                            <i class="fa fa-star rating_full" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="comment-content_box">
                                        <p class="comment-descr">Santa Marta is the absolute closest thing to real Colombian coffee (as in straight from Colombia) that I have ever had. It blows all the others out of the water.</p>
                                        <div class="comment-detail">
                                            <div class="comment-author">Review by <strong>Jessica</strong></div>
                                            <div class="comment-date">Posted on <span>3/6/17</span></div>
                                        </div>
                                    </div>
                                </div>
                                <form action="#" class="comment-form form-horizontal">
                                    <h5 class="comment-form_title">Your comment</h5>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Your Rating*</label>
                                        <div class="col-sm-10">
                                            <div id="rastars" class="comment-form_rating"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment_Nickname" class="col-sm-2 control-label">Nickname*</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="comment_Nickname" placeholder="Your Nickname" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment_Summary" class="col-sm-2 control-label">Summary*</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="comment_Summary" placeholder="Your Summary" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment_review" class="col-sm-2 control-label">Review*</label>
                                        <div class="col-sm-10">
                                            <textarea placeholder="Your review" id="comment_review" required class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <input type="submit" class="btn btn-md btn-primary" value="Submit Review">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <span class="product-more">
                    SẢN PHẨM LIÊN QUAN
                </span>
                <div class="shop">
                    <div class="shop-grid -col-4">
                        <div class="row">
                            <?php
                                $num = 0
                            ?>
                            @foreach ($productList as $pro )
                                @if (($pro->id != $product->id) && $num<=2 && ($pro->categories_id == $cate->id ))
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="shop-item">
                                        <a href="{{route('product-detail',['slug'=>$pro->product_slug])}}" class="shop-img">
                                            <img src="{{ url('/') }}/{{$pro->product_image}}" alt="">
                                        </a>
                                        <h5 class="shop-title">{{$pro->product_name}}</h5>
                                        <p style="    max-height: 21rem;overflow: hidden;" class="shop-descr">{{$pro->product_description}}</p>
                                        <div class="shop-content_bot clearfix">
                                            <div class="shop-price">{{ number_format($product->sale_price_values)}} <span>VND</span></div>
                                            <a href="{{route('product-detail',['slug'=>$pro->product_slug])}}" class="shop-buy"><span>Xem</span><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $num ++;
                                ?>
                                @endif

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#add_to_cart_detail').click(function(){
        var data = {
        'id':'{{$product->id}}',
        'product_quantity': $('#product_quantity').val(),
        "_token":'{{ csrf_token() }}'
    }
    $.ajax({
        type:'post',
        url:'/update-cart-product-detail',
        data: data,
        success:function(resultController){
            $.ajax({
                type:'get',
                url:'/get-amout-cart',
                success:function(returnVal){
                    $('#cart-product').html(returnVal)
                    console.log(returnVal);
                },
                error:function(returnVal){
                    console.log(returnVal);
                }
            })
            //console.log(resultController);
           //$(rowTalbe).parent().parent().remove();
            toastr.success("Thêm thành công");
            //window.location.reload();
            console.log(resultController);
        },
        error:function(resultController){
            console.log(resultController);
            // var k=resultController.responseJSON;
            // for(var j in k.errors)
            //toastr.error(k.errors[j][0]);
            toastr.error("Thêm không thành");
        }
    })
    })
</script>
<footer class="footer">
    <div class="footer-copyright text-center">
        Next Door Coffee 2018
    </div>
</footer>


@stop
