<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Bill;
use App\Models\Customers;
use DateTime;
use Illuminate\Contracts\Session\Session;



use App\Http\Requests\admin\sites\registerRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class SiteController extends Controller
{
    //

    public function login(){
        return view('admin.sites.login');
    }
    public function register(){
        return view('admin.sites.register');
    }
    public function post_register(registerRequest $request){
        //response sẽ trả ra 1 chuỗi json
        return response($request->all());
    }
    public function post_login(Request $request){
        $request->validate([
            'user_name'=>'required',
            'user_password'=>'required'
        ]);
        //nếu đầu vào hợp lệ thì cho đăng nhập
        //kiểm tra email đã tồn tại chưa
        $staff= Staff::where('staff_account','=',$request->user_name)->first();
        if($staff)
        {

         //nếu có tồn tại mail thì kiểm tra mật khẩu
            if(($request->user_password == $staff->staff_password))
            {
                //nêu có thì lưu vào secction
                $request->session()->put('id',$staff->id);
                $request->session()->put('role',$staff->staff_types_id);
                $request->session()->put('image',$staff->staff_image);
                $request->session()->put('staff_name',$staff->staff_name);
                return 1;
                // return redirect('login')->with("loi","User name or password incorrect");
            }
            else
            {
                return 2;
                // return redirect('login')->with("loi","User name or password incorrect");;
            }
        }
    }
    public function logOut(){
        session()->forget('id');
        return Redirect::route('admin-dashboard');
    }


    public function index(Session $session,Request $request){

        // dd($session);
        if(is_null($request->month)){
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $listDateOfMonth = [];
            $maxDays=date('t');
            for ($i=1; $i <= $maxDays; $i++) {
                array_push($listDateOfMonth,$i);
            }
            //dd($listDateOfMonth);
            $listTotalOfMonth = [];
            // $totalBillOftheDay = Bill::where("Bills.bill_state","=","Hoàn thành")
            // ->whereMonth('Bills.bills_sale_day',"=", date('m'))
            // ->whereDay('Bills.bills_sale_day',"=", 17)
            // ->get();
            // $t = count($totalBillOftheDay);

            // array_push($listTotalOfMonth,0);
            // dd($listTotalOfMonth);
            foreach ($listDateOfMonth as $key) {
                $totalBillOftheDay = Bill::select(DB::raw('sum(Bills.bill_total) as total'))
                ->where("Bills.bill_state","=","Hoàn thành")
                ->whereMonth('Bills.bills_sale_day',"=", date('m'))
                ->whereDay('Bills.bills_sale_day',"=", $key)
                ->get();
                if($totalBillOftheDay[0]->total===null){{
                    array_push($listTotalOfMonth,0);
                    continue;
                }}
                    array_push($listTotalOfMonth,$totalBillOftheDay[0]->total);

            }
            $timestamp = strtotime('2009-10-22');
            $listTotalOfMonth = json_encode($listTotalOfMonth);
            $listDateOfMonth = json_encode($listDateOfMonth);
            // dd(date('d',$timestamp));
            // dd($listTotalOfMonth);



            $resulstTotalBill = Bill::select(DB::raw('sum(Bills.bill_total) as total'))
            ->where("Bills.bill_state","=","Hoàn thành")
            ->get();

            $resulstProduct = Product::select(DB::raw("count(*) as sum"))
            ->get();

            $resulstBill = Bill::select(DB::raw("count(*) as sum"))
            ->get();


            $sumProduct = $resulstProduct[0]->sum;
            $totalMoney = $resulstTotalBill[0]->total;
            $sumBill = $resulstBill[0]->sum;
            return view('admin.sites.index',compact('totalMoney','sumProduct','sumBill','listTotalOfMonth','listDateOfMonth'));
        }
        else{
            dd($request);
        }
    }
    public function getValueInMonth(Request $request){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
            $listDateOfMonth = [];
            $month12=$request->month;
            $maxDays  = 0;
            if($month12=="1"||$month12=="3"||$month12=="5"||$month12=="7"||$month12=="8"||$month12=="10"||$month12=="12"){
                $maxDays = 31;
            }
            elseif($month12=="4"||$month12=="6"||$month12=="9"||$month12=="11"){
                $maxDays = 30;
            }
            else{
                $maxDays = 28;
            }
            for ($i=1; $i <= $maxDays; $i++) {
                array_push($listDateOfMonth,$i);
            }
            //dd($listDateOfMonth);
            $listTotalOfMonth = [];
            // $totalBillOftheDay = Bill::where("Bills.bill_state","=","Hoàn thành")
            // ->whereMonth('Bills.bills_sale_day',"=", date('m'))
            // ->whereDay('Bills.bills_sale_day',"=", 17)
            // ->get();
            // $t = count($totalBillOftheDay);

            // array_push($listTotalOfMonth,0);
            // dd($listTotalOfMonth);
            foreach ($listDateOfMonth as $key) {
                $totalBillOftheDay = Bill::select(DB::raw('sum(Bills.bill_total) as total'))
                ->where("Bills.bill_state","=","Hoàn thành")
                ->whereMonth('Bills.bills_sale_day',"=", $request->month)
                ->whereDay('Bills.bills_sale_day',"=", $key)
                ->get();
                if($totalBillOftheDay[0]->total===null){{
                    array_push($listTotalOfMonth,0);
                    continue;
                }}
                    array_push($listTotalOfMonth,$totalBillOftheDay[0]->total);

            }
            $timestamp = strtotime('2009-10-22');
            // $listTotalOfMonth = json_encode($listTotalOfMonth);
            // $listDateOfMonth = json_encode($listDateOfMonth);
            // dd(date('d',$timestamp));
            // dd($listTotalOfMonth);



            $resulstTotalBill = Bill::select(DB::raw('sum(Bills.bill_total) as total'))
            ->where("Bills.bill_state","=","Hoàn thành")
            ->get();

            $resulstProduct = Product::select(DB::raw("count(*) as sum"))
            ->get();

            $resulstBill = Bill::select(DB::raw("count(*) as sum"))
            ->get();


            $sumProduct = $resulstProduct[0]->sum;
            $totalMoney = $resulstTotalBill[0]->total;
            $sumBill = $resulstBill[0]->sum;

            // return [$request->month,$listDateOfMonth,$listTotalOfMonth];
            // return $request;
            $results = [
                "month" =>$month12,
                "list_total_of_month" =>$listTotalOfMonth,
                "list_day_of_month"=>$listDateOfMonth,
            ];
            return $results;
    }
}
