<?php

use Illuminate\Database\Seeder;

class ArticleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_types')->insert([
          ['category_id'=>1, 'name'=>'Phần mềm', 'name_unsigned'=>'phan-mem'],
          ['category_id'=>1, 'name'=>'Thủ thuật hay', 'name_unsigned'=>'thu-thuat-hay'],
          ['category_id'=>2, 'name'=>'Apps', 'name_unsigned'=>'apps'],
          ['category_id'=>2, 'name'=>'Chia sẻ - Kinh nghiệm', 'name_unsigned'=>'chia-se-kinh-nghiem'],
          ['category_id'=>3, 'name'=>'Tin tức', 'name_unsigned'=>'tin-tuc'],
          ['category_id'=>3, 'name'=>'Hacking - Bảo mật', 'name_unsigned'=>'hacking-bao-mat'],
          ['category_id'=>4, 'name'=>'Front-end', 'name_unsigned'=>'front-end'],
          ['category_id'=>4, 'name'=>'Back-end', 'name_unsigned'=>'back-end'],
          ['category_id'=>5, 'name'=>'Kiến thức cơ bản', 'name_unsigned'=>'kien-thuc-co-ban'],
          ['category_id'=>5, 'name'=>'Công cụ design', 'name_unsigned'=>'cong-cu-design'],
        ]);
    }
}
