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
            'answer' => 'jp',
        ];
        DB::table('quizzes')->insert($param);
        
        $param = [
            'answer' => 'cn',
        ];
        DB::table('quizzes')->insert($param);

        $param = [
            'answer' => 'in',
        ];
        DB::table('quizzes')->insert($param);
    }
}