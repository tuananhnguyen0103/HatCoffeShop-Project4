@extends('layout.backend.Master')
@section('main')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Thêm danh mục</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Thương mại điện tử</a></li>
                                    <li class="breadcrumb-item active">Thêm danh mục</li>
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

                                <h4 class="card-title">Thông tin cơ bản </h4>
                                <p class="card-title-desc">Nhập thông tin vào bên dưới</p>

                                <form id="form-add-category" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="productname">Tên danh mục</label>
                                                <input id="productname" name="categories_name" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="productdesc">Miêu tả</label>
                                                <textarea class="form-control" id="productdesc" name="categories_desc" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="control-label">Danh mục cha</label>

                                                <select class="form-control select2" name="categories_id">
                                                    <option value="0">Chọn</option>
                                                    @foreach ($category as $cate )
                                                        <option value="{{$cate->id}}">{{$cate->categories_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                        </div>
                                    </div>

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
@stop
