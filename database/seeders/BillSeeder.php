<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;




class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bills')->insert(
            [
                ['id' => '1','bills_sale_day' => '2021-05-17 17:11:25','bill_pay_day' => NULL,'bill_descriptions' => 'Nah','bill_state' => 'Chưa xác thực','staff_set_bill_accepted'=>null,'staff_set_bill_ship'=>null,'staff_set_bill_shipping'=>null,'staff_set_bill_done'=>null,'staff_set_bill_cancel'=>null,'bill_staff_id'=>null,'bill_total' => '350000','bill_custormer_id' => '1','created_at' => NULL,'updated_at' => '2021-05-17 13:38:25'],
                ['id' => '2','bills_sale_day' => '2021-05-17 17:12:00','bill_pay_day' => NULL,'bill_descriptions' => 'Ship ngay','bill_state' => 'Chưa xác thực','staff_set_bill_accepted'=>null,'staff_set_bill_ship'=>null,'staff_set_bill_shipping'=>null,'staff_set_bill_done'=>null,'staff_set_bill_cancel'=>null,'bill_staff_id'=>null,'bill_total' => '350000','bill_custormer_id' => '2','created_at' => NULL,'updated_at' => '2021-05-17 11:36:52'],
                ['id' => '3','bills_sale_day' => '2021-05-17 18:20:07','bill_pay_day' => '2021-05-17 18:26:02','bill_descriptions' => 'Ship vào hôm thứ 3 tuần tới','bill_state' => 'Chưa xác thực','staff_set_bill_accepted'=>null,'staff_set_bill_ship'=>null,'staff_set_bill_shipping'=>null,'staff_set_bill_done'=>null,'staff_set_bill_cancel'=>null,'bill_staff_id'=>null,'bill_total' => '260000','bill_custormer_id' => '3','created_at' => NULL,'updated_at' => '2021-05-17 18:26:02'],
                ['id' => '4','bills_sale_day' => '2021-05-17 18:27:38','bill_pay_day' => NULL,'bill_descriptions' => 'Không có gì','bill_state' => 'Chưa xác thực','staff_set_bill_accepted'=>null,'staff_set_bill_ship'=>null,'staff_set_bill_shipping'=>null,'staff_set_bill_done'=>null,'staff_set_bill_cancel'=>null,'bill_staff_id'=>null,'bill_total' => '70000','bill_custormer_id' => '4','created_at' => NULL,'updated_at' => '2021-05-17 11:31:36'],
                ['id' => '5','bills_sale_day' => '2021-05-17 18:28:20','bill_pay_day' => NULL,'bill_descriptions' => 'Hay quá vậy ta','bill_state' => 'Chưa xác thực','staff_set_bill_accepted'=>null,'staff_set_bill_ship'=>null,'staff_set_bill_shipping'=>null,'staff_set_bill_done'=>null,'staff_set_bill_cancel'=>null,'bill_staff_id'=>null,'bill_total' => '70000','bill_custormer_id' => '5','created_at' => NULL,'updated_at' => NULL],
                ['id' => '6','bills_sale_day' => '2021-05-17 20:38:18','bill_pay_day' => NULL,'bill_descriptions' => 'Ship vào khu cách ly','bill_state' => 'Chưa xác thực','staff_set_bill_accepted'=>null,'staff_set_bill_ship'=>null,'staff_set_bill_shipping'=>null,'staff_set_bill_done'=>null,'staff_set_bill_cancel'=>null,'bill_staff_id'=>null,'bill_total' => '385000','bill_custormer_id' => '6','created_at' => NULL,'updated_at' => NULL]
            ]
        );
    }
}
