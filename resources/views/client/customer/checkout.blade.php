@extends('layout.fontend.master')
@section('title', 'Hạt Cafe')
@section('main')
<div class="checkout" style="padding: 3rem">
    <form action="{{route('user-order')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <h5 class="checkout-title">Chi tiết hóa đơn</h5>
                <div class="checkout-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="checkout-form_name">Họ và tên</label>
                                <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name') }}" id="checkout-form_name" placeholder="Họ và tên *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="checkout-form_email">Email</label>
                                <input type="text" name="customer_email" class="form-control" value="{{ old('customer_email') }}" id="checkout-form_email" placeholder="Email *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="checkout-form_address">Địa chỉ giao hàng</label>
                                <input type="text" name="customer_address" class="form-control" value="{{ old('customer_address') }}" id="checkout-form_address" placeholder="Địa chỉ giao hàng *" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="checkout-form_phone">Số điện thoại</label>
                                <input type="text" name="customer_phone_number" class="form-control" value="{{ old('customer_phone_number') }}" id="checkout-form_phone" placeholder="Số điện thoại *" required>
                            </div>
                        </div>
                    </div>
                    <h5 class="checkout-title">Thông tin chi tiết</h5>
                    <div class="form-group">
                        <textarea class="form-control" name="customer_bill_descriptions" placeholder="Thông tin chi tiết"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4 half-col-pd-lt">
                <h5 class="checkout-title">Danh sách sản phẩm</h5>
                <table class="table checkout-table">
                    <thead>
                      <tr>
                        <th style="width: 45%;" class="text-left">Product</th>
                        <th style="width: 35%;"></th>
                        <th style="width: 20%;" class="text-center">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach (Cart::Content() as $item)
                      <tr>
                        <td style="width: 45%;" >
                            <div class="checkout-table_product">
                                <span class="checkout-table_product-title">{{$item->name}}</span>
                                <span class="checkout-table_product-subtitle"></span>
                            </div>
                        </td>
                        <td style="width: 35%;">{{$item->qty}}</td>
                        <td style="width: 20%;" class="text-center">
                            <span class="checkout-table_price">{{$item->price}}</span>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="checkout-total clearfix">
                    <h5 class="checkout-total_title">Thanh toán:</h5>
                    <div class="checkout-total_price">{{ number_format(str_replace(',', '', Cart::priceTotal()), 0, '', ',') }}VND</div>
                </div>
                
                <button type="submit"  class="btn btn-md btn-primary btn-ico btn-upper -mg_rt10" value='place order'>
                    <span>Đặt hàng</span>
                </button>
            </div>
        </div>
    </form>
</div>
@stop
