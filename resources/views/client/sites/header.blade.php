<div style="background-size: 100%; background-position: center; background-image: linear-gradient(to top , rgba(0,0,0, 0.5) 0%, rgba(0,0,0,0.5) 100%) , url({{ url('/') }}/uploads/image/banners/banner-1.jpg);">
    <header class="header -scroll_white">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{route('get-all-product-clienst')}}">
                  <img src="/uploads/image/banners/logo-tittle-light.png" alt="" class="logo_black" >
                  <img src="/uploads/image/banners/logo-tittle-dark.png" alt="" class="logo_white" >
              </a>
            </div>
            <div class="collapse navbar-collapse" id="main_navbar">
              <ul class="nav navbar-nav navbar-right" >
                <li>
                    <a  href="{{route('get-menu')}}">
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                        <span>Menu</span>
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                    </a>
                </li>
                {{-- <li>
                    <a href="#section-about">
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                        <span>About us</span>
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#section-gallery">
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                        <span>Our gallery</span>
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#section-contacts">
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                        <span>Get in touch</span>
                        <svg version="1.1" class="ico-square" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 9.2 9.2" enable-background="new 0 0 9.2 9.2" xml:space="preserve">
                        <path fill="#FFD03B" d="M5.8,8.7C5.5,9,5,9.2,4.6,9.2S3.7,9,3.4,8.7L0.5,5.8c-0.7-0.7-0.7-1.7,0-2.4l2.9-2.9c0.7-0.7,1.7-0.7,2.4,0
                            l2.9,2.9c0.7,0.7,0.7,1.7,0,2.4L5.8,8.7z"/>
                        </svg>
                    </a>
                </li> --}}
                <li>
                    <a href="{{route('get-cart')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span class="cart-products" id="cart-product">{{ Cart::Content()->count() }}</span>
                    </a>
                </li>
                <li>
                {{-- </button> --}}
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <section class="section section-title_top"  ">
        <div class="container-fluid">
            <div class="menu-title_block">
                <h2>Hạt cafe</h2>
            </div>
        </div>
    </section>
</div>
{{-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
            <h4>Login</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="email1"placeholder="Your email address...">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password1" placeholder="Your password...">
              </div>
              <button type="button" class="btn btn-info btn-block btn-round">Login</button>
            </form>

            <div class="text-center text-muted delimiter">or use a social network</div>
            <div class="d-flex justify-content-center social-buttons">
              <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="fab fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fab fa-facebook"></i>
              </button>
              <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                <i class="fab fa-linkedin"></i>
              </button>
            </di>
          </div>
        </div>
      </div>
        <div class="modal-footer d-flex justify-content-center">
          <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
        </div>
    </div>
  </div> --}}
