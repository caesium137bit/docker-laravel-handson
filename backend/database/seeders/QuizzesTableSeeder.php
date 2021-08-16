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
        ];
        DB::table('quizzes')->insert($param);
        
        $param = [
            'answer' => '中国',
        ];
        DB::table('quizzes')->insert($param);

        $param = [
            'answer' => 'インド',
        ];
        DB::table('quizzes')->insert($param);
    }
}