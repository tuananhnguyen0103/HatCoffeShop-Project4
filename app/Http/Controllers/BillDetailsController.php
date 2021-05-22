<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetails;
use App\Models\Product;
use App\Models\SalePrice;
use App\Models\Staff;
use Illuminate\Http\Request;

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
        // dd($arrayStaff);
        return view('admin.billdetails.index',compact('BillValue','Bill','arrayStaff'));
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
