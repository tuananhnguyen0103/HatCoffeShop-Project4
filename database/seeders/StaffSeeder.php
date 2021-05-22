<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('staff')->insert(
            [
                [
                    'staff_name'=>'Nguyễn Đức Tuấn Anh',
                    'staff_types_id'=>1,
                    'staff_image' =>'uploads/image/staffs/nguyen-duc-tuan-anh.jpg',
                    'staff_sex' =>'Nam',
                    'staff_birthday' =>'2000-01-03',
                    'staff_date_join' =>'2020-08-08',
                    'staff_address' =>'An Vĩ Khoái Châu Hưng Yên',
                    'staff_account'=>'tuananh0103',
                    'staff_password'=>'123',
                    'staff_role' =>'Quản lý',
                    'staff_phone_number' =>'0986703811',
                    'staff_email' =>'tuananh010320@gmail.com',
                ],
                [
                    'staff_name'=>'Nguyễn Tuấn Anh',
                    'staff_types_id'=>1,
                    'staff_image' =>'uploads/image/staffs/nguyen-tuan-anh.jpg',
                    'staff_sex' =>'Nam',
                    'staff_birthday' =>'2000-01-03',
                    'staff_date_join' =>'2020-08-08',
                    'staff_address' =>'An Vĩ Khoái Châu Hưng Yên',
                    'staff_account'=>'tuananh',
                    'staff_password'=>'123',
                    'staff_role' =>'Quản lý',
                    'staff_phone_number' =>'0986703811',
                    'staff_email' =>'tuananh@gmail.com',
                ],
                [
                    'staff_name'=>'Nguyễn Thị Thảo',
                    'staff_types_id'=>2,
                    'staff_image' =>'uploads/image/staffs/nguyen-thi-thao.jpg',
                    'staff_sex' =>'Nữ',
                    'staff_birthday' =>'2000-01-03',
                    'staff_date_join' =>'2020-08-08',
                    'staff_address' =>'An Vĩ Khoái Châu Hưng Yên',
                    'staff_account'=>'thao81',
                    'staff_password'=>'123',
                    'staff_role' =>'Nhân viên',
                    'staff_phone_number' =>'0986703811',
                    'staff_email' =>'nguyenthithao@gmail.com',
                ],
                [
                    'staff_name'=>'Đỗ Thị Mỹ Linh',
                    'staff_types_id'=>4,
                    'staff_image' =>'uploads/image/staffs/do-thi-my-linh.jpg',
                    'staff_sex' =>'Nữ',
                    'staff_birthday' =>'2000-01-03',
                    'staff_date_join' =>'2020-08-08',
                    'staff_address' =>'An Vĩ Khoái Châu Hưng Yên',
                    'staff_account'=>'linh81',
                    'staff_password'=>'123',
                    'staff_role' =>'Nhân viên',
                    'staff_phone_number' =>'0986703811',
                    'staff_email' =>'dothimylinh@gmail.com',
                ],
                [
                    'staff_name'=>'Lệ Ngọc Lệ',
                    'staff_types_id'=>3,
                    'staff_image' =>'uploads/image/staffs/le-ngoc-le.jpg',
                    'staff_sex' =>'Nữ',
                    'staff_birthday' =>'2000-01-03',
                    'staff_date_join' =>'2020-08-08',
                    'staff_address' =>'An Vĩ Khoái Châu Hưng Yên',
                    'staff_account'=>'le81',
                    'staff_password'=>'123',
                    'staff_role' =>'Nhân viên',
                    'staff_phone_number' =>'0986703811',
                    'staff_email' =>'lengocle@gmail.com',
                ],
                [
                    'staff_name'=>'Chu Hải Long',
                    'staff_types_id'=>4,
                    'staff_image' =>'uploads/image/staffs/chu-hai-long.jpg',
                    'staff_sex' =>'Nam',
                    'staff_birthday' =>'2000-01-03',
                    'staff_date_join' =>'2020-08-08',
                    'staff_address' =>'An Vĩ Khoái Châu Hưng Yên',
                    'staff_account'=>'long81',
                    'staff_password'=>'123',
                    'staff_role' =>'Nhân viên',
                    'staff_phone_number' =>'0986703811',
                    'staff_email' =>'chuhailong@gmail.com',
                ],

            ]
        );
    }
}
