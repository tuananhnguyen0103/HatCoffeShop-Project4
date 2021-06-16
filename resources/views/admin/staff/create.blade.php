@extends('layout.backend.Master')
@section('main')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Thêm nhân viên</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Nhân viên</a></li>
                                    <li class="breadcrumb-item active">Thêm nhân viên</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Thông tin cơ bản</h4>
                                <p class="card-title-desc">Nhập thông tin phía dưới</p>

                                <form id="form-create-staff" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="productname">Tên nhân viên</label>
                                                <input id="name-staff" name="staff_name" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturername">Tài khoản</label>
                                                <input id="account-staff" name="staff_account" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Mật khẩu</label>
                                                <input id="password-staff" name="staff_password" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Nhập lại mật khẩu</label>
                                                <input id="password-check-staff" name="staff_password" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">SĐT</label>
                                                <input id="phone-staff" name="staff_phone" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="control-label">Chức vụ</label>
                                                <select class="form-control select2" name="staff_types_id">
                                                    @foreach ($staffType as $sTpye )
                                                        <option value="{{$sTpye->id}}" >{{$sTpye->staff_types_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">Giới tính</label>
                                                <select class="form-control select2" name="staff_sex">
                                                        <option value="Nam" >Nam</option>
                                                        <option value="Nữ" >Nữ</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">Email</label>
                                                <input id="email-staff" name="staff_email" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">Ngày sinh</label>
                                                <input id="staff-birthdays" name="staff_birthday" type="date" min="1980-01-01" max="2018-12-31" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="productdesc">Địa chỉ</label>
                                                <textarea class="form-control" id="address-staff" rows="5" name="staff_address"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                        <p>
                                            <label style="cursor: pointer;">
                                                Chọn ảnh
                                            </label>
                                            <br>
                                            <label for="file">
                                                <i style="cursor: pointer;" class="display-4 text-muted bx bxs-cloud-upload"></i>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="mb-3">

                                    </div>
                                    <p><img id="output" width="200" /></p>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        </script>
@stop
