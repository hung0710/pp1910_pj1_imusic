<?php

use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            ['name' => 'Gửi Anh Xa Nhớ',
            'url' => '/music/GuiAnhXaNho-BichPhuong-4539289.mp3',
            'artists_id' => '4',
            'category_id' => '1',],
            ['name' => '[Vietsub] Đại Tuyết',
            'url' => '/music/Đại Tuyết-大雪.mp3',
            'artists_id' => '2',
            'category_id' => '2',],
            ['name' => 'Anh Không Sao Đâu',
            'url' => '/music/AnhKhongSaoDau-ChiDan-3681266.mp3',
            'artists_id' => '3',
            'category_id' => '1',],
            ['name' => 'Cây Trúc Xinh',
            'url' => '/music/CayTrucXinh-DucThanh_4avar.mp3',
            'artists_id' => '15',
            'category_id' => '1',],
            ['name' => 'Đi Cấy',
            'url' => '/music/DiCay-DucThanh_4avan.mp3',
            'artists_id' => '15',
            'category_id' => '1',],
            ['name' => 'Lòng Mẹ',
            'url' => '/music/LongMe-DucThanh_4avak.mp3',
            'artists_id' => '15',
            'category_id' => '1',],
            ['name' => 'Lý Thương Nhau',
            'url' => '/music/LyThuongNhau-DucThanh_4avat.mp3',
            'artists_id' => '15',
            'category_id' => '1',],
            ['name' => 'Lấy Chồng Sớm Làm Gì',
            'url' => '/music/LayChongSomLamGi-HuyRTuanCry-6175716.mp3',
            'artists_id' => '1',
            'category_id' => '1',],
            ['name' => 'Nắm Tay Nhau Đi Khắp Thế Gian',
            'url' => '/music/1592148349_NamTayNhauDiKhapTheGian-LinhHee-5107412.mp3',
            'artists_id' => '7',
            'category_id' => '1',],
            ['name' => 'Vẫn Yêu Người Cũ',
            'url' => '/music/1592148103_VanYeuNguoiYeuCu-LinhHee-4712885.mp3',
            'artists_id' => '7',
            'category_id' => '1',],
            ['name' => 'Em Sống Có Tốt Không',
            'url' => '/music/EmSongCoTotKhong-LinhHee-4781552.mp3',
            'artists_id' => '7',
            'category_id' => '1',],
            ['name' => 'Yêu Nhầm Người',
            'url' => '/music/YeuNhamNguoi-LinhHee-4355916.mp3',
            'artists_id' => '7',
            'category_id' => '1',],
            ['name' => 'Em Của Ngày Hôm Qua',
            'url' => '/music/EmCuaNgayHomQua-SonTungMTP-2882720.mp3',
            'artists_id' => '11',
            'category_id' => '1',],
            ['name' => 'Yêu Thật Đấy',
            'url' => '/music/YeuThatDay-LinhHee-4732133.mp3',
            'artists_id' => '7',
            'category_id' => '1',],
            ['name' => 'Day By Day',
            'url' => '/music/DayByDay-Tara-1856855.mp3',
            'artists_id' => '12',
            'category_id' => '3',],
            ['name' => 'Tìm Lại Bầu Trời',
            'url' => '/music/TimLaiBauTroi-TuanHung-2504559.mp3',
            'artists_id' => '14',
            'category_id' => '1',],
            ['name' => 'Cỏ 3 Lá',
            'url' => '/music/Co3La-5015945.mp3',
            'artists_id' => '16',
            'category_id' => '1',],
            ['name' => 'Lặng Nhìn Khoảng Cách',
            'url' => '/music/LangNhinKhoangCach4715858.mp3',
            'artists_id' => '16',
            'category_id' => '1',],
            ['name' => 'Anh Đã Bị Lừa',
            'url' => '/music/AnhDaBiLua-4604499.mp3',
            'artists_id' => '16',
            'category_id' => '1',],
            ['name' => 'Làm Người Yêu Anh Nhé BaBy',
            'url' => '/music/LamNguoiYeuAnhNheBaby-4581404.mp3',
            'artists_id' => '16',
            'category_id' => '1',],
            
        ]);
        //
    }
}
