<?php

namespace App\Http\Controllers;
use App\Mail\ThanksForChosing;


use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\Customers;
use App\Models\Category;
use App\Models\Product;
use DateTime;
use Cart;
use Mail;




use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function checkout(){
        return view('client.customer.checkout');
    }
    public function login(Request $request){
        $cate = Category::all();
        $product =
            Product::leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
            ->select('Products.*', 'Sale_Prices.sale_price_amount', 'Sale_Prices.sale_price_values')
            ->get();
        // $product = $products[0];
        //echo $request->id;
        //dd($products);
        //echo $product[0]->product_name;
        // dd($product[0]->sale_price_values);
        return view('client.customer.login',compact('product','cate'));
    }
    public function loginPost(Request $request){
        return view('client.sites.checkout');
    }
    public function register(Request $request){
        return view('client.customer.register');
    }
    public function registerPost(Request $request){
        dd($request->customer_name);
        return view('client.sites.checkout');
    }
    public function order(Request $request){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        // $date = microtime();
        // dd($date);
        // $date = DateTime::createFromFormat('U.u', microtime(TRUE));
        $date = date('Y-m-d H:i:s.v');
        // date_timezone_set($date, timezone_open('Asia/Ho_Chi_Minh'));

        // $date = date("Y-m-d H:i:s.u",microtime(true));
        $customerAdd = Customers::insert(
            [
               'customer_name' =>$request->customer_name,#mail
               'customer_phone_number' =>$request->customer_phone_number,//hash để mã hoá mật khẩu
               'customer_date_buy'=>$date,
               'customer_address' =>$request->customer_address,
               'customer_email'=>$request->customer_email,
            ]
        );
       // dd($customerAdd);
        $billsID = Customers::where('customer_date_buy','=',$date)->get();
        $cus = Customers::all();
        $cartTotal = number_format(str_replace(',','',Cart::priceTotal()), 0, '.', '');
        //dd(number_format(str_replace(',','',Cart::total()), 0, '.', ''));
        $bill_descriptions = "Không";
        $bill_descriptions = $request->customer_bill_descriptions;
        if($request->customer_bill_descriptions==null){
            $bill_descriptions = "Không";
        }

        $billAdd = Bill :: insert(
            [
                'bills_sale_day'=>$date,
                'bill_descriptions'=>$bill_descriptions,
                'bill_total'=>$cartTotal,
                'bill_state'=>'Chưa xác thực',
                'bill_custormer_id'=>$billsID[0]->id
            ]
            );
        $listBill = Bill::where('bill_custormer_id','=',$billsID[0]->id)->get();
        // dd($listBill[0]->id);
        $val = "Hay";
        foreach (Cart::content() as $key ) {
            $billDetailAdd = BillDetails ::insert(
                [

                    'product_id'=>$key->id,
                    'product_quantity'=>$key->qty,
                    'product_total'=>$key->qty*$key->price,
                    'bill_id'=>$listBill[0]->id,
                ]
                );
                // dd($key);
        }
        $listBillDetail = BillDetails::all();
        //dd($listBillDetail);
        $cartcontent = Cart::content();
        $total = Cart::subtotal(0,'.','');
        Mail::to($request->customer_email)->send(new ThanksForChosing($cartcontent,$total));
        Cart::destroy();
        //dd('Đã gửi');
        return view('client.customer.thankyou');
    }

    // public function sendMail(){
    //     Mail::to('levaba4430@threepp.com')->send(new Mailer());
    //     dd('Đã gửi');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
