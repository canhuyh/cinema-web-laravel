<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(chuc_vus::class);
        $this->call(nhan_viens::class);
        $this->call(loai_phims::class);
        $this->call(gias::class);
        $this->call(gioi_han_tuois::class);
        $this->call(phims::class);
        $this->call(chi_nhanhs::class);
        $this->call(raps::class);
        $this->call(thanh_viens::class);
        $this->call(loai_ghes::class);
        $this->call(ghes::class);
        $this->call(thoi_gian_chieus::class);
        $this->call(lich_chieus::class);
        $this->call(binh_luans::class);
    }
}

class chuc_vus extends Seeder
{
    public function run()
    {
        DB::table('chuc_vus')->insert([
            ['TenCV' => 'Quản lý', 'TrangThai' => 1],
            ['TenCV' => 'Bán vé', 'TrangThai' => 1],
            ['TenCV' => 'Giữ xe', 'TrangThai' => 1],
        ]);
    }
}
class nhan_viens extends Seeder
{
    public function run()
    {
        DB::table('nhan_viens')->insert([
            ['HoNV' => 'Phạm', 'name' => 'Nhựt', 'Avatar' => 'CamNhung.jpg', 'NgaySinh' => '2000-10-10', 'DiaChi' => 'Bến Tre', 'SDT' => '0911079197', 'email' => 'nhatminh785@gmail.com', 'MaCV' => 1, 'MaNQL' => null, 'password' => bcrypt('12345'), 'TrangThai' => 1],
            ['HoNV' => 'Huỳnh', 'name' => 'Cảnh', 'Avatar' => 'canh.jpg', 'NgaySinh' => '2000-10-2', 'DiaChi' => 'Bình Thuận', 'SDT' => '12345678', 'email' => 'canhcdth18pmc@gmail.com', 'MaCV' => 3, 'MaNQL' => 1, 'password' => bcrypt('12345'), 'TrangThai' => 1],
            ['HoNV' => 'Trần', 'name' => 'Thảo', 'Avatar' => 'thao.jpg', 'NgaySinh' => '2000-10-2', 'DiaChi' => 'HCM', 'SDT' => '123456789', 'email' => 'thaocdth18pmc@gmail.com', 'MaCV' => 2, 'MaNQL' => 1, 'password' => bcrypt('12345'), 'TrangThai' => 1],
        ]);
    }
}
class loai_phims extends Seeder
{
    public function run()
    {
        DB::table('loai_phims')->insert([
            ['TenLoaiPhim' => 'Tình cảm', 'MaNV' => 1, 'TrangThai' => 1],
            ['TenLoaiPhim' => 'Hành động', 'MaNV' => 1, 'TrangThai' => 1],

        ]);
    }
}
class gias extends Seeder
{
    public function run()
    {
        DB::table('gias')->insert([
            ['DonGia' => 50000, 'TrangThai' => 1],
            ['DonGia' => 100000, 'TrangThai' => 1],
            ['DonGia' => 150000, 'TrangThai' => 1],
        ]);
    }
}
class gioi_han_tuois extends Seeder
{
    public function run()
    {
        DB::table('gioi_han_tuois')->insert([
            ['TenGioiHan' => '18+', 'TrangThai' => 1],
            ['TenGioiHan' => '12+', 'TrangThai' => 1],
        ]);
    }
}
class phims extends Seeder
{
    public function run()
    {
        DB::table('phims')->insert([
            //PHIM ĐANG CHIẾU
            ['TenPhim' => "'EM' LÀ CỦA EM", 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 180, 'DaoDien' => 'Trần Thanh Huy', 'DienVien' => 'Trần Anh Khoa', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 4, 'HinhAnh' => 'em-la-cua-em.jpg', 'LinkPhim' => 'kJcfrHDTSEQ', 'MaLoaiPhim' => 2, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 1],
            ['TenPhim' => 'CẬU VÀNG', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Trần Thanh Huy', 'DienVien' => 'Trần Anh Khoa', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'cau-vang.jpg', 'LinkPhim' => 'M4Zn8gumnr8', 'MaLoaiPhim' => 2, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 1],
            ['TenPhim' => 'PHÒNG CHAT QUỶ ÁM', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Đỏ', 'DienVien' => 'Đỏ', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'phong-chat-quy-am.jpg', 'LinkPhim' => 'Rwrt45JYdQ8', 'MaLoaiPhim' => 1, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 1],
            ['TenPhim' => 'CUỘC SỐNG NHIỆM MÀU', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Cam', 'DienVien' => 'Cam', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'cuoc-song-nhiem-mau.jpg', 'LinkPhim' => 'D6zVlPKn2AI', 'MaLoaiPhim' => 1, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 1],
            ['TenPhim' => 'CHỊ MƯỜI BA: 3 NGÀY SINH TỬ', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Vàng', 'DienVien' => 'Vàng', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'chi-muoi-ba-3-ngay-sinh-tu.jpg', 'LinkPhim' => 'TruuhVMPwi8', 'MaLoaiPhim' => 2, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 1],
            //PHIM SẮP CHIẾU
            ['TenPhim' => 'ĐƯỜNG CONG CỦA QUỶ', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Xanh', 'DienVien' => 'Xanh', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'duong-cong-cua-quy.jpg', 'LinkPhim' => 'h1Vo1UjawxM', 'MaLoaiPhim' => 1, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 0],
            ['TenPhim' => 'MIỀN ĐẤT HỨA', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Hồng', 'DienVien' => 'Hồng', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'mien-dat-hua.jpg', 'LinkPhim' => 'iuig0XFuH8Y', 'MaLoaiPhim' => 2, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 0],
            ['TenPhim' => 'LỪA ĐẾU GẶP LỪA ĐẢO', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Trắng', 'DienVien' => 'Trắng', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'lua-deu-gap-lua-dao.jpg', 'LinkPhim' => 'T36HGZagV5w', 'MaLoaiPhim' => 1, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 0],
            ['TenPhim' => 'CUỘC GIẢI CỨU SINH TỬ', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Nâu', 'DienVien' => 'Nâu', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'cuoc-giai-cuu-sinh-tu.jpg', 'LinkPhim' => 'qZBOe2is_M4', 'MaLoaiPhim' => 2, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 0],
            ['TenPhim' => 'SÁM HỐI', 'NgayDKChieu' => '2020-10-10', 'NgayKetThuc' => '2020-11-10', 'ThoiLuong' => 210, 'DaoDien' => 'Đen', 'DienVien' => 'Đen', 'NoiDung' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.", 'Diem' => 5, 'HinhAnh' => 'sam-hoi.jpg', 'LinkPhim' => '_ffRLhWSPGk', 'MaLoaiPhim' => 1, 'MaNV' => 1, 'Nhan' => 1, 'TrangThai' => 0],
        ]);
    }
}

class chi_nhanhs extends Seeder
{
    public function run()
    {
        DB::table('chi_nhanhs')->insert([
            ['TenChiNhanh' => 'CB2NT Vạn Hạnh MAll', 'SoLuongRap' => 1, 'DiaChi' => '11 Sư Vạn Hạnh, Phường 12, Quận 10, Thành phố Hồ Chí Minh', 'SDT' => '02838625588', 'MaNV' => 1, 'TrangThai' => 1],
        ]);
    }
}

class raps extends Seeder
{
    public function run()
    {
        DB::table('raps')->insert([
            ['TenRap' => 'Rap1', 'SoLuongGhe' => 50, 'MaChiNhanh' => 1, 'TrangThai' => 1],
            ['TenRap' => 'Rap2', 'SoLuongGhe' => 50, 'MaChiNhanh' => 1, 'TrangThai' => 1],
        ]);
    }
}
class loai_ghes extends Seeder
{
    public function run()
    {
        DB::table('loai_ghes')->insert([
            ['MaLoaiGhe' => 'TE1', 'TenLoaiGhe' => 'Ghế trẻ em', 'MaGia' => 1, 'TrangThai' => 1],
            ['MaLoaiGhe' => 'BT1', 'TenLoaiGhe' => 'Ghế bình thường', 'MaGia' => 2, 'TrangThai' => 1],
            ['MaLoaiGhe' => 'VIP1', 'TenLoaiGhe' => 'Ghế Vip', 'MaGia' => 3, 'TrangThai' => 1],
        ]);
    }
}
class ghes extends Seeder
{
    public function run()
    {
        DB::table('ghes')->insert([
            /**
             * RẠP 1
             */
            // hàng A
            ['MaGhe' => 'RAP1-A1', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-A2', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-A3', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-A4', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-A5', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-A6', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-A7', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-A8', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 1, 'ChiSoHang' => 'A', 'ChiSoCot' => 8, 'TrangThai' => 1],

            // hàng B
            ['MaGhe' => 'RAP1-B1', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-B2', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-B3', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-B4', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-B5', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-B6', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-B7', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-B8', 'MaLoaiGhe' => 'TE1', 'MaRap' => 1, 'ChiSoHang' => 'B', 'ChiSoCot' => 8, 'TrangThai' => 1],
            //Hàng C
            ['MaGhe' => 'RAP1-C1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-C2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-C3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-C4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-C5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-C6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-C7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-C8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'C', 'ChiSoCot' => 8, 'TrangThai' => 1],
            //Hàng D
            ['MaGhe' => 'RAP1-D1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-D2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-D3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-D4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-D5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-D6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-D7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-D8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'D', 'ChiSoCot' => 8, 'TrangThai' => 1],
            // Hàng E
            ['MaGhe' => 'RAP1-E1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-E2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-E3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-E4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-E5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-E6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-E7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-E8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'E', 'ChiSoCot' => 8, 'TrangThai' => 1],
            // Hàng F
            ['MaGhe' => 'RAP1-F1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-F2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-F3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-F4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-F5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-F6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-F7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP1-F8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 1, 'ChiSoHang' => 'F', 'ChiSoCot' => 8, 'TrangThai' => 1],

            /**
             * RẠP 2
             */
            // hàng A
            ['MaGhe' => 'RAP2-A1', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-A2', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-A3', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-A4', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-A5', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-A6', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-A7', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-A8', 'MaLoaiGhe' => 'VIP1', 'MaRap' => 2, 'ChiSoHang' => 'A', 'ChiSoCot' => 8, 'TrangThai' => 1],

            // hàng B
            ['MaGhe' => 'RAP2-B1', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-B2', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-B3', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-B4', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-B5', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-B6', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-B7', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-B8', 'MaLoaiGhe' => 'TE1', 'MaRap' => 2, 'ChiSoHang' => 'B', 'ChiSoCot' => 8, 'TrangThai' => 1],
            //Hàng C
            ['MaGhe' => 'RAP2-C1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-C2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-C3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-C4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-C5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-C6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-C7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-C8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'C', 'ChiSoCot' => 8, 'TrangThai' => 1],
            //Hàng D
            ['MaGhe' => 'RAP2-D1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-D2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-D3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-D4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-D5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-D6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-D7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-D8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'D', 'ChiSoCot' => 8, 'TrangThai' => 1],
            // Hàng E
            ['MaGhe' => 'RAP2-E1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-E2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-E3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-E4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-E5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-E6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-E7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-E8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'E', 'ChiSoCot' => 8, 'TrangThai' => 1],
            // Hàng F
            ['MaGhe' => 'RAP2-F1', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 1, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-F2', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 2, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-F3', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 3, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-F4', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 4, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-F5', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 5, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-F6', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 6, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-F7', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 7, 'TrangThai' => 1],
            ['MaGhe' => 'RAP2-F8', 'MaLoaiGhe' => 'BT1', 'MaRap' => 2, 'ChiSoHang' => 'F', 'ChiSoCot' => 8, 'TrangThai' => 1]
        ]);
    }
}
class thoi_gian_chieus extends Seeder
{
    public function run()
    {
        DB::table('thoi_gian_chieus')->insert([
            ['ThoiGianChieu' => '16:30:00', 'TrangThai' => 1],
            ['ThoiGianChieu' => '19:30:00', 'TrangThai' => 1],
        ]);
    }
}
class lich_chieus extends Seeder
{
    public function run()
    {
        DB::table('lich_chieus')->insert([
            ['MaThoiGianChieu' => 1, 'MaPhim' => 1, 'NgayChieu' => '2020-12-20', 'MaRap' => 1, 'TrangThai' => 1],
            ['MaThoiGianChieu' => 2, 'MaPhim' => 1, 'NgayChieu' => '2020-12-20', 'MaRap' => 1, 'TrangThai' => 1],
        ]);
    }
}

class thanh_viens extends Seeder
{
    public function run()
    {
        DB::table('thanh_viens')->insert([
            ['HoTenTV' => 'Huỳnh Thanh Cảnh', 'NgaySinh' => '2000-10-02', 'SDT' => '0947479207', 'Email' => 'huynhthanhcanh.top@gmail.com', 'Password' => md5('12345'), 'DiaChi' => 'Bình Thạnh', 'TrangThai' => 1],
            ['HoTenTV' => 'Phạm Minh Nhựt', 'NgaySinh' => '2000-10-10', 'SDT' => '0911079197', 'Email' => 'phamminhnhut@gmail.com', 'Password' => md5('12345'), 'DiaChi' => "Nhà Bè",  'TrangThai' => 1],
            ['HoTenTV' => 'Đặng Thái Bình', 'NgaySinh' => '2000-10-10', 'SDT' => '0911079197', 'Email' => 'dangthaibinh@gmail.com', 'Password' => md5('12345'), 'DiaChi' => "Nhà Bè",  'TrangThai' => 1],
            ['HoTenTV' => 'Trần Huỳnh Thạch Thảo', 'NgaySinh' => '2000-10-10', 'SDT' => '0911079197', 'Email' => 'tranhuynhthachthao@gmail.com', 'Password' => md5('12345'), 'DiaChi' => "Nhà Bè",  'TrangThai' => 1],
            ['HoTenTV' => 'Vũ Thị Trang', 'NgaySinh' => '2000-10-10', 'SDT' => '0911079197', 'Email' => 'vuthitrang@gmail.com', 'Password' => md5('12345'), 'DiaChi' => "Nhà Bè",  'TrangThai' => 1],
        ]);
    }
}

class binh_luans extends Seeder
{
    public function run()
    {
        DB::table('binh_luans')->insert([
            ['MaTV' => 1, 'MaPhim' => 1, 'NoiDungBinhLuan' => 'Phim rất hay', 'TrangThai' => 1],
            ['MaTV' => 2, 'MaPhim' => 1, 'NoiDungBinhLuan' => 'Phim rất hay quá hà <3', 'TrangThai' => 1],
            ['MaTV' => 3, 'MaPhim' => 1, 'NoiDungBinhLuan' => 'Toẹt zời', 'TrangThai' => 1],
            ['MaTV' => 4, 'MaPhim' => 1, 'NoiDungBinhLuan' => 'rất hay', 'TrangThai' => 1],
            ['MaTV' => 5, 'MaPhim' => 1, 'NoiDungBinhLuan' => 'phim suất sắc', 'TrangThai' => 1],
            ['MaTV' => 1, 'MaPhim' => 2, 'NoiDungBinhLuan' => 'phim suất sắc', 'TrangThai' => 1],
            ['MaTV' => 2, 'MaPhim' => 2, 'NoiDungBinhLuan' => 'phim toẹt zời', 'TrangThai' => 1],
            ['MaTV' => 3, 'MaPhim' => 3, 'NoiDungBinhLuan' => 'phim toẹt zời', 'TrangThai' => 1],
            ['MaTV' => 4, 'MaPhim' => 3, 'NoiDungBinhLuan' => 'phim hay quá', 'TrangThai' => 1],
            ['MaTV' => 1, 'MaPhim' => 4, 'NoiDungBinhLuan' => 'phim hay quá', 'TrangThai' => 1],
            ['MaTV' => 1, 'MaPhim' => 4, 'NoiDungBinhLuan' => 'phim hay quá', 'TrangThai' => 1],
            ['MaTV' => 3, 'MaPhim' => 4, 'NoiDungBinhLuan' => 'phim hay quá hihi', 'TrangThai' => 1],
            ['MaTV' => 5, 'MaPhim' => 4, 'NoiDungBinhLuan' => 'phim hay quá trời hihi', 'TrangThai' => 1],
        ]);
    }
}