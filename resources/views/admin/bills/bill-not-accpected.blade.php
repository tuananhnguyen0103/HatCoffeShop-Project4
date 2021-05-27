@extends('layout.backend.Master')

@section('title', 'Danh sách đơn hàng chưa xác thực')

@section('main')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Danh sách đơn hàng chưa xác thực</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                <li class="breadcrumb-item active"></li>
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
                                <h4 class="card-title">Danh sách đơn hàng</h4>
                                <div style="display: flex; ">
                                    <h4 class="card-title" style="margin: 0px 2rem;"></h4>
                                    <a href="{{url(route('create-product'))}}" target="_blank">
                                        <i class="bx bx-add-to-queue" style="font-size: 1rem"></i>

                                    </a>
                                </div>

                            </div>



                            <table  id="example" class="table table-striped table-bordered" style="width:100%; ">
                                <thead>
                                    <tr>

                                        <th >STT</th>
                                        <th >Khách Hàng</th>
                                        <th >Điện thoại</th>
                                        <th >Ngày mua</th>
                                        <th >Thành tiền</th>
                                        <th >Function</th>
                                    </tr>
                                    </thead>

                                    <tbody >
                                        <?php $stt = 1 ?>
                                    @foreach ($listBill as $bill )


                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $bill->customer_name }}</td>
                                        <td>{{ $bill->customer_phone_number }}</td>
                                        <?php
                                            $date= $bill->bills_sale_day;
                                            $date=date_format(new DateTime($date),"H:i:s d/m/Y");
                                        ?>
                                        <td>{{$date}}</td>
                                        <td style="text-align: right">{{ number_format($bill->bill_total)}} VND</td>
                                        <td style="display: flex;">
                                            <a style="width: 50%; padding: 0rem 0.5rem 0rem 0rem; " href="{{(route('get-bill-detail', $bill->id))}}"><i style="font-size: 20px;" class="far fa-list-alt"></i></a>
                                            <a style="width: 50%; padding: 0rem 0.5rem 0rem 0rem; " href="{{route('set-bill-accpected',$bill->id)}}"><i style="font-size: 20px;" class="far fa-check-circle"></i></a>
                                            <a style="width: 50%; padding: 0rem 0.5rem 0rem 0rem; " href="{{route('set-bill-cancel',$bill->id)}}"><i style="font-size: 20px;" class="fas fa-trash-alt"></i></a>
                                            {{-- <a style="width: 50%; padding: 0rem 0.5rem 0rem 0rem; " href="{{(route('get-bill-detail', $bill->id))}}"><i style="font-size: 20px;" class="far fa-list-alt"></i></a>
                                            <a style="width: 50%; padding: 0rem 0.5rem 0rem 0rem; " href="{{route('set-bill-process',$bill->id)}}"><i style="font-size: 20px;" class="fas fa-shipping-fast"></i></a>
                                            <a style="width: 50%; padding: 0rem 0.5rem 0rem 0rem; " href="{{route('set-bill-done',$bill->id)}}"><i style="font-size: 20px;" class="far fa-check-circle"></i></a>

                                            {{-- <a style="width: 50%; " href="{{(route('update-product', $p->id))}}"><i style="font-size: 20px;" class="mdi mdi-file-edit"></i></a> --}}
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
