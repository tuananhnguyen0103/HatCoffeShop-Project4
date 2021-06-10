<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>PDF Demo in Laravel 7</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
</head>
  <body>
    <p  style="text-align: center">Chi tiết đơn hàng</p>
    <table class="table table-nowrap table-hover mb-0">
        <thead>
            <?php
                $stt=1;
            ?>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sản Phẩm </th>
                <th scope="col">Giá Bán(VND)</th>
                <th scope="col">Số lượng </th>
                <th scope="col">Tổng Cộng(VND)</th>
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
    <h4 style="text-align: right; padding: 2rem 0 0 0" class="card-title mb-4">Tong Thanh Toan: {{number_format($Bill->bill_total)}} VND</h4>

    <div class="card-body">
        <p>Thông tin đơn hàng</p>
        <p class="text-muted mb-5">Thông tin chi tiếtt: {{$Bill->bill_descriptions}}</p>
        <div class="table-responsive">
            <table class="table table-nowrap mb-0">
                <tbody>
                    <tr>
                        <th scope="row"> Tên Khách Hàng:</th>
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
                        <th scope="row">Dia Chi :</th>
                        <td>{{$Bill->customer_address}}</td>
                    </tr>
                    <tr>
                        <?php
                            $dateSale= $Bill->bills_sale_day;
                            $dateSale=date_format(new DateTime($dateSale),"H:i:s d/m/Y");
                        ?>
                        <th scope="row">Ngay Mua :</th>
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

    </div>
  </body>
</html>
