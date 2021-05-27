@extends('layout.backend.Master')

@section('title', 'Danh sách danh mục')

@section('main')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Data Tables</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Data Tables</li>
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
                            <div class="card-body-title" style="display: flex;justify-content: space-between">
                                <h4 class="card-title">Sản phẩm</h4>
                                <div style="display: flex; ">
                                    <h4 class="card-title" style="margin: 0px 2rem;">Thêm sản phẩm</h4>
                                    <a href="{{url(route('create-product'))}}" target="_blank">
                                        <i class="bx bx-add-to-queue" style="font-size: 1rem"></i>

                                    </a>
                                </div>

                            </div>



                            <table  id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Size</th>
                                        <td >Miêu tả</td>
                                        <th>Số lượng</th>
                                        <th>Giá bán</th>
                                        <th style="width: 10%">Function</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php $stt = 1 ?>
                                    @foreach ($product as $p )


                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $p->product_name }}</td>
                                        <td>{{ $p->product_slug }}</td>
                                        @if ($p->product_size==0)
                                            <td>Vừa</td>
                                        @else
                                            <td>Lớn</td>
                                        @endif
                                        <td>
                                            <textarea style="border: none;overflow: hidden; background-color: inherit;resize: none;"  name="message" rows="5" cols="30" > {{$p->product_description}}</textarea>
                                        </td>
                                        <td>{{ $p->sale_price_amount }}</td>
                                        <td>{{ number_format($p->sale_price_values)}} VNĐ</td>
                                        <td style="display: flex;padding: 58% 20%;">
                                            <a style="width: 50%; " onclick="softDeleteProduct({{$p->id}},this)"><i style="font-size: 20px;" class="mdi mdi-trash-can-outline"></i></a>
                                            <a style="width: 50%; " href="{{(route('update-product', $p->id))}}"><i style="font-size: 20px;" class="mdi mdi-file-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <script >
                console.log({{$product}})
            </script>
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
@section('script')
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
        "language": {
            "lengthMenu": "Hiện _MENU_ dòng",
            "zeroRecords": "Không tìm thấy kết quả",
            "info": "Trang _PAGE_ trên _PAGES_",
            "infoEmpty": "Không tìm thấy bản ghi hợp lệ",
            "infoFiltered": "(Tổng số _MAX_ bản ghi )",
            "search":         "Tìm:",
            "zeroRecords":    "No matching records found",
            "paginate": {
                "first":      "Đầu",
                "last":       "Cuối",
                "next":       "Tiếp",
                "previous":   "Sau"
            },
        }
    } );

} );
</script>
@stop
