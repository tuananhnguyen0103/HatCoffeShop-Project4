<?php

namespace App\Http\Controllers\admin;

use App\Models\Staff;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\StaffType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Cart;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();

        return view('admin.staff.index',compact('staff'));
    }
    public function profile($id)
    {
        $staff = Staff::where('staff.id',$id)->get()[0];
         return view('admin.staff.profile',compact('staff'));
    }
    public function getTotalBill(){

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffType = StaffType::all();
        return view('admin.staff.create',compact('staffType'));
    }
    public function createStaff(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        // $date = microtime();
        // dd($date);
        // $date = DateTime::createFromFormat('U.u', microtime(TRUE));
        $date = date('Y-m-d');
        $staff_slug = Str::slug($request->staff_name,'-');
        // $imageName = $request->file('image')->getClientOriginalName();
        // $request->image->move(public_path('uploads/image/staff'), time());
        // $imageName =  'uploads/image/staff/'.time().'_'.$staff_slug;
        $imageName = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('uploads/image/staffs'), time().'_'.$imageName);
            $imageName =  'uploads/image/staffs/'.time().'_'.$imageName;

        // $imageName = $staff_slug.'.'.$request->file('image')->extension();
        // $request->image->move(public_path('uploads/image/staffs'), $imageName);
        // $imageName = 'uploads/image/staffs/'.time().$staff_slug;
        $role = "";
        if($request->staff_types_id==1){
            $role = "Quản lý";
        }
        else{
            $role = "Nhân viên";
        }
        $query=Staff::insert(
            [
               'staff_name' =>$request->staff_name,
               'staff_types_id' =>$request->staff_types_id,
               'staff_image'=>$imageName,
               'staff_sex' =>$request->staff_sex,
               'staff_birthday' =>$request->staff_birthday,
               'staff_date_join'=>$date,
               'staff_address' =>$request->staff_address,
               'staff_account' =>$request->staff_account,
               'staff_password' =>$request->staff_password,
               'staff_role' =>$role,
               'staff_phone_number' =>$request->staff_phone,
               'staff_email' =>$request->staff_email,
            ]
        );

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
