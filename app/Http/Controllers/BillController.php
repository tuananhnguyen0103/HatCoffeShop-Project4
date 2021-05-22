<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Customers;
use App\Models\Staff;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BillStateNotAccpected()
    {
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Chưa xác thực')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number')
        ->get();
        return view('admin.bills.bill-not-accpected',compact('listBill'));
        // return redirect()->route('get-all-bill-not-accpected',compact('listBill'));
    }
    public function BillStateAccpected()
    {

        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_accepted')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Đã xác thực')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
            return view('admin.bills.bill-accpected',compact('listBill'));
    }
    public function BillStateShip()
    {
        // $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        // ->orderBy('Bills.bills_sale_day', 'DESC')
        // ->where('Bills.bill_state','=','Cần giao hàng')
        // ->get();
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_ship')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Cần giao hàng')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return view('admin.bills.bill-ship',compact('listBill'));
    }
    public function BillStateShipping()
    {
        // $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        // ->orderBy('Bills.bills_sale_day', 'DESC')
        // ->where('Bills.bill_state','=','Đang giao hàng')
        // ->get();
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_shipping')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Đang giao hàng')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return view('admin.bills.bill-shipping',compact('listBill'));
    }
    public function BillStateDone()
    {
        // $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        // ->where('Bills.bill_state','=','Hoàn thành')
        // ->orderBy('Bills.bills_sale_day', 'DESC')
        // ->get();
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_done')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Hoàn thành')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return view('admin.bills.bill-done',compact('listBill'));
    }
    public function BillStateCancel()
    {
        // $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        // ->orderBy('Bills.bills_sale_day', 'DESC')
        // ->where('Bills.bill_state','=','Hủy')
        // ->get();
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_cancel')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Hủy')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return view('admin.bills.bill-cancel',compact('listBill'));
    }


    // Cập nhận đơn hàng
    public function SetBillStateToAccpected($id )
    {

        $staffs = Staff::where('Staff.id','=',session()->get('id'))->get();
        $staff = $staffs[0]->id;
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        // $date = microtime();
        // dd($date);
        // $date = DateTime::createFromFormat('U.u', microtime(TRUE));
        $date = date('Y-m-d H:i:s.v');
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->get();
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.bill_staff_id')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Đã xác thực')
        ->get();
        // dd($listBill);
        $BillUpdate = Bill::where('Bills.id','=',$id)->get();
        //dd($listBill);
        // $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        // ->join('Staff','Staff.id','=','Bills.staff_set_bill_accepted')
        // ->orderBy('Bills.bills_sale_day', 'DESC')
        // ->where('Bills.bill_state','=','Đã xác thực')
        // ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        // ->get();
        // dd($listBill);
        Bill::where('Bills.id','=',$id)
            ->update([
                'id'=>$id,
                'bill_state' =>'Đã xác thực',
                'bill_pay_day' =>$date,
                // 'bill_staff_id' =>$staff,
                'staff_set_bill_accepted'=>$staff,
            ]);
            $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
            ->orderBy('Bills.bills_sale_day', 'DESC')
            ->where('Bills.bill_state','=','Chưa xác thực')
            ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number')
            ->get();
        return redirect()->route('get-all-bill-not-accpected',compact('listBill'));

    }
    public function SetBillStateToShip($id)
    {
        //dd($id);
        $staffs = Staff::where('Staff.id','=',session()->get('id'))->get();
        $staff = $staffs[0]->id;
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->get();
        $BillUpdate = Bill::where('Bills.id','=',$id)->get();

        Bill::where('Bills.id','=',$id)
            ->update([
                'bill_state' =>'Cần giao hàng',
                // 'bill_staff_id' =>$staff,
                'staff_set_bill_ship'=>$staff,
            ]);

        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_ship')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Đã xác thực')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return redirect()->route('get-all-bill-accpected',compact('listBill'));
        // return view('admin.bills.bill-accpected',compact('listBill'));
    }
    public function SetBillStateToShipping($id)
    {
        $staffs = Staff::where('Staff.id','=',session()->get('id'))->get();
        $staff = $staffs[0]->id;
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->get();
        $BillUpdate = Bill::where('Bills.id','=',$id)->get();
        Bill::where('Bills.id','=',$id)
            ->update([
                'bill_state' =>'Đang giao hàng',
                // 'bill_staff_id' =>$staff,
                'staff_set_bill_shipping'=>$staff,
            ]);
            $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_shipping')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Cần giao hàng')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return redirect()->route('get-all-bill-ship',compact('listBill'));
        // return view('admin.bills.bill-ship',compact('listBill'));
    }
    public function SetBillStateToDone($id)
    {
        $staffs = Staff::where('Staff.id','=',session()->get('id'))->get();
        $staff = $staffs[0]->id;
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->get();
        $BillUpdate = Bill::where('Bills.id','=',$id)->get();
        Bill::where('Bills.id','=',$id)
            ->update([
                'bill_state' =>'Hoàn thành',
                // 'bill_staff_id' =>$staff,
                'staff_set_bill_done'=>$staff,
            ]);
            $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_done')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Hoàn thành')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return redirect()->route('get-all-bill-shipping',compact('listBill'));
        // return view('admin.bills.bill-shipping',compact('listBill'));
    }
    public function SetBillStateToCancel($id)
    {
        $staffs = Staff::where('Staff.id','=',session()->get('id'))->get();
        $staff = $staffs[0]->id;
        $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->get();
        $BillUpdate = Bill::where('Bills.id','=',$id)->get();
        Bill::where('Bills.id','=',$id)
            ->update([
                'bill_state' =>'Hủy',
                // 'bill_staff_id' =>$staff,
                'staff_set_bill_cancel'=>$staff,
            ]);
            $listBill = Bill::join('Customers','Customers.id','=','Bills.bill_custormer_id')
        ->join('Staff','Staff.id','=','Bills.staff_set_bill_cancel')
        ->orderBy('Bills.bills_sale_day', 'DESC')
        ->where('Bills.bill_state','=','Hủy')
        ->select('Bills.*','Customers.customer_name','Customers.customer_phone_number','Staff.staff_name')
        ->get();
        return view('admin.bills.bill-not-accpected',compact('listBill'));
    }

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
    public function update( $id)
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
