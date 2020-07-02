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
            'category_id' => '1',
            'lyrics' => 'Anh xa nhớ anh có khỏe không
            Em lâu lắm không viết thư tay
            Đầu thư em chẳng biết nói gì
            Ngoài câu em ở đây nhớ anh vơi đầy
            Anh hãy cứ yên tâm công tác
            Em da diết thủy chung một lòng
            Ngày em nghĩ về anh thật nhiều
            Để đêm đêm nằm mơ về anh
            
            Chorus:
            Anh đi hoài đường xa
            Em vẫn chờ nơi ấy
            Em yêu lắm đấy
            Em thương lắm đấy
            Em lo cho a nhiều đấy
            Mong đến ngày gặp nhau
            Dẫu cách trở bao lâu
            Mua bao thuốc lá, mua *** gói bánh
            Anh sang thưa chuyện cùng em nghe anh',],
            ['name' => '[Vietsub] Đại Tuyết',
            'url' => '/music/Đại Tuyết-大雪.mp3',
            'artists_id' => '2',
            'category_id' => '2',
            'lyrics' => 'Dài wǒ qù wǎng
            Zài dàxuě fùgài dì dìfāng
            Zhuǎnzhe quān shēnshǒu jiēguò yín shuāng
            Fā shāo yǒu luò bái huǎng dàng
            
            Yǎn qù lái shí de jiǎoyìn zhǎng zhǎng
            Wǒ cóng huāngyě zhōng pánshān lái
            Jiè rénjiān dì yī zhī dǒu kāi
            Fēnmíng zhǐshì xúncháng néngnài
            
            Zhè xì xuě piānpiān zhuàng qióng tái
            Tí shī zhōng hángshū lǎocǎo
            Huànle xiǎokǎi
            Chuān chénguò yī gān shòu zhú
            
            Zhèng tā qīngbái
            Fēnggǔ yóu zài shìrén gǎnkǎi
            Nà qínghuái
            Dài wǒ qù wǎng
            
            Zài dàxuě fùgài dì dìfāng
            Zhuǎnzhe quān shēnshǒu jiēguò yín shuāng
            Fā shāo yǒu luò bái huǎng dàng
            Lái shí de jiǎoyìn zhǎng zhǎng
            
            Dài wǒ qù wǎng
            Zài dàxuě fùgài dì dìfāng
            Yī rú nǐ zǒushí bù shēng bù xiǎng
            Liántóng zhè yíhàn máimò yú shēn xiàng
            
            Bù sù qíng cháng
            Wǒ cóng xiàng wěi zhōng liàngqiàng lái
            Yú rénjiān dì jǐ chù liú bái
            Tā duī zuò qióng huā fēi shì wài',],
            ['name' => 'Anh Không Sao Đâu',
            'url' => '/music/AnhKhongSaoDau-ChiDan-3681266.mp3',
            'artists_id' => '3',
            'category_id' => '1',
            'lyrics' =>'Có sao đâu anh cũng thấy buồn nhưng chẳng lâu
            Dẫu nơi đâu anh vẫn chạy đến để ôm chặt em
            Hạnh phúc cho ai là do em chọn còn niềm đau hãy để anh đón
            Đừng buồn em ơi vì đã có anh buồn thay rồi
            
            Ở nơi đâu em cũng thấy buồn vì nhớ ai
            Có sao đâu em vẫn còn có anh để kề vai
            Hạnh phúc bên ai tuy chẳng lâu dài
            Thôi thì xem như mình không may
            Trên thế gian này đâu chỉ có một người con trai
            
            Nhiều lần đã nói không sao nhưng đã biết bao lần nhìn em đau
            Lòng này đau lắm nhưng không thể nói hết cõi lòng anh
            Anh mặc dù không tốt,nhưng tốt hơn người mà em yêu
            Điều gì nơi anh??? làm em không thể yêu anh???
            
            Nhiều lần cũng muốn buông xuôi và nhắm mắt xem điều gì sẽ đến.
            Giật mình mới biết nơi anh tìm đến vẫn chính là em
            Anh vẫn tìm về em,không đơn giản chỉ vì yêu em
            Mà còn để gạt nước mắt và nói dối "anh chẳng sao đâu"
            
            Anh vẫn tìm về em,không đơn giản chỉ vì nhớ em
            Mà còn để gạt nước mắt và nói dối "anh chẳng sao đâu".',],
            ['name' => 'Cây Trúc Xinh',
            'url' => '/music/CayTrucXinh-DucThanh_4avar.mp3',
            'artists_id' => '15',
            'category_id' => '1',
            'lyrics' =>'Đang cập nhập',],
            ['name' => 'Đi Cấy',
            'url' => '/music/DiCay-DucThanh_4avan.mp3',
            'artists_id' => '15',
            'category_id' => '1',
            'lyrics' =>'Đang cập nhập',],
            ['name' => 'Lòng Mẹ',
            'url' => '/music/LongMe-DucThanh_4avak.mp3',
            'artists_id' => '15',
            'category_id' => '1',
            'lyrics' =>'Lòng Mẹ bao la như biển Thái Bình dạt dào.
            Tình Mẹ tha thiết như dòng suối hiền ngọt ngào.
            Lời ru êm ái như đồng lúa chiều rì rào.
            Tiếng ru bên thềm trăng tà soi bóng Mẹ yêu.
            
            Lòng Mẹ thương con như vầng trăng tròn mùa thu.
            Tình Mẹ yêu mến như làn gió đùa mặt hồ.
            Lời ru man mác êm như sáo diều dật dờ.
            Nắng mưa sớm chiều vui cùng tiếng hát trẻ thơ.
            
            Thương con thao thức bao đêm trường.
            Con đã yên giấc Mẹ hiền vui sướng biết bao.
            Thương con khuya sớm bao tháng ngày.
            Lặn lội gieo neo nuôi con tới ngày lớn khôn.
            
            Dù cho mưa gió không quản thân gầy Mẹ hiền.
            Một sương hai nắng cho bạc mái đầu buồn phiền.
            Ngày đêm sớm tối vui cùng con nhỏ một niềm.
            Tiếng ru êm đềm mẹ hiền năm tháng triền miên.
            
            Lòng Mẹ chan chứa trên bao xóm làng gần xa.
            Tình Mẹ dâng tới trăng ngàn đứng lặng để nghe.
            Lời ru xao xuyến núi đồi suối rừng rặng tre.
            Sóng ven Thái Bình im lìm khi tiếng Mẹ ru.
            
            Một lòng nuôi nấng vỗ về những ngày còn thơ.
            Một tình thương mến êm như tiếng đàn lời ca.
            Mẹ hiền sớm tối khuyên ngủ bao lời mặn mà.
            Khắc ghi bên lòng con trẻ muôn bước đường xa.
            
            Thương con Mẹ hát câu êm đềm,
            Run lòng thơ ấu quản gì khi thức trắng đêm.
            Bao năm nước mắt như suối nguồn.
            Chảy vào tim con mái tóc chót đành đẫm sương.
            
            Dù ai xa vắng trên đường sớm chiều về đâu.
            Dù khi mưa gió tháng ngày trong đời bể dâu.
            Dù cho phai nắng nhưng lòng thương chẳng lạt mầu.
            Vẫn mong quay về vui vầy dưới bóng mẹ yêu.',],
            ['name' => 'Lý Thương Nhau',
            'url' => '/music/LyThuongNhau-DucThanh_4avat.mp3',
            'artists_id' => '15',
            'category_id' => '1',
            'lyrics' =>'Đang cập nhập',],
            ['name' => 'Lấy Chồng Sớm Làm Gì',
            'url' => '/music/LayChongSomLamGi-HuyRTuanCry-6175716.mp3',
            'artists_id' => '1',
            'category_id' => '1',
            'lyrics' => 'Tôi đã thương em lâu rồi, sao em chẳng nhận ra
            Tôi đã thương em như là, í a bản tình ca
            Mà em cứ mãi vô tình, dù tôi có đâu vô hình
            Tại em đã thương ai rồi, hay vì điều chi
            Tôi đã yêu em mất rồi nên đêm ngày ngẩn ngơ
            Tôi lỡ say trong nụ cười, ngay khi nằm ngủ mơ
            Em nói mẹ cha còn cấm, chưa yêu bây giờ
            Tình yêu của anh mà lớn thì chờ vài năm
            
            Tôi về để tính chuyện làm ăn, chờ ngày sau khi duyên thắm tơ hồng
            Thế mà mới chỉ được nửa năm, người ta báo em lấy chồng
            
            [ĐK:]
            Ôi cớ sao em lại lỡ vội lỡ vàng, yêu quá nên tôi ôm tiếng lòng thở than
            Nếu chẳng thương tôi cứ nói ngay bây giờ, cho mỗi tơ vương tôi biết đường mà
            thôi
            Áo gấm xe hoa đưa em qua với người, Câu hứa khi xưa thôi chin bỏ làm mười
            Chúc phúc cho em êm ấm bên chân tình, hai chứ yêu đương tôi giữ cho riêng mình
            
            [Rap:]
            Nghe vè nghe ve nghe vè lá lốt Anh Huy cũng tốt mà chị này cũng xinh
            Hai bên đồng tình gia đình đống ý Tới xin chữ kí ủy ban không cho
            Có thương anh thì mau khăn gói về nhà với anh
            Mẹ anh đang mong có cháu, nên là tình hình mình hãy tính nhanh
            Thương em thì cũng đã lâu, chỉ cần chờ em đồng ý gật đầu
            Ấy mà biết em sắp làm cô dâu, đầu anh như muốn nổ tung vì sầu
            Anh biết anh chẳng bằng ai, người như cái sào cao m72
            Nghề nghiệp anh chưa ổn định, đấy... làm mãi cũng chỉ đủ nhai
            Người ta nhà cao cửa rộng, em chẳng phải lo nghĩ đến chuyện tương lai
            
            Vậy là em quên đi hết rồi, từng lời hứa đó chỉ mới hôm qua
            Từng ngày mong yêu thương hé trồi, thôi đành phai tàn nhành hoaaaaa', ],
            ['name' => 'Nắm Tay Nhau Đi Khắp Thế Gian',
            'url' => '/music/1592148349_NamTayNhauDiKhapTheGian-LinhHee-5107412.mp3',
            'artists_id' => '7',
            'category_id' => '1',
            'lyrics' => 'Em! anh có điều muốn nói
            Rằng tự nhiên anh nhớ em nhớ vòng tay
            Hay là anh sang nhà em để ôm em cái nhờ!
            Nhìn em thôi rồi anh đi về ngay
            Mình yêu nhau đã bao lâu
            
            Giờ anh muốn nắm đôi bàn tay
            Cùng em đi chơi khắp thế giới
            Tới những nơi ta xem ở phim
            Nào em thích đi Hàn Quốc
            Hay là sang Nhật Bản
            Cầm tay anh đi thật xa nơi này thôi
            
            [ĐK:]
            Nào ta cùng đi lên tàu bay
            Đến nơi tay cầm tay
            Uống bia ta cùng say
            Ta sẽ nghe chung bài nhạc thật hay
            Mình nhau đi ăn mì cay
            
            Tay cầm tay ta đi cầu may
            Rồi chọn ngày ta về cưới nhau
            Dù mai sau em già đi
            Anh vẫn sẽ yêu em và baby
            Anh sẽ không để em ướt mi
            
            Cho dù chỉ là những chuyện li ti
            Sẽ không bao giờ đâu
            Cả đời chỉ luôn một câu
            Rằng em ơi
            Anh chỉ yêu em!
            
            [RAP:]
            Ê em ơi ra đây anh bảo đây
            Nếu anh làm sai không được giận lâu đấy
            Nếu ra ngoài kia ai nó tán thì em cứ đánh ngay vào chỗ ấy cho anh
            Mai đây anh sẽ phải đi công tác ở xa
            Em yêu hãy cứ nuôi con và ở nhà
            Chờ anh về rồi anh mua quà em nha'],
            ['name' => 'Vẫn Yêu Người Cũ',
            'url' => '/music/1592148103_VanYeuNguoiYeuCu-LinhHee-4712885.mp3',
            'artists_id' => '7',
            'category_id' => '1',
            'lyrics' => 'Cũng đã lâu chưa gặp em
            Giờ cuộc sống em khỏe không?
            Ở bên người mới thấy vui hay thế nào?
            Điện thoại chẳng biết còn lưu tên anh không?
            Và những tin nhắn mỗi ngày
            Mà anh đã từng nhắc khi còn yêu
            
            Thỉnh thoảng anh vẫn mở những tấm hình cũ
            Và đọc lại tin nhắn từng qua
            Anh ướt qua face thấy em lớn rồi
            Chẳng biết có biết tự chăm sóc bản thân
            Và ăn uống thế nào
            Người đó của em có làm em tổn thương?
            
            ĐK:
            Giờ đây em có ổn không cuộc sống em thế nào?
            Em còn có hay mít ướt hay thức đêm như ngày xưa?
            Em có còn nhớ hay là không hay là quên hết rồi?
            Những bài hát anh từng viết em còn nghe hãy đã quên?
            
            Và anh đã trưởng thành hơn đã khác xưa lắm rồi
            Không còn nhớ không còn thương không khóc khi về đêm
            Anh viết bài cuối gửi người anh đã từng yêu nhất đời
            Anh cầu chúc em hạnh phúc sau này nếu gặp nhau
            Xin gửi lời hỏi thăm',],
            ['name' => 'Em Sống Có Tốt Không',
            'url' => '/music/EmSongCoTotKhong-LinhHee-4781552.mp3',
            'artists_id' => '7',
            'category_id' => '1',
            'lyrics' => 'Cũng đã lâu chưa gặp em
            Giờ cuộc sống em khỏe không?
            Ở bên người mới thấy vui hay thế nào?
            Điện thoại chẳng biết còn lưu tên anh không?
            Và những tin nhắn mỗi ngày
            Mà anh đã từng nhắc khi còn yêu
            
            Thỉnh thoảng anh vẫn mở những tấm hình cũ
            Và đọc lại tin nhắn từng qua
            Anh ướt qua face thấy em lớn rồi
            Chẳng biết có biết tự chăm sóc bản thân
            Và ăn uống thế nào
            Người đó của em có làm em tổn thương?
            
            ĐK:
            Giờ đây em có ổn không cuộc sống em thế nào?
            Em còn có hay mít ướt hay thức đêm như ngày xưa?
            Em có còn nhớ hay là không hay là quên hết rồi?
            Những bài hát anh từng viết em còn nghe hãy đã quên?
            
            Và anh đã trưởng thành hơn đã khác xưa lắm rồi
            Không còn nhớ không còn thương không khóc khi về đêm
            Anh viết bài cuối gửi người anh đã từng yêu nhất đời
            Anh cầu chúc em hạnh phúc sau này nếu gặp nhau
            Xin gửi lời hỏi thăm',],
            ['name' => 'Yêu Nhầm Người',
            'url' => '/music/YeuNhamNguoi-LinhHee-4355916.mp3',
            'artists_id' => '7',
            'category_id' => '1',
            'lyrics'=>'Anh đã khóc khi em đã ra đi bỏ anh
            Lần đầu anh phải khóc chỉ bởi vì một người
            Những lúc anh buồn đau, em đang ở bên cạnh ai
            Nỗi đau xót xa.
            
            Giờ thì anh đã biết anh đã yêu lầm em
            Người con gái anh yêu không giống như anh mơ
            Anh biết từng lời hứa chỉ là dối gian nhau
            Tại vì sao?
            
            [ĐK:]
            Giờ thì anh đã biết mọi chuyện đã quá muộn
            Anh chỉ biết lặng câm chúc em bên người ta
            Và anh biết anh sai khi đã yêu nhầm người
            Người làm anh đau.
            
            Dù cho cả thế giới không chỉ riêng anh yêu sai người
            Nhưng tim anh vẫn đau khi anh đã yêu lầm em
            Và từ đây anh sẽ coi như không *** em
            Tạm biệt em.'],
            ['name' => 'Em Của Ngày Hôm Qua',
            'url' => '/music/EmCuaNgayHomQua-SonTungMTP-2882720.mp3',
            'artists_id' => '11',
            'category_id' => '1',
            'lyrics' => 'Eh eh eh...
            Em đang nơi nào...
            Can you feel me.
            Can you feel me.
            Eh eh eh
            M-tp
            
            Liệu rằng chia tay trong em có quên được câu ca.
            Tình yêu khi xưa em trao cho anh đâu nào phôi pha.
            Đừng lừa dối con tim anh,em sẽ không buông tay anh được đâu mà.(Em không thể bước đi)
            Gạt nước mắt yếu đuối đó cứ quay lại nơi anh.
            Em biết rằng cơn mưa qua đâu có che lấp được nụ cười đau thương kia.
            Nước mắt đó vẫn rơi vì em..Oh baby..No baby..
            
            Đừng nhìn anh nữa,đôi mắt ngày xưa giờ ở đâu???
            Em còn là em?
            Em đã khác rồi.
            Em muốn quay lưng quên hết đi(Thật vậy sao?)
            Tình yêu trong em giờ toàn giả dối.
            Anh không muốn vùi mình trong mơ.
            Anh không muốn đi tìm giấc mơ ngày hôm nao.
            
            Đừng vội vàng em hãy là em của ngày hôm qua.
            Uhhhhhhh..
            Xin hãy là em của ngày hôm qua.
            Uhhhhhhh..
            Đừng bỏ mặc anh một mình nơi đây.
            Uhhhhhhh..
            Dừng lại và xoá nhẹ đi kí ức.
            Uhhhhhhh..
            Chìm đắm vào những lời ca dịu êm thưở nào.
            
            Mưa đang rơi.
            Đôi tay buông lơi.
            Mình anh ngồi đây tìm lại những khoảng không dường như chơi vơi.
            Thật ngu ngốc.
            Vu vơ.
            Lang thang trên con đường tìm lại giấc mơ.
            Dường như đã quá xa.
            Và em không còn thiết tha.
            Nắm lấy đôi tay anh muốn giữ em ở lại.
            Nếu cứ tiếp tục cả hai sẽ phải khổ đau.
            Đừng cố tỏ ra mạnh mẽ.
            Đó đâu phải là em.
            Vậy đi... TẠM BIỆT EM ..!
            
            Nhắm mắt lại hãy nghĩ đi.
            Lâu nay em sống cho mình em mà.
            Phải không em hỡi người...???
            Tìm lại thời gian của riêng đôi ta.
            Nhưng sao trong anh đã quá tuyệt vọng.
            Sự thật đang bủa vây nơi anh.
            Forget baby...!!!!!
            
            Đừng nhìn anh nữa,đôi mắt ngày xưa giờ ở đâu???
            Em còn là em?
            Em đã khác rồi.
            Em muốn quay lưng quên hết đi.
            Tình yêu trong em giờ toàn giả dối.
            Anh không muốn vùi mình trong mơ.
            Anh không muốn đi tìm giấc mơ ngày hôm nao.
            
            Đừng vội vàng em hãy là em của ngày hôm qua.
            Uhhhhhhh..
            Xin hãy là em của ngày hôm qua.
            Uhhhhhhh..
            Đừng bỏ mặc anh một mình nơi đây.
            Uhhhhhhh..
            Dừng lại và xoá nhẹ đi kí ức.
            Uhhhhhhh..',],
            ['name' => 'Yêu Thật Đấy',
            'url' => '/music/YeuThatDay-LinhHee-4732133.mp3',
            'artists_id' => '7',
            'category_id' => '1',
            'lyrics'=>'Sáng nay tỉnh giấc
            Một dòng tin oppa ơi dậy đi
            Ôi sao anh thấy
            Anh hạnh phúc quá đi
            Từ khi em bên canh anh
            Anh cảm thấy cuộc sống anh bình yên
            Chỉ thế thôi là đủ rồi
            Em ê
            
            Hãy cầm chặt tay anh
            Anh sẽ đưa em đi
            Vòng quanh cả thế giới
            Tới những nơi ta chưa từng đi
            Và anh thích cảm giác
            Em ôm anh từ phía sau
            Rồi thì thầm tai anh
            Nói rằng em thích anh
            Và anh không *** chắc
            em là người con gái đầu tiên
            Nhưng mà anh *** chắc
            Em là
            Người cuối của anh
            
            Ok, anh yêu em, anh yêu em nhiều lắm
            Chẳng một người nào có thể thay thế được em
            Đã có rất nhiều người con gái đi qua đời anh nhưng họ không phải là em
            Họ không thể nào cho anh hạnh phúc
            Họ không thể nào làm anh cười như em
            Em dấu yêu ơi, đừng đi đâu nhé em
            Người con gái anh yêu chỉ có mình em
            
            Hãy cầm chặt tay anh
            Anh sẽ đưa em đi
            Vòng quanh cả thế giới
            Tới những nơi ta chưa từng đi
            Và anh thích cảm giác
            Em ôm anh từ phía sau
            Rồi thì thầm tai anh
            Nói rằng em thích anh
            
            Em hãy nói hãy nói em yêu anh nhiều lắm
            Em hãy nói hãy nói yêu anh sau đắm
            Anh yêu em
            Và chỉ yêu em thôi
            Và không bao giờ đổi thay đâu
            Anh muốn nói rằng đừng chia tay anh
            Anh muốn ói rằng đừng đi đâu xa anh
            Anh muốn nói rằng
            Rằng anh yêu em
            Rằng anh yêu em babe'],
            ['name' => 'Day By Day',
            'url' => '/music/DayByDay-Tara-1856855.mp3',
            'artists_id' => '12',
            'category_id' => '3',
        'lyrics'=>'Đang cập nhập'],
            ['name' => 'Tìm Lại Bầu Trời',
            'url' => '/music/TimLaiBauTroi-TuanHung-2504559.mp3',
            'artists_id' => '14',
            'category_id' => '1',
        'lyrics'=>'Anh khóc vì - giờ đây anh đã mất em rồi
        Anh khóc vì - giờ đây em đã xa thật rồi
        Anh nhớ - lời hẹn ước ta không xa rời mà giờ đây sao chỉ anh lẻ loi.
        Anh cứ - cố gắng tại sao vẫn cứ xa vời
        Anh và em - dường như ta đã hết yêu nhau rồi
        Em hãy nói cho anh nghe đi hỡi người yêu ơi - tại sao giờ chúng ta lìa đôi.
        
        Tại anh đã vô tâm hay tại anh không quan tâm em mỗi ngày
        Để giờ đây khi lời anh nói em không tin anh nữa vậy
        Trong tình yêu đôi lúc ta hay giận hờn anh biết
        Nhưng anh thấy giờ em không còn yêu anh.
        Vậy thôi anh cho em đi về nơi em chưa bắt đầu
        Nơi mà em khi chưa *** anh,anh thấy em vui hơn nhiều
        Anh xin lỗi vì đã cướp mất khoảng trời của em
        Nhưng có người sẽ cho em lại một bầu trời.',],
            ['name' => 'Cỏ 3 Lá',
            'url' => '/music/Co3La-5015945.mp3',
            'artists_id' => '16',
            'category_id' => '1',
        'lyrics'=>'Mở mắt ra hít một hơi thật sâu
        Rồi mình hát vu vơ vài câu
        Lại thêm một đêm trôi qua
        Vẫy tay ngày mới nhá
        Năng ấm xanh ngời
        Hay là gió mưa tơi bời
        Vẫn cám ơn cuộc đời
        Vì những điều tuyệt vời nhất trên thế gian này là
        Những điều mà ta đang thấy
        Không hề xa xa xa xa xa xa
        Bên cạnh ta ta ta ta ta
        Giản đơn xinh tươi như cỏ ba lá
        
        Vậy nên hãy nở nụ cười
        Và chớ buồn vì lầm lỡ
        Trôi qua như mơ rồi sẽ phai mờ dần đi
        Hãy trân trọng điều gì ta có
        Vì giản đơn đó cũng chính là
        Ước mơ của biết bao người
        
        Rap
        Sáng sớm thì bầu trời nắng ấm
        Đêm về thì bầu trời tối tăm
        Thời gian thì nó cứ vội vàng trôi
        Mà mọi người chỉ được sống một lần thôi
        Trân trọng từng giây từng phút bên gia đình
        Bạn bè kề vai sát cánh luôn bên mình
        Buổi sớm thức dậy được ngắm ánh bình minh
        Là điều vời nhất cho anh đặt niềm tin
        
        Làm những điều mình thích
        Thích những điều mình làm
        Chớ ngồi nhìn thời gian trôi
        Đến lúc già rồi không kịp hối
        Ngước mặt nhìn mây trôi nhanh
        Giọt sương vương vấn cỏ ba lá xanh
        Mới hay hôm nay lại là một ngày trong lành'],
            ['name' => 'Lặng Nhìn Khoảng Cách',
            'url' => '/music/LangNhinKhoangCach4715858.mp3',
            'artists_id' => '16',
            'category_id' => '1',
        'lyrics'=>'Người yêu ơi giờ em đang ở đâu?
        Chờ đợi bao lâu để ta lại có nhau? (hú)
        Để ôm em trong vòng tay ấm êm như những ngày ban đầu.
        Để anh không còn cảm thấy nhớ em từng đêm thâu.
        Sợ thời gian qua rồi tình ta có phôi pha.
        Sợ đêm buốt giá khoảng cách chia cắt đôi ta.
        Vẫn cứ thấy lo sợ lắm chẳng biết em có mãi yêu thật không?
        Hay em tìm hơi ấm mới vì không thể chịu được cơn gió mùa đông.
        
        [ĐK]
        Mặc kệ đời anh sẽ vượt trước đau thương.
        Mặc kệ hơi sương đọng khóe mi cứ vấn vương.
        Mặc đời chia hai hướng đôi đường.
        Mặc kệ mai không còn ai chung bước.
        Bởi vì tình yêu là mãi chẳng thể đổi thay.
        Là chờ đợi nhau mặc xác.thân có hao gầy.
        Là mong ai kề bên mỗi ngày.
        Là nụ hôn nồng say.
        Là ngày em về đây.
        
        [RAP]
        Cơn mưa kia vừa tạnh nhưng sao bầu trời vẫn âm u
        Kết thúc một cuộc tình đằng sau là bạn hay là thù
        Khoảng cách mà mình tạo nên thêm bao nhiêu nữa là mới đủ
        Để em nhận ra thứ tình cảm anh dành cho em là muôn thu rồi
        Cố gắng bám trụ anh tin vào đôi ta
        Nhưng vì quá mê muội có đau hơn nữa cũng không thể xóa
        Tất cả những gì ta có nó vẫn còn đó chứ đâu nhạt nhòa
        Vẫn chờ đợi người nào đó anh đếm từng ngày mà mình rời xa
        
        Với bao ngọt ngào ký ức đắm say
        Mới đây ngất ngây hôm nào
        Mà giờ đây chỉ còn lại đắng cay
        Cũng không thể nào mờ đi được đâu
        Ký ức từng ngày dài ta có nhau
        Mặn nồng ngọt ngào còn in sâu
        Cho anh ngày dài đêm đớn đau'],
            ['name' => 'Anh Đã Bị Lừa',
            'url' => '/music/AnhDaBiLua-4604499.mp3',
            'artists_id' => '16',
            'category_id' => '1',
        'lyrics'=>'Anh đã bị lừa
        Anh đã bị lừa
        Anh cố nở một nụ cười bye bye người anh yêu nha .
        Em cứ vui bên người ví nó cho em điều em thiếu đó.
        Đừng bận tâm để anh u sầu.
        Một mình khóc nát cả đêm thâu.
        Chuyện tình ta đã mau phai mầu .
        Em yêu giấu ngày xưa ở đâu.
        Nó theo trai rồi!!!!!
        Bây giờ chẳng cần ai đúng sai.
        Có được gì đâu. Chỉ là chuyện tình yêu gái trai.
        Nó muốn bên cạnh nhau.
        Nó hôn đắm say thật lâu. Cho tình nó thêm đậm sâu. Làm anh càng đau ơi là đau !!!
        Vậy mà anh cứ ....
        Sarang sarang sarang sarang sa sa rang hê.
        Vẫn yêu em là thế nhưng anh không muốn em quay về.
        Mặc kệ cho vết cắt khắc sâu tim đau nặng nề.
        Vì yêu em như ban đầu là điều không thể.
        Vậy thì em hãy!!
        Đi xa xa ra xa ra xa ra nhé em.
        Vứt đi bao mộng mơ ta cùng nhau em nhớ xem.
        Nước mắt rơi như là mưa.
        Em đã thắng còn anh thì thua.
        Những lời hứa khi xưa nay còn đâu nữa.
        Bởi vì anh đã bị lừa.
        Vậy mà vẫn cứ Sa rang he sa rang he yo
        Nhưng mà em hãy đi xa xa ra nhé... Xa ra nhé em!!!!!
        
        [Rap]
        Ờ em hả
        Nhiều khi anh cũng tự hỏi có phải ngay lúc này mình đang mơ
        Khi tình cảm anh trao cho em đến bây giờ qua thời gian nó đã nhạt mờ
        Sao em còn tìm gặp anh và muốn hàn gắn lại trái tim đã tan vỡ
        Lần thứ mấy rồi dợ!!! Hở?
        Em đừng xem anh như là một trò đùa chớ
        Những giọt nước mắt anh lại rơi
        Nói thật chứ không phải chơi
        Rơi nhiều đến nỗi mà em cũng có thể bơi
        Nhiều khi anh cũng tự nhủ rằng là
        Mình sẽ cố gắng đợi em
        Nhưng đó chắc là một ý nghĩ sai lầm khi em giờ.... Đã yêu người mới',],
            ['name' => 'Làm Người Yêu Anh Nhé BaBy',
            'url' => '/music/LamNguoiYeuAnhNheBaby-4581404.mp3',
            'artists_id' => '16',
            'category_id' => '1',
        'lyrics'=>'Người yêu ơi giờ em đang ở đâu?
        Chờ đợi bao lâu để ta lại có nhau? (hú)
        Để ôm em trong vòng tay ấm êm như những ngày ban đầu.
        Để anh không còn cảm thấy nhớ em từng đêm thâu.
        Sợ thời gian qua rồi tình ta có phôi pha.
        Sợ đêm buốt giá khoảng cách chia cắt đôi ta.
        Vẫn cứ thấy lo sợ lắm chẳng biết em có mãi yêu thật không?
        Hay em tìm hơi ấm mới vì không thể chịu được cơn gió mùa đông.
        
        [ĐK]
        Mặc kệ đời anh sẽ vượt trước đau thương.
        Mặc kệ hơi sương đọng khóe mi cứ vấn vương.
        Mặc đời chia hai hướng đôi đường.
        Mặc kệ mai không còn ai chung bước.
        Bởi vì tình yêu là mãi chẳng thể đổi thay.
        Là chờ đợi nhau mặc xác.thân có hao gầy.
        Là mong ai kề bên mỗi ngày.
        Là nụ hôn nồng say.
        Là ngày em về đây.
        
        [RAP]
        Cơn mưa kia vừa tạnh nhưng sao bầu trời vẫn âm u
        Kết thúc một cuộc tình đằng sau là bạn hay là thù
        Khoảng cách mà mình tạo nên thêm bao nhiêu nữa là mới đủ
        Để em nhận ra thứ tình cảm anh dành cho em là muôn thu rồi
        Cố gắng bám trụ anh tin vào đôi ta
        Nhưng vì quá mê muội có đau hơn nữa cũng không thể xóa
        Tất cả những gì ta có nó vẫn còn đó chứ đâu nhạt nhòa
        Vẫn chờ đợi người nào đó anh đếm từng ngày mà mình rời xa
        
        Với bao ngọt ngào ký ức đắm say
        Mới đây ngất ngây hôm nào
        Mà giờ đây chỉ còn lại đắng cay
        Cũng không thể nào mờ đi được đâu
        Ký ức từng ngày dài ta có nhau
        Mặn nồng ngọt ngào còn in sâu
        Cho anh ngày dài đêm đớn đau
        '],
            ['name' => 'Anh Thanh Niên',
            'url' => '/music/AnhThanhNien-HuyR-6205741.mp3',
            'artists_id' => '1',
            'category_id' => '1',
            'lyrics'=>'Anh thanh niên năm nay đã ngót nghét 30 rồi
            Sáng mua 5 nghìn xôi tối 3 nghìn trà đá
            Anh luôn luôn on face để biết hết chuyện trên đời
            Đăng cái status bình thường cũng phải gần nghìn like
            Anh thanh niên năm nay vẫn chẳng thấy vợ con gì
            Anh nói mấy cô yêu nhưng anh không cần người yêu
            Ba má anh sáng ra vẫn vội vã chạy đi làm
            Anh nói anh còn nhỏ nên đã biết làm gì đâu
            
            Rồi một hôm anh gặp cô gái và
            Cứ thế lòng thẫn thờ đêm lại ôm nhớ mong
            Để rồi chợt nhận ra anh bỏ quên quá nhiều
            Nghĩ đến ba má anh lại thấy thật buồn
            
            Là do em tất cả chính em đã
            Khiến chàng trai đổi thay và không còn như trước kia
            Tình yêu đã dẫn lối anh bối rối
            Thế là bây giờ đây anh đã biết yêu rồi
            Chẳng lê la quán xá, anh đã khác
            Không còn như ngày xưa mải mê mộng mơ nữa đâu
            Vì lo cho ba má, cho em á
            Nên anh thanh niên học cách đổi thay bản thân mỗi ngày
            
            Anh kể về những ngày xưa, lúc anh còn chạy con Dream trên đường
            Sửa soạn sáng đến tận trưa, tóc tai vuốt ngược bảnh như Đan Trường
            Nhưng mà anh có tính hay ngại, tụi con gái cứ lại làm ***
            Chẳng qua là anh không thích, chứ một khi nhích thiếu gì một em
            Chuyện ngày xưa ghê thế nhờ
            Sao mấy năm vẫn như thế này
            Chuyện thật hay anh nói đùa
            Cứ nói đi, dối lòng làm chi???
            
            
            Anh thanh niên hôm nay thức dậy sớm từ 6 giờ
            Giúp má đi chợ sáng, mua rau thịt về nấu
            Anh lên online face đăng tus kiếm tìm công việc
            Anh biết mình đã lớn nên phải trưởng thành hơn
            Anh thanh niên hôm nay đã nghĩ đến chuyện gia đình
            Nhưng chưa có ai yêu, anh biết lấy vợ làm sao
            Mấy cô gái anh khoe, hóa ra cũng chỉ nói xạo
            Chẳng có chi là thật, anh cứ mơ mộng vậy thôi
            Kể từ khi anh gặp cô gái rồi
            Cứ thế lòng thẩn thơ đêm ngày ôm nhớ mong
            Và rồi chợt nhận ra, anh đã yêu mất rồi
            Chẳng giống những lúc xưa, anh giờ đã khác thật nhiều
            
            Là do em tất cả chính em đã
            Khiến chàng trai đổi thay và không còn như trước kia
            Tình yêu đã dẫn lối anh bối rối
            Thế là bây giờ đây anh đã biết yêu rồi
            Chẳng lê la quán xá, anh đã khác
            Không còn như ngày xưa mải mê mộng mơ nữa đâu
            Vì lo cho ba má, cho em á
            Nên anh thanh niên học cách đổi thay bản thân mỗi ngày'],
            
        ]);
        //
    }
}
