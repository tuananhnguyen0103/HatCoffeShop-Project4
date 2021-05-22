@extends('layout.backend.Master')
@section('main')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Thêm sản phẩm</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Thêm sản phẩm</li>
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

                                <form id="form-create-product" method="post" action="{{route('create-product-done')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="productname">Tên sản phẩm</label>
                                                <input id="productname" name="product_name" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturername">Đơn Vị Tính</label>
                                                <input id="manufacturername" name="product_unit" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Số luợng nhập</label>
                                                <input id="manufacturerbrand" name="product_imports" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">Giá</label>
                                                <input id="price" name="product_sale_price" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="control-label">Loại sản phẩm</label>
                                                <select class="form-control select2" name="categories_id">
                                                    @foreach ($cate as $c )
                                                        <option value="{{$c->id}}" >{{$c->categories_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="productdesc">Miêu tả</label>
                                                <textarea class="form-control" id="productdesc" rows="5" name="product_description"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                        <p>
                                            <label style="cursor: pointer;">
                                                Upload Image
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
