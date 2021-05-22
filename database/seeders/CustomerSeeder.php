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
                ['id' => '6','customer_name' => 'Anh thị Lung','customer_phone_number' => '0321884321','customer_date_buy' => '2021-05-17 20:38:18','customer_email' => 'lung@gmail.com','customer_address' => 'Mỹ Hào - Hưng yên','created_at' => NULL,'updated_at' => NULL]
            ]
        );
    }
}
