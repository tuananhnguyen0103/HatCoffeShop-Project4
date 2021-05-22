<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    // 'categories_id' => 'categories_001',
                    'categories_name' => 'Cà Phê',
                    'categories_slug' =>'ca-phe',
                    'categories_images' => 'uploads/image/banners/ca-phe-truyen-thong.jpg',
                    'categories_parent_node'=> 0,
                    'categories_description'=> 'Sự kết hợp hoàn hảo giữa hạt cà phê Robusta & Arabica thượng hạng được trồng trên những vùng cao nguyên Việt Nam màu mỡ, qua những bí quyết rang xay độc đáo, Highlands Coffee chúng tôi tự hào giới thiệu những dòng sản phẩm Cà phê mang hương vị đậm đà và tinh tế.',
                ],
                [
                    // 'categories_id' => 'categories_002',
                    'categories_name' => 'Đồ Đá Xay',
                    'categories_slug' =>'do-da-xay',
                    'categories_images' => 'uploads/image/banners/do-da-xay.jpg',
                    'categories_parent_node'=> 0,
                    'categories_description'=> 'Sảng khoái với thức uống đá xay phong cách Việt. Freeze là thức uống đá xay mát lạnh được pha chế từ những nguyên liệu thuần túy của Việt Nam.
                    KHÁM PHÁ THÊM',
                ],[
                    // 'categories_id' => 'categories_003',
                    'categories_name' => 'Bánh Ngọt',
                    'categories_slug' =>'banh-ngot',
                    'categories_images' => 'uploads/image/banners/banh-ngot.jfif',
                    'categories_parent_node'=> 0,
                    'categories_description'=> 'Còn gì tuyệt vời hơn khi kết hợp thưởng thức đồ uống của bạn cùng với những chiếc bánh ngọt ngon tinh tế được làm thủ công ngay tại bếp bánh của Highlands Coffee. Những chiếc bánh của chúng tôi mang hương vị đặc trưng của ẩm thực Việt và còn là sự Tận Tâm, gửi gắm mà chúng tôi dành cho Quý khách hàng.',
                ],
                [
                    // 'categories_id' => 'categories_004',
                    'categories_name' => 'Đồ Ăn Chơi',
                    'categories_slug' =>'do-an-choi',
                    'categories_images' => 'uploads/image/banners/do-an-choi.jfif',
                    'categories_parent_node'=> 0,
                    'categories_description'=> 'Không chỉ có không gian thoáng mái, yên tĩnh để nhâm nhi café mà còn phục vụ những món ăn ngon miệng cho khách hàng đang trở thành điểm đến yêu thích của rất nhiều người',
                ],
                [
                    // 'categories_id' => 'categories_005',
                    'categories_name' => 'Trà Hoa Quả',
                    'categories_slug' =>'tra-hoa-qua',
                    'categories_images' => 'uploads/image/banners/tra-hoa-qua.jpg',
                    'categories_parent_node'=> 0,
                    'categories_description'=> 'Hương vị tự nhiên, thơm ngon của Trà Việt với phong cách hiện đại tại Highlands Coffee sẽ giúp bạn gợi mở vị giác của bản thân và tận hưởng một cảm giác thật khoan khoái, tươi mới.',
                ],
                [
                    // 'categories_id' => 'categories_006',
                    'categories_name' => 'Cà Phê Đổi Mới',
                    'categories_slug' =>'ca-phe-doi-moi',
                    'categories_images' => 'uploads/image/banners/ca-phe-doi-moi.jpg',
                    'categories_parent_node'=> 1,
                    'categories_description'=> 'Việt Nam tự hào sở hữu một di sản văn hóa cà phê giàu có, và Phin chính là linh hồn, là nét văn hóa thưởng thức cà phê đã ăn sâu vào tiềm thức biết bao người Việt. Cà phê rang xay được chiết xuất chậm rãi từng giọt một thông qua dụng cụ lọc bằng kim loại có tên là Phin, cũng giống như thể hiện sự sâu sắc trong từng suy nghĩ và chân thành trong những mối quan hệ hiện hữu. Bạn có thể tùy thích lựa chọn uống nóng hoặc dùng chung với đá, có hoặc không có sữa đặc. Highlands Coffee tự hào phục vụ cà phê Việt theo cách truyền thống của người Việt.',
                ],
                [
                    // 'categories_id' => 'categories_007',
                    'categories_name' => 'Cà Phê Nguyên Chất',
                    'categories_slug' =>'ca-phe-nguyen-chat',
                    'categories_images' => 'uploads/image/banners/ca-phe-truyen-thong.jpg',
                    'categories_parent_node'=> 1,
                    'categories_description'=> 'Một thế hệ Cà Phê Phin Việt Nam hoàn toàn mới, phục vụ cho thế hệ trẻ đầy nhiệt huyết, độc lập và sáng tạo. Vẫn mang trong mình tinh tuý chắt lọc từ Cà Phê Phin Việt Nam nhưng êm chất Phin, kết hợp độc đáo cùng những vị ngon từ Kem Sữa - Hạnh Nhân - Choco. PhinDi, Cà Phê Phin Thế Hệ Mới - Chất Phin Êm, Ngon Tròn Vị!',
                ]
            ]);
    }
}
