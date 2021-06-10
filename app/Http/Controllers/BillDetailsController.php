<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\Customers;
use App\Models\Product;
use App\Models\SalePrice;
use App\Models\Staff;
use Illuminate\Http\Request;
use PDF;

class BillDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function BillDetail(Request $request, $id)
    {
        $Bill = Bill::join('Customers','Bills.bill_custormer_id','=','Customers.id')
                    ->select('Bills.id','Bills.bill_descriptions','Bills.bills_sale_day','Bills.bill_pay_day','Bills.bill_total',
                            'Customers.customer_name','Customers.customer_phone_number','Customers.customer_email','Customers.customer_address')
                    ->where('Bills.id','=',$id)->get()[0];
        $BillValue = Bill::join('Customers','Bills.bill_custormer_id','=','Customers.id')
                    ->join('Bill_Details','Bill_Details.bill_id','=','Bills.id')
                    ->join('Products','Products.id','=','Bill_Details.product_id')
                    ->leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
                    ->where('Bills.id','=',$id)
                    ->get();
        // dd($Bill);
        $staffSetAccepeteds = Staff::join('Bills','Bills.staff_set_bill_accepted','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();

        $staffSetShips = Staff::join('Bills','Bills.staff_set_bill_ship','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetShippings = Staff::join('Bills','Bills.staff_set_bill_shipping','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetDones = Staff::join('Bills','Bills.staff_set_bill_done','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetCancels = Staff::join('Bills','Bills.staff_set_bill_cancel','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();

        try {
            $staffSetAccepeted=$staffSetAccepeteds[0];
        } catch (\Throwable $th) {
            $staffSetAccepeted = "Chưa có nhân viên";
        }

        try {
            $staffSetShip=$staffSetShips[0];
        } catch (\Throwable $th) {
            $staffSetShip = "Chưa có nhân viên";
        }

        try {
            $staffSetShipping=$staffSetShippings[0];
        } catch (\Throwable $th) {
            $staffSetShipping = "Chưa có nhân viên";
        }

        try {
            $staffSetDone=$staffSetDones[0];
        } catch (\Throwable $th) {
            $staffSetDone = "Chưa có nhân viên";
        }
        try {
            $staffSetCancel=$staffSetCancels[0];
        } catch (\Throwable $th) {
            $staffSetCancel = "Chưa có nhân viên";
        }
        $arrayStaff = [$staffSetAccepeted,$staffSetShip,$staffSetShipping,$staffSetDone,$staffSetCancel];
        // dd($Bill);
        return view('admin.billdetails.index',compact('BillValue','Bill','arrayStaff'));
    }

    public function createPDF(Request $request, $id) {
        // retreive all records from db
        // dd($id);
        $Bill = Bill::join('Customers','Bills.bill_custormer_id','=','Customers.id')
                    ->select('Bills.id','Bills.bill_descriptions','Bills.bills_sale_day','Bills.bill_pay_day',
                            'Customers.customer_name','Customers.customer_phone_number','Customers.customer_email','Customers.customer_address')
                    ->where('Bills.id','=',$id)->get()[0];
        // $Bill = Bill::all();
        // $Cus = Customers::where('Customers.id','=',$id)->get();
        // dd($Bill);
        $BillValue = Bill::join('Customers','Bills.bill_custormer_id','=','Customers.id')
                    ->join('Bill_Details','Bill_Details.bill_id','=','Bills.id')
                    ->join('Products','Products.id','=','Bill_Details.product_id')
                    ->leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
                    ->where('Bills.id','=',$id)
                    ->get();
                    $staffSetAccepeteds = Staff::join('Bills','Bills.staff_set_bill_accepted','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();

        $staffSetShips = Staff::join('Bills','Bills.staff_set_bill_ship','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetShippings = Staff::join('Bills','Bills.staff_set_bill_shipping','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetDones = Staff::join('Bills','Bills.staff_set_bill_done','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetCancels = Staff::join('Bills','Bills.staff_set_bill_cancel','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();

        try {
            $staffSetAccepeted=$staffSetAccepeteds[0];
        } catch (\Throwable $th) {
            $staffSetAccepeted = "Chưa có nhân viên";
        }

        try {
            $staffSetShip=$staffSetShips[0];
        } catch (\Throwable $th) {
            $staffSetShip = "Chưa có nhân viên";
        }

        try {
            $staffSetShipping=$staffSetShippings[0];
        } catch (\Throwable $th) {
            $staffSetShipping = "Chưa có nhân viên";
        }

        try {
            $staffSetDone=$staffSetDones[0];
        } catch (\Throwable $th) {
            $staffSetDone = "Chưa có nhân viên";
        }
        try {
            $staffSetCancel=$staffSetCancels[0];
        } catch (\Throwable $th) {
            $staffSetCancel = "Chưa có nhân viên";
        }
        $arrayStaff = [$staffSetAccepeted,$staffSetShip,$staffSetShipping,$staffSetDone,$staffSetCancel];

        // $data = Employee::all();
        $data = array(
            'Bill' => $Bill,
            'BillValue' => $BillValue,
            'arrayStaff' =>$arrayStaff,
        );
        view()->share('Bill', 'BillValue','arrayStaff');
        // share data to view
        // view()->share('BillValue',$BillValue);
        // view()->share('BillValue','Bill');
        $pdf = PDF::loadView('admin/billdetails/pdf', $data);
        // dd($pdf);
        // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
      public function showPDF(Request $request, $id) {
        // retreive all records from db
        // dd($id);
        $Bill = Bill::join('Customers','Bills.bill_custormer_id','=','Customers.id')
                    ->where('Bills.id','=',$id)->get()[0];
        // $Bill = Bill::all();
        // $Cus = Customers::where('Customers.id','=',$id)->get();
        // dd($Bill);
        $BillValue = Bill::join('Customers','Bills.bill_custormer_id','=','Customers.id')
                    ->join('Bill_Details','Bill_Details.bill_id','=','Bills.id')
                    ->join('Products','Products.id','=','Bill_Details.product_id')
                    ->leftJoin('Sale_Prices', 'Products.id', '=', 'Sale_Prices.product_id')
                    ->where('Bills.id','=',$id)
                    ->get();
                    $staffSetAccepeteds = Staff::join('Bills','Bills.staff_set_bill_accepted','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();

        $staffSetShips = Staff::join('Bills','Bills.staff_set_bill_ship','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetShippings = Staff::join('Bills','Bills.staff_set_bill_shipping','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetDones = Staff::join('Bills','Bills.staff_set_bill_done','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();
        $staffSetCancels = Staff::join('Bills','Bills.staff_set_bill_cancel','Staff.id')
                    ->where('Bills.id','=',$id)
                    ->select('Staff.id','Staff.staff_name')
                    ->get();

        try {
            $staffSetAccepeted=$staffSetAccepeteds[0];
        } catch (\Throwable $th) {
            $staffSetAccepeted = "Chưa có nhân viên";
        }

        try {
            $staffSetShip=$staffSetShips[0];
        } catch (\Throwable $th) {
            $staffSetShip = "Chưa có nhân viên";
        }

        try {
            $staffSetShipping=$staffSetShippings[0];
        } catch (\Throwable $th) {
            $staffSetShipping = "Chưa có nhân viên";
        }

        try {
            $staffSetDone=$staffSetDones[0];
        } catch (\Throwable $th) {
            $staffSetDone = "Chưa có nhân viên";
        }
        try {
            $staffSetCancel=$staffSetCancels[0];
        } catch (\Throwable $th) {
            $staffSetCancel = "Chưa có nhân viên";
        }
        $arrayStaff = [$staffSetAccepeted,$staffSetShip,$staffSetShipping,$staffSetDone,$staffSetCancel];

        // $data = Employee::all();
        $data = array(
            'Bill' => $Bill,
            'BillValue' => $BillValue,
            'arrayStaff' =>$arrayStaff,
        );
        view()->share('Bill', 'BillValue','arrayStaff');
        // share data to view
        // view()->share('BillValue',$BillValue);
        // view()->share('BillValue','Bill');
        $pdf = PDF::loadView('admin/billdetails/pdf', $data);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // download PDF file with download method
        return view('admin.billdetails.pdf-check',compact('Bill','BillValue','arrayStaff'));
      }
    public function index()
    {
        //
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
