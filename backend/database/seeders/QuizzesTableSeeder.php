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
            'answer_code' => 'jp',
        ];
        DB::table('quizzes')->insert($param);
        
        $param = [
            'answer' => '中華人民共和国',
            'answer_code' => 'cn',
        ];
        DB::table('quizzes')->insert($param);

        $param = [
            'answer' => 'インド',
            'answer_code' => 'in'
        ];
        DB::table('quizzes')->insert($param);
    }
}