<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\SiteController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BillDetailsController;
use App\Http\Controllers\CustomerController;
use App\Models\BillDetails;
use App\Models\Category;
// use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart ;


// use Gloudemans\Shoppingcart\Facades\Cart;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/')->group(function () {
    Route::get('', [ProductController::class,'indexClient'])->name('get-all-product-clienst');
    Route::get('cart', [ProductController::class,'cart'])->name('get-cart')->middleware('client.order');
    Route::get('menu', [ProductController::class,'menu'])->name('get-menu');
    // Không dùng ajax dùng laravel thuần thì cần truyền tham số
    //Route::post('update-cart/{id}', [ProductController::class,'UpdateCart'])->name('update-cart');
    // Dùng ajax call route của php thì không cần tham số truyền vào
    // Tham số truyền vào được gọi ở trong data bên hàm ajax
    Route::any('update-cart', [ProductController::class,'UpdateCart']);
    Route::any('update-cart-product-detail', [ProductController::class,'UpdateCartDetail']);
    Route::get('get-amout-cart', function(){
        return Cart::Content()->count() ;
    });
    //Route::get('product-detail/{slug}/{id}',[ProductController::class,'productDetail'])->name('product-detail');
    Route::get('detail/{slug}', [ProductController::class,'test'])->name('product-detail');
    // Route::get('detail', [ProductController::class,'test'])->name('product-detail');
    Route::get('cart/{rowId}', [ProductController::class,'deleteProductInCart'])->name('delete-product-cart');
    Route::post('update-cart-check-out', [ProductController::class,'UpdateCartCheckOut'])->name('update');
    Route::get('checkout', [CustomerController::class,'checkout'])->name('user-check-out')->middleware('client.order');
    Route::post('order', [CustomerController::class,'order'])->name('user-order')->middleware('client.order');
    Route::get('thank-you', [CustomerController::class,'thankyou'])->name('thankyou');
    Route::post('login-post', [CustomerController::class,'loginPost'])->name('user-login-post');
    Route::get('register', [CustomerController::class,'register'])->name('user-register');
    Route::post('register-post', [CustomerController::class,'registerPost'])->name('user-register-post');


    //Test mail
    // Route::get('mail-send', [CustomerController::class,'sendMail'])->name('user-mail');

});
 Route::get('mailthanks', function () {
     $cartcontent = Cart::content();
     $total =Cart::subtotal(0,'.','');
     //$total=str_replace($total,',','');
     //dd($total);

    //  dd(Cart::priceTotal());
    return view('client.sites.email-thanks',compact('cartcontent','total'));
    });
Route::resources([
    'category' => CategoryController::class
]);

// Route::get('/cate', function() {
//     return view('admin.categories.index');

Route::prefix('/admin.shop')->group(function () {
    // Route return view index
    // Đăng nhập sẽ kiểm tra đăng nhập hay chưa
    Route::get('', [SiteController::class,'index'])->name('admin-dashboard')->middleware('check.login');
    // Route::post('', [SiteController::class,'index'])->name('admin-dashboard')->middleware('auth');

    // Route return view login
    Route::get('login', [SiteController::class,'login'])->name('admin-login');
    Route::post('post-login',[SiteController::class,'post_login'])->name('post-login');

    Route::get('log-out',[SiteController::class,'logOut'])->name('logout-admin');

    // Route return view register
    Route::get('register', [SiteController::class,'register'])->name('admin-register');

    // Route return view post_register
    Route::post('post-register', [SiteController::class,'post_register'])->name('post_register');

    // Route return logout


    // Route::resources([
    //     // 'category' là tên trên url
    //     'category' => CategoryController::class,
    //     'product' => ProductController::class
    //     ]);

    Route::prefix('/category')->middleware('check.login','check.manager')->group(function () {
        Route::get('', [CategoryController::class,'index'])->name('get-all-category');
        Route::get('create', [CategoryController::class,'create'])->name('create-categories');
        Route::post('create', [CategoryController::class,'doCreate'])->name('create-categories-done');
        Route::get('update/{id}', [CategoryController::class,'update'])->name('update-categories');
        Route::post('update', [CategoryController::class,'doUpdate'])->name('update-categories-done');
        Route::get('delete', [CategoryController::class,'softDelete'])->name('softDelete');
        Route::get('try', [CategoryController::class,'renametoSlug'])->name('renametoSlugCate');
    });
    Route::prefix('product')->middleware('check.login','check.manager')->group(function () {
        Route::get('', [ProductController::class,'index'])->name('get-all-product');
        Route::get('create', [ProductController::class,'create'])->name('create-product');
        Route::post('create', [ProductController::class,'doCreate'])->name('create-product-done');
        Route::get('try', [ProductController::class,'renametoSlug'])->name('renametoSlug');
        Route::get('update/{id}', [ProductController::class,'update'])->name('update-product');
        Route::post('update/{id}', [ProductController::class,'doUpdate'])->name('update-product-done');
        Route::get('delete', [ProductController::class,'softDelete'])->name('softDelete');
        //Chưa làm


    });
    Route::prefix('bill')->group(function () {
        Route::get('', [BillController::class,'index'])->name('get-all-bill')->middleware('check.login');

        Route::get('not-accpected', [BillController::class,'BillStateNotAccpected'])->name('get-all-bill-not-accpected')->middleware('check.login');
        Route::get('accpected', [BillController::class,'BillStateAccpected'])->name('get-all-bill-accpected')->middleware('check.login');
        Route::get('ship', [BillController::class,'BillStateShip'])->name('get-all-bill-ship')->middleware('check.login');
        Route::get('shipping', [BillController::class,'BillStateShipping'])->name('get-all-bill-shipping')->middleware('check.login');
        Route::get('cancel', [BillController::class,'BillStateCancel'])->name('get-all-bill-cancel')->middleware('check.login');
        Route::get('done', [BillController::class,'BillStateDone'])->name('get-all-bill-done')->middleware('check.login');

        Route::get('detail/{id}', [BillDetailsController::class,'BillDetail'])->name('get-bill-detail')->middleware('check.login');

        Route::any('accpected/{id}', [BillController::class,'SetBillStateToAccpected'])->name('set-bill-accpected')->middleware('check.login');
        Route::any('ship/{id}', [BillController::class,'SetBillStateToShip'])->name('set-bill-ship')->middleware('check.login');
        Route::any('shipping/{id}', [BillController::class,'SetBillStateToShipping'])->name('set-bill-shiping')->middleware('check.login');
        Route::any('cancel/{id}', [BillController::class,'SetBillStateToCancel'])->name('set-bill-cancel')->middleware('check.login');
        Route::any('done/{id}', [BillController::class,'SetBillStateToDone'])->name('set-bill-done')->middleware('check.login');

    });
    Route::prefix('staff')->group(function () {
        Route::get('', [StaffController::class,'index'])->name('staff')->middleware('check.login');
        Route::get('pro', [StaffController::class,'index'])->name('staff')->middleware('check.login');
    });

});
