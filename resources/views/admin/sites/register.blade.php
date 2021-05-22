
@extends('layout.backend.Auth')
@section('tittle', 'Đăng ký')
@section('content')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Đăng ký miễn phí</h5>
                                    <p>Hãy tạo tài khoản của bạn.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="index.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="needs-validation" novalidate action="{{route('post_register')}}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="useremail" name="user_email" value="{{ old('user_email') }}" placeholder="Enter email" required >
                                    <div class="invalid-feedback">
                                        Please Enter Email
                                    </div>
                                </div>
                                @error('user_email')
                                <div class="alert alert-warning" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label for="username" class="form-label">Tài Khoản</label>
                                    <input type="text" class="form-control" id="username" name="user_name" value="{{ old('user_name') }}" placeholder="Enter username" required>
                                    <div class="invalid-feedback">
                                        Please Enter Username
                                    </div>
                                </div>
                                @error('user_name')
                                <div class="alert alert-warning" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="userpassword" value="{{ old('user_password') }}" name="user_password" placeholder="Enter password" required>
                                    <div class="invalid-feedback">
                                        Please Enter Password
                                    </div>
                                </div>
                                @error('user_password')
                                <div class="alert alert-warning" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" id="userpassword" value="{{ old('user_password_confirm') }}" name="user_password_confirm" placeholder="Enter password" required>
                                    <div class="invalid-feedback">
                                        Please Enter Password Again
                                    </div>
                                </div>
                                @error('user_password_confirm')
                                <div class="alert alert-warning" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mt-4 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <h5 class="font-size-14 mb-3">Sign up using</h5>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-4 text-center">
                                    <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Bạn đã có tài khoản <a href="{{route('admin-login')}}" class="fw-medium text-primary"> Đăng nhập</a> </p>
                        <p>© <script>document.write(new Date().getFullYear())</script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop
