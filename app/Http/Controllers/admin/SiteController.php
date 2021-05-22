<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



use App\Http\Requests\admin\sites\registerRequest;
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
    public function index(){

        return view('admin.sites.index');
    }

}
