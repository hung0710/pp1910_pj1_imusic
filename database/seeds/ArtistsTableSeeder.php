<?php

use Illuminate\Database\Seeder;
use App\Models\Artists;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artistses')->insert([
            ['name'=>'HuyR',
            'url'=>'/img/1592881188_huyr.jpg',
            'information'=>'Vũ Văn Huy quê quán Vĩnh Phúc. Không theo học âm nhạc bài bản nhưng vì đam mê nên tìm tòi sáng tác và bắt đầu viết nhạc từ năm lớp 11.',],
            ['name'=>'Vương Tử Ngọc',
            'url'=>'/img/1592882020_vuongtungoc.jpg',
            'information'=>'đang cập nhập',],
            ['name'=>'Chi Dân',
            'url'=>'/img/chidan.jpg',
            'information'=>'Chi Dân sinh năm 1989 và đã có thời gian sinh hoạt ca hát trong nhóm Hero trước đây. Sau một thời gian hoạt động trong nhóm thu được một số kinh nghiệm, Chi Dân quyết định rời nhóm khi hết hợp đồng và theo đuổi con đường ca hát solo.',],
            ['name'=>'Bích Phương',
            'url'=>'/img/bich-phuong.jpg',
            'information'=>'Bích Phương là ca sĩ trưởng thành từ cuộc thi Việt Nam Idol 2010.
            Năm 2011, cô nổi lên như một hiện tượng với hàng loạt những ca khúc Pop Ballad mang giai điệu trữ tình, lời ca đi sâu vào lòng người như: Vẫn, Có khi nào rời xa, Kí ức ngủ quên,... Bích Phương nhanh chóng chiếm được tình cảm của đông đảo khán giả trẻ nhờ giọng hát mượt mà, sâu lắng cùng ngoại hình xinh đẹp, nữ tính.',],
            ['name'=>'Khởi My',
            'url'=>'/img/khoimy.jpg',
            'information'=>'Khởi My được biết đến với vai trò là ca sĩ, đạt giải Nhất tiếng hát học đường năm 2007, MC và là một trong những nữ ca sĩ xinh đẹp, nổi tiếng với các ca khúc như Vì sao, Hạt cát và Đôi cánh. Hiện nay cô đang sống và làm việc tại TP.Hồ Chí Minh.',],
            ['name'=>'Lê Bảo Bình',
            'url'=>'/img/lebaobinh.jpg',
            'information'=>'TIỂU SỬ
            Lê Bảo Bình được biết đến là một ca sĩ nhạc trẻ của Việt Nam, anh đang là cái tên gây sốt trong cộng đồng mạng với loạt ca khúc nói về gia đình, cha mẹ, những người tha hương xa nhà rất nhiều ý nghĩa.Anh được rất nhiều các khán giả trẻ Việt Nam yêu mến.',],
            ['name'=>'Linh Hee',
            'url'=>'/img/linhhee.jpg',
            'information'=>'Tên thật: Ngô Quang Linh. Ngày sinh: 25/10/1997'],
            ['name'=>'Min',
            'url'=>'/img/min.jpg',
            'information'=>'Nguyễn Minh Hằng được biết tới với nghệ danh MIN. MIN bắt đầu được biết đến với tư cách là thành viên của nhóm nhảy St.319 (tiền thân của công ty giải trí St.319 Entertainment).',],
            ['name'=>'Mỹ Tâm',
            'url'=>'/img/mytam.jpg',
            'information'=>'Mỹ Tâm sinh ra tại Đà Nẵng, quê gốc của cô ở Điện Thọ, Điện Bàn, tỉnh Quảng Nam, Việt Nam. Là con út trong một gia đình có tám anh chị em, ngay từ nhỏ cô đã thể hiện mình có khả năng về âm nhạc. Từ năm 1997 đến 2001, cô học hệ trung cấp chính quy (4 năm) khoa thanh nhạc Nhạc viện Thành phố Hồ Chí Minh và tốt nghiệp thủ khoa.',],
            ['name'=>'Noo Phước Thịnh',
            'url'=>'/img/noo_phuoc_thinh_05_iaah.jpg',
            'information'=>'Trước khi trở thành ca sĩ, anh được biết đến với vai trò người mẫu ảnh của các tạp chí tuổi teen những năm 2007-2008. Khả năng âm nhạc của anh vô tình được phát hiện bởi ca sĩ Thủy Tiên và sau đó, anh đã cộng tác với cô khi bước vào sự nghiệp ca hát.',],
            ['name'=>'Sơn Tùng M-TP',
            'url'=>'/img/sontung.jpg',
            'information'=>'Sơn Tùng M-TP (tên thật là Nguyễn Thanh Tùng) sinh ra và lớn lên tại một vùng quê của tỉnh Thái Bình. Vốn sở hữu “gen di truyền” từ người mẹ của mình, một nghệ sĩ biểu diễn hát chèo tại Nhà hát Thái Bình nên Tùng đã bộc lộ khả năng âm nhạc của mình ngay từ khi còn là một cậu bé mới chập chững những bước đi đầu tiên.',],
            ['name'=>'T-Ara',
            'url'=>'/img/tara-.jpg',
            'information'=>'T-ara là một nhóm nhạc nữ đến từ Seoul, Hàn Quốc được thành lập bởi Core Contents Media trong năm 2009.',],
            ['name'=>'Đông Nhi',
            'url'=>'/img/tieu-su-ca-si-dong-nhi-3266.jpg',
            'information'=>'Đông Nhi sinh ra tại Hà Nội, Ba mẹ cô có hai người con gái, cô và người chị hơn cô 6 tuổi. Năm cô được 2 tuổi thì gia đình chuyển vào Thành phố Hồ Chí Minh sinh sống.',],
            ['name'=>'Tuấn Hưng',
            'url'=>'/img/tuanhung.jpg',
            'information'=>'Sinh ra và lớn lên tại Hà Nội, nay lập nghiệp ở Sài Gòn, với Tuấn Hưng, Hà Nội mãi mãi vẫn đẹp, nên thơ và cổ kính. Năm Hưng học lớp 11 (1995), nhà trường tổ chức liên hoan văn nghệ mừng ngày Nhà giáo Việt Nam, Hưng đã tham gia chương trình với bài "Hãy hàn gắn thế giới". Giọng Tuấn Hưng được giới âm nhạc phát hiện từ dịp đó. Và cũng từ đó, trong Hưng âm ỉ một khát khao được gắn bó với âm nhạc.',],
            ['name'=>'Phạm Đức Thanh',
            'url'=>'/img/phamducthanh.jpg',
            'information'=>'Nghệ sĩ Phạm Đức Thành sinh năm 1956 tại thôn Đoan Bình, xã Gia Phú, huyện Gia Viễn, tỉnh Ninh Bình.',],
            ['name'=>'3 Chú Bộ Đội',
            'url'=>'/img/1592882020_3chubodoi.jpg',
            'information'=>'Nhóm nhạc 3 chú bộ đội gồm 3 thành viên:
                - Nguyên Jenda tên thật Cao Trung Nguyên - nhạc sĩ
                - Tuấn đen tên thật Vừ Mí Tuấn - ca sĩ
                - Mạnh Mh tên thật Nông Đức Mạnh - ca sĩ',],
            
        ]);
        //
    }
}
