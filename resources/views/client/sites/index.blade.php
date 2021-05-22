@extends('layout.fontend.master')
@section('title', 'Hạt Cafe')
@section('main')
<div class="wrapper-content">

    {{-- <a href="{{route('user-mail')}}">  Gửi mail dmb</a> --}}
    @include('client.sites.menu')
    <section class="section-about section -half -overlay50 -media1250" id="section-about">
        <div class="section-overlay-title rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
            <span>About us</span>
        </div>
        <div class="container-fluid -pd_bot_80">
            <div class="row ">
                <div class="col-md-4 half-col-pd-lt pd-sm0 col-md-push-6 -media1250_width100">
                    <div class="section-title">
                        <h2>Our story</h2>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>
                </div>
                <div class="col-md-4 col-md-offset-2 col-md-pull-4 -media1250_none -media767_hide">
                    <div class="about-img rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
                        <div class="resp_img" style="background-image: url(img/img-coffe_shop.png); "></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 half-col-pd-rt pd-sm0 -media1250_width100">
                    <div class="section-title">
                        <h2>What we do</h2>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>
                </div>
                <div class="col-md-4 -media1250_none -media767_hide">
                    <div class="about-img rellax" data-rellax-speed="1" data-rellax-percentage="0.5">
                        <div class="resp_img" style="background-image: url(img/fake_img_grey_a7.png); "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('client.sites.our-gallery')
    <section class="section section-social -pd_bot_0" id="section-social">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                         <a href="https://www.instagram.com/hatcafe882020/"><h2>Instagram </h2></a>
                    </div>
                    <div class="section-descr -verticalMd">
                            At vero eos et accusamus et iusto odio dignissimos ducmus qui blanditiis praesentium voluptatum dele
                    </div>
                    <a href="https://www.instagram.com/hatcafe882020/" class="btn btn-primary btn-md -verticalMd">View on Instagram</a>
                </div>
            </div>
            <div class="social">
                <div class="row social-row">
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_coffe.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_coffe.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_coffe.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_coffe.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_coffe.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_coffe.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_green.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_green.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_green.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_green.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_green.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_green.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_pair.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_pair.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_pair.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_pair.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_pair.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/fake_img_grey_a7.png);"></div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-6">
                        <div class="social-item">
                            <div class="img" style="background-image: url(img/img-cup_pair.png);"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-copyright text-center">
            Next Door Coffee 2018
        </div>
    </footer>
</div>
@if (Session::get('error'))
<script>
    $(document).ready(function() {
        toastr.error('{{Session::get('error')}}');
});

</script>
@endif
@stop


