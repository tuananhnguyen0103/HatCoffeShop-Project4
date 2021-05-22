<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bill_details')->insert(
            [
                ['id' => '1','product_id' => '11','product_quantity' => '1','product_total' => '35000','bill_id' => '1','created_at' => NULL,'updated_at' => NULL],
                ['id' => '2','product_id' => '12','product_quantity' => '1','product_total' => '35000','bill_id' => '1','created_at' => NULL,'updated_at' => NULL],
                ['id' => '3','product_id' => '13','product_quantity' => '1','product_total' => '35000','bill_id' => '1','created_at' => NULL,'updated_at' => NULL],
                ['id' => '4','product_id' => '14','product_quantity' => '4','product_total' => '140000','bill_id' => '1','created_at' => NULL,'updated_at' => NULL],
                ['id' => '5','product_id' => '16','product_quantity' => '1','product_total' => '35000','bill_id' => '1','created_at' => NULL,'updated_at' => NULL],
                ['id' => '6','product_id' => '17','product_quantity' => '1','product_total' => '35000','bill_id' => '1','created_at' => NULL,'updated_at' => NULL],
                ['id' => '7','product_id' => '15','product_quantity' => '1','product_total' => '35000','bill_id' => '1','created_at' => NULL,'updated_at' => NULL],
                ['id' => '8','product_id' => '11','product_quantity' => '1','product_total' => '35000','bill_id' => '2','created_at' => NULL,'updated_at' => NULL],
                ['id' => '9','product_id' => '12','product_quantity' => '1','product_total' => '35000','bill_id' => '2','created_at' => NULL,'updated_at' => NULL],
                ['id' => '10','product_id' => '13','product_quantity' => '1','product_total' => '35000','bill_id' => '2','created_at' => NULL,'updated_at' => NULL],
                ['id' => '11','product_id' => '14','product_quantity' => '4','product_total' => '140000','bill_id' => '2','created_at' => NULL,'updated_at' => NULL],
                ['id' => '12','product_id' => '16','product_quantity' => '1','product_total' => '35000','bill_id' => '2','created_at' => NULL,'updated_at' => NULL],
                ['id' => '13','product_id' => '17','product_quantity' => '1','product_total' => '35000','bill_id' => '2','created_at' => NULL,'updated_at' => NULL],
                ['id' => '14','product_id' => '15','product_quantity' => '1','product_total' => '35000','bill_id' => '2','created_at' => NULL,'updated_at' => NULL],
                ['id' => '15','product_id' => '11','product_quantity' => '1','product_total' => '35000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '16','product_id' => '13','product_quantity' => '1','product_total' => '35000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '17','product_id' => '12','product_quantity' => '1','product_total' => '35000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '18','product_id' => '14','product_quantity' => '1','product_total' => '35000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '19','product_id' => '5','product_quantity' => '1','product_total' => '35000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '20','product_id' => '6','product_quantity' => '1','product_total' => '35000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '21','product_id' => '21','product_quantity' => '1','product_total' => '25000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '22','product_id' => '19','product_quantity' => '1','product_total' => '25000','bill_id' => '3','created_at' => NULL,'updated_at' => NULL],
                ['id' => '23','product_id' => '12','product_quantity' => '1','product_total' => '35000','bill_id' => '4','created_at' => NULL,'updated_at' => NULL],
                ['id' => '24','product_id' => '14','product_quantity' => '1','product_total' => '35000','bill_id' => '4','created_at' => NULL,'updated_at' => NULL],
                ['id' => '25','product_id' => '16','product_quantity' => '1','product_total' => '35000','bill_id' => '5','created_at' => NULL,'updated_at' => NULL],
                ['id' => '26','product_id' => '18','product_quantity' => '1','product_total' => '35000','bill_id' => '5','created_at' => NULL,'updated_at' => NULL],
                ['id' => '27','product_id' => '11','product_quantity' => '4','product_total' => '140000','bill_id' => '6','created_at' => NULL,'updated_at' => NULL],
                ['id' => '28','product_id' => '5','product_quantity' => '4','product_total' => '140000','bill_id' => '6','created_at' => NULL,'updated_at' => NULL],
                ['id' => '29','product_id' => '6','product_quantity' => '3','product_total' => '105000','bill_id' => '6','created_at' => NULL,'updated_at' => NULL]
            ]
        );
    }
}
