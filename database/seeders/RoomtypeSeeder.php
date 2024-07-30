<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('roomtypes')->insert([
            ['title' => 'Phòng tiêu chuẩn', 'description' => 'Phòng tiêu chuẩn với các tiện nghi cơ bản, phù hợp cho những ai tìm kiếm sự đơn giản và tiết kiệm', 'comment_id' => 1, 'is_public' => 1, 'image_id' => 1, 'price_per_night' => 100.0, 'room_quanlity' => 1,],
            ['title' => 'Phòng cao cấp', 'description' => 'Căn hộ sang trọng và rộng rãi phù hợp cho những ai muốn trải nghiệm nghỉ dưỡng đặc biệt.', 'comment_id' => 2, 'is_public' => 1, 'image_id' => 2, 'price_per_night' => 150.0, 'room_quanlity' => 2,],
            ['title' => 'Căn hộ sang trọng', 'description' => 'Phòng cao cấp dành cho người đi công tác, với các tiện ích và không gian làm việc riêng biệt.', 'comment_id' => 3, 'is_public' => 1, 'image_id' => 3, 'price_per_night' => 200.0, 'room_quanlity' => 2,],
            ['title' => 'Phòng gia đình', 'description' => 'Phòng dành cho gia đình, có diện tích lớn và các tiện nghi phù hợp để cả gia đình có thể cùng lưu trú.', 'comment_id' => 4, 'is_public' => 1, 'image_id' => 4, 'price_per_night' => 200.0, 'room_quanlity' => 2,],
            ['title' => 'Phòng View', 'description' => 'Phòng có view đẹp ra bên ngoài như biển, thành phố, hoặc vườn, mang lại trải nghiệm thư giãn và đẳng cấp.', 'comment_id' => 5, 'is_public' => 1, 'image_id' => 5, 'price_per_night' => 200.0, 'room_quanlity' => 2,],
            ['title' => 'Phòng VIP', 'description' => 'Phòng có các tiện nghi và không gian nghỉ ngơi cao cấp hơn, thường đi kèm với dịch vụ khách hàng tốt nhất', 'comment_id' => 6, 'is_public' => 1, 'image_id' => 6, 'price_per_night' => 200.0, 'room_quanlity' => 2,],
        ]);
    }
}
