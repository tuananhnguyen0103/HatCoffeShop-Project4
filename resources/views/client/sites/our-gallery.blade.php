<section class="section-gallery section -pd_bot_0" id="section-gallery">
    <div class="section-overlay-title rellax" data-rellax-speed="-1" data-rellax-percentage="0.5">
        <span>Hình ảnh của quán</span>
    </div>
    <div class="container-fluid">
        <div class="galley clearfix">
        <div class="row">
            <div class="col-md-9 col-md-offset-2">
                <div class="section-title">
                    <h2>Hình ảnh của quán</h2>
                </div>
                <div class="gallery-menu" id="gallery-filter">
                    <ul class="gallery-filter">
                        <?php
                            $numOut =0;
                        ?>
                        <li>
                            <a href="javascript:void(0);" class="active" data-group="all">
                                <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                    l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                </svg>
                                <span>All</span>
                                <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                    l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                </svg>
                            </a>
                        </li>
                        @foreach ($cate as  $c)
                        <?php
                              $numOut++;
                        ?>
                        @if ($numOut<=4)
                        <li>
                            <a href="javascript:void(0);"  data-group="{{$c->id}}">
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
                    </ul>
                    <a href="page_gallery_01.html" data-group="all" class="btn btn-primary btn-lg gallery-filter-all" >View all</a>
                </div>
            </div>
        </div>
            <div class="gallery-content" id="gallery-content">
                <?php
                    $numOut =0;
                ?>
                        <li>
                            <a href="javascript:void(0);" class="active" data-group="all">
                                <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                    l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                </svg>
                                <span>All</span>
                                <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                                <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                                    l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                                </svg>
                            </a>
                        </li>
                @foreach ($post as  $ps)
                <?php
                     $numOut++;
                ?>
                @if ($numOut<=12)
                <a href="{{ url('/') }}/{{$ps->post_image}}" class="gallery-item -width25 -height50" data-groups='["{{$ps->categories_id}}"]' >
                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <p>{{$ps->post_content}}</p>
                        </div>
                    </div>
                    <div class="gallery-img">
                        <div class="img" style="background-image: url({{ url('/') }}/{{$ps->post_image}});"></div>
                    </div>

                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
