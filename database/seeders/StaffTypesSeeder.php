<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('staff_types')->insert(
            [
                [
                    'staff_types_name'=>'Quản lý',
                    'staff_types_desceptions' =>'Người có chức vụ cao trong cửa hàng'
                ],
                [
                    'staff_types_name'=>'Nhân viên quản lý đơn hàng',
                    'staff_types_desceptions' =>'Người có chức vụ nhận các đơn hàng chưa xác thực và xác thực đơn hàng thông qua khách hàng để báo cho bên chế biến'
                ],
                [
                    'staff_types_name'=>'Nhân viên pha chế',
                    'staff_types_desceptions' =>'Người có chức vụ nhận các đơn hàng đã xác thực để làm đồ cho khách, sau khi làm xong sẽ đặt lại tình trạng đơn hàng là cần giao hàng'
                ],
                [
                    'staff_types_name'=>'Nhân viên giao hàng',
                    'staff_types_desceptions' =>'Người có chức vụ nhận các đơn hàng có tình trạng cần giao hàng và khi nhận đơn hàng sẽ để trạng thái là đang giao, hoàn thành hoặc hủy'
                ]
            ]
        );
    }
}
