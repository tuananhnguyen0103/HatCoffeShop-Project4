@extends('layout.backend.Master')

@section('title', 'Chi tiết đơn hàng')

@section('main')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Thông tin đơn hàng</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('get-all-bill')}}">Danh sách đơn hàng</a></li>
                                <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-5">

                    <!-- end card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-5">Thông tin đơn hàng</h4>
                            <p class="text-muted mb-5">{{$Bill->bill_descriptions}}</p>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <th scope="row"> Tên khách hàng :</th>
                                            <td>{{$Bill->customer_name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">SĐT :</th>
                                            <td>{{$Bill->customer_phone_number}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">E-mail :</th>
                                            <td>{{$Bill->customer_email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Địa chỉ :</th>
                                            <td>{{$Bill->customer_address}}</td>
                                        </tr>
                                        <tr>
                                            <?php
                                                $dateSale= $Bill->bills_sale_day;
                                                $dateSale=date_format(new DateTime($dateSale),"H:i:s d/m/Y");
                                            ?>
                                            <th scope="row">Ngày mua :</th>
                                            <td>{{$dateSale}}</td>
                                        </tr>
                                            @if ($Bill->bill_pay_day==null)
                                                <tr>
                                                    <th scope="row">Ngày thanh toán :</th>
                                                    <td>Chưa thanh toán</td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <?php
                                                    $datePay= $Bill->bill_pay_day;
                                                    $datePay=date_format(new DateTime($datePay),"H:i:s d/m/Y");
                                                    ?>
                                                    <th scope="row">Ngày thanh toán :</th>
                                                    <td>{{$datePay}}</td>
                                                </tr>

                                            @endif


                                    </tbody>
                                </table>

                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            @if ($arrayStaff[0]=="Chưa có nhân viên")
                                            <th scope="row">Nhân viên xác thực:</th>
                                            <td>{{$arrayStaff[0]}}</td>
                                            @else
                                            <th scope="row">Nhân viên xác thực:</th>
                                            <td>{{$arrayStaff[0]->staff_name}}</td>
                                            @endif

                                        </tr>
                                        <tr>
                                            @if ($arrayStaff[1]=="Chưa có nhân viên")
                                            <th scope="row">Nhân viên làm đồ:</th>
                                            <td>{{$arrayStaff[1]}}</td>
                                            @else
                                            <th scope="row">Nhân viên làm đồ:</th>
                                            <td>{{$arrayStaff[1]->staff_name}}</td>
                                            @endif

                                        </tr>
                                        <tr>
                                            @if ($arrayStaff[2]=="Chưa có nhân viên")
                                            <th scope="row">Nhân viên giao hàng:</th>
                                            <td>{{$arrayStaff[2]}}</td>
                                            @else
                                            <th scope="row">Nhân viên giao hàng:</th>
                                            <td>{{$arrayStaff[2]->staff_name}}</td>
                                            @endif

                                        </tr>
                                        <tr>
                                            @if ($arrayStaff[3]=="Chưa có nhân viên")
                                            <th scope="row">Nhân viên chốt đơn:</th>
                                            <td>{{$arrayStaff[3]}}</td>
                                            @else
                                            <th scope="row">Nhân viên chốt đơn:</th>
                                            <td>{{$arrayStaff[3]->staff_name}}</td>
                                            @endif

                                        </tr>
                                        <tr>
                                            @if ($arrayStaff[4]=="Chưa có nhân viên")
                                            <th scope="row">Nhân viên hủy đơn:</th>
                                            <td>{{$arrayStaff[4]}}</td>
                                            @else
                                            <th scope="row">Nhân viên hủy đơn:</th>
                                            <td>{{$arrayStaff[4]}}</td>
                                            @endif


                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <!-- end card -->
                </div>

                <div class="col-xl-7">



                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Chi tiết đơn hàng</h4>
                            <div class="table-responsive">
                                <table class="table table-nowrap table-hover mb-0">
                                    <thead>
                                        <?php
                                            $stt=1;
                                        ?>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Giá bán(VND)</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Tổng cộng(VND)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($BillValue as $billDetail )
                                            <tr>
                                                <th scope="row">{{$stt}}</th>
                                                <td>{{$billDetail->product_name}}</td>
                                                <td style="text-align: right">{{number_format($billDetail->sale_price_values)}}</td>
                                                <td style="text-align: center">{{number_format($billDetail->product_quantity)}}</td>
                                                <td style="text-align: right">{{number_format($billDetail->product_total)}}</td>
                                            </tr>
                                            <?php
                                                $stt++;
                                            ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <h4 style="text-align: right; padding: 2rem 0 0 0" class="card-title mb-4">Tổng thanh toán: {{number_format($Bill->bill_total)}} VND</h4>

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
