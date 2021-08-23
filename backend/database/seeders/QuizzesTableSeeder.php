<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'answer' => '日本',
            'image_src' => 'images/national_flags/jp.png',
        ];
        DB::table('quizzes')->insert($param);
        
        $param = [
            'answer' => '中華人民共和国',
            'image_src' => 'images/national_flags/cn.png',
        ];
        DB::table('quizzes')->insert($param);

        $param = [
            'answer' => 'インド',
            'image_src' => 'images/national_flags/in.png'
        ];
        DB::table('quizzes')->insert($param);
    }
}