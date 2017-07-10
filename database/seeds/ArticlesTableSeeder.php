<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('articles')->insert([
        ['article_type_id'=>1, 'user_id'=>1,
          'title'=>'Những phần mềm cần thiết cho máy tính',
          'title_unsigned'=>'nhung-phan-mem-can-thiet-cho-may-tinh',
          'image'=>'https://lh3.googleusercontent.com/NuH3Kf3YdTThbzADoGIf3Gl7BXRm4XyV3UTzQKfpGtJluVJXECDfwcBxbZrkDqyG7crp5jB8QhxVLQNIMTrcAa8Z4llrBoY-IzyWYBPsHQ62yiZM6XKP0_EgGrHLnoCoEnSwQ2vS',
          'content'=>'
            Thứ hầu như phải cài đầu tiên, ở đây mình thường chọn bộ gõ tiếng
            Việt của tác giả Trần Kỳ Nam, nếu thích anh em có thể tải về Unikey.
             Lý do mình chọn bộ gõ GoTiengViet vì đơn giản nó không kích hoạt phần
             chọn ngôn ngữ trên thanh Taskbar lên, nhìn rất khó chịu. Chức năng
             thì hẳn anh em đã không còn phải xa lạ gì nữa.
          '],
        ['article_type_id'=>2, 'user_id'=>2,
          'title'=>'Các xem Ip của máy tính',
          'title_unsigned'=>'cach-xem-ip-cua-may-tinh',
          'image'=>'https://lh3.googleusercontent.com/NuH3Kf3YdTThbzADoGIf3Gl7BXRm4XyV3UTzQKfpGtJluVJXECDfwcBxbZrkDqyG7crp5jB8QhxVLQNIMTrcAa8Z4llrBoY-IzyWYBPsHQ62yiZM6XKP0_EgGrHLnoCoEnSwQ2vS',
          'content'=>'
            – Để khi chia sẻ dữ liệu trong cùng một mạng LAN mình cần phải dùng đến nó.
            – Để kết nối máy tính với nhau để chơi game.
            Và còn nhiều công dụng khác nữa bạn đọc tự tìm hiểu mình chỉ hướng
            dẫn bạn xem địa chỉ IP của máy tính thôi nhé.
          '],
      ]);
    }
}
