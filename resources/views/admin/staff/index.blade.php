@extends('layout.backend.Master')

@section('title', 'Danh sách nhân viên')

@section('main')
     <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Danh sách nhân viên</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                            <li class="breadcrumb-item active">Danh sách nhân viên</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            @foreach ($staff as $st )
                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="avatar-sm mx-auto mb-4" style=" background-size: 100%; background-image: url(/{{$st->staff_image}})">
                                        </div>

                                        <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">{{$st->staff_name}}</a></h5>
                                        <p class="text-muted" style="max-width: 100%; height: 1.6rem; overflow: hidden;">{{$st->staff_types_name}}</p>
                                        <div>
                                            <a href="#" class="badge bg-primary font-size-11 m-1">{{$st->staff_sex}}</a>
                                            <a href="#" class="badge bg-primary font-size-11 m-1"></a>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top">
                                        <div class="contact-links d-flex font-size-20">
                                            <div class="flex-fill">
                                                <a href="#"><i class="bx bx-message-square-dots"></i></a>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="#"><i class="bx bx-pie-chart-alt"></i></a>
                                            </div>
                                            <div class="flex-fill">
                                                <a href="#"><i class="bx bx-user-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


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
            <!-- end main content-->

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
