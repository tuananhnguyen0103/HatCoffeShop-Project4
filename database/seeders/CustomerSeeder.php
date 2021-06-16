<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert(
            [
                ['id' => '1','customer_name' => 'Nguyễn Đức Tuấn Anh','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-17 17:11:25','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '2','customer_name' => 'NguyễnTuấn Anh 12','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-17 17:12:00','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '3','customer_name' => 'Nguyễn Thị Nghĩa','customer_phone_number' => '0981231123','customer_date_buy' => '2021-05-17 18:20:07','customer_email' => 'nghianguyen@gmail.com','customer_address' => 'An Vĩ Khoái Châu Hưng Yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '4','customer_name' => 'Hà Thị Hồ','customer_phone_number' => '0981231123','customer_date_buy' => '2021-05-17 18:27:38','customer_email' => 'haho@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '5','customer_name' => 'Anh thị Lung','customer_phone_number' => '0321884321','customer_date_buy' => '2021-05-17 18:28:20','customer_email' => 'lung@gmail.com','customer_address' => 'Amercinoa ad','created_at' => NULL,'updated_at' => NULL],
  ['id' => '6','customer_name' => 'Anh thị Lung','customer_phone_number' => '0321884321','customer_date_buy' => '2021-05-17 20:38:18','customer_email' => 'lung@gmail.com','customer_address' => 'Mỹ Hào - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '7','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-23 14:43:57','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Mỹ Hào - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '8','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-23 14:45:10','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Mỹ Hào - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '9','customer_name' => 'Hiếu','customer_phone_number' => '0912354320','customer_date_buy' => '2021-05-23 14:49:04','customer_email' => 'hieungo@gmail.com','customer_address' => 'Mỹ Hào - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '10','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-24 15:44:35','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'An Vĩ Khoái Châu Hưng Yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '11','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-27 16:15:14','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '12','customer_name' => 'Hiếu','customer_phone_number' => '0912354320','customer_date_buy' => '2021-05-27 17:15:23','customer_email' => 'hieungo@gmail.com','customer_address' => 'Dân Tiến - Dị Sử','created_at' => NULL,'updated_at' => NULL],
  ['id' => '13','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 12:10:38','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Mỹ Hào - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '14','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 16:43:08','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '15','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 16:44:19','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '16','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:38:07','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '17','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:38:43','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '18','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:38:47','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '19','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:38:51','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '20','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:40:01','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '21','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:40:39','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '22','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:41:15','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '23','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:41:44','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '24','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:41:58','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '25','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:42:16','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '26','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:42:36','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '27','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:43:24','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '28','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:43:42','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '29','customer_name' => 'Tuan Anh Nguyen Duc','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-05-30 17:45:21','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '30','customer_name' => 'Tuan Anh','customer_phone_number' => '0986703811','customer_date_buy' => '2021-06-06 22:38:32','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '31','customer_name' => 'TuanAnh Nguyen','customer_phone_number' => '0986703811','customer_date_buy' => '2021-06-10 14:50:17','customer_email' => 'tuananhnguyen3883@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '32','customer_name' => 'TuanAnh Nguyen','customer_phone_number' => '0986703811','customer_date_buy' => '2021-06-10 14:51:29','customer_email' => 'tuananhnguyen3883@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL],
  ['id' => '33','customer_name' => 'Thành Tố','customer_phone_number' => '0986703811','customer_date_buy' => '2021-06-11 21:50:05','customer_email' => 'thanhto@gmail.com','customer_address' => 'Hà Nội','created_at' => NULL,'updated_at' => NULL],
  ['id' => '34','customer_name' => 'Nguyễn Đức Tuấn Anh','customer_phone_number' => '+84986703811','customer_date_buy' => '2021-06-14 18:17:56','customer_email' => 'tuananh010320@gmail.com','customer_address' => 'Dân Tiến - Khoái Châu - Hưng yên','created_at' => NULL,'updated_at' => NULL]
            ]
        );
    }
}
