<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                        <span key="t-dashboards">Tổng quan</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                        <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                    </ul> --}}
                </li>

                @if (Session()->get('role')==1)
                <li class="menu-title" key="t-apps">Quản lý cửa hàng</li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Cửa Hàng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('get-all-category')}}" key="t-orders">Loại Sản Phẩm</a></li>
                        <li><a href="{{route('get-all-product')}}" key="t-products">Sản phẩm</a></li>
                        <li><a href="{{route('staff')}}" key="t-customers">Nhân Viên</a></li>
                        <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                        <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                        <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                    </ul>
                </li>
                @endif




                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto">Đơn hàng</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- Session()->get('role') --}}
                        @if (Session()->get('role')==1||Session()->get('role')==2)
                            <li><a href="{{route('get-all-bill-not-accpected')}}" key="t-inbox">Đơn hàng chưa xác thực</a></li>
                        @endif
                        @if (Session()->get('role')==1||Session()->get('role')==2||Session()->get('role')==3)
                            <li><a href="{{route('get-all-bill-accpected')}}" key="t-product-detail">Đơn hàng đã xác thực</a></li>
                        @endif
                        @if (Session()->get('role')==1||Session()->get('role')==3||Session()->get('role')==4)
                            <li><a href="{{route('get-all-bill-ship')}}" key="t-exchange">Đơn hàng cần giao</a></li>
                        @endif
                        @if (Session()->get('role')==1||Session()->get('role')==4)
                            <li><a href="{{route('get-all-bill-shipping')}}" key="t-exchange">Đơn hàng đang giao</a></li>
                        @endif
                        @if (Session()->get('role')==1||Session()->get('role')==2)
                            <li><a href="{{route('get-all-bill-cancel')}}" key="t-exchange">Đơn hàng hủy</a></li>
                        @endif
                        @if (Session()->get('role')==1||Session()->get('role')==2||Session()->get('role')==3||Session()->get('role')==4)
                            <li><a href="{{route('get-all-bill-done')}}" key="t-exchange">Đơn hàng đã hoàn thành</a></li>
                        @endif
                    </ul>
                </li>







            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
