<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationQuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'nation_id' => 1,
            'quiz_id' => 1,
        ];
        DB::table('nation_quiz')->insert($param);
        
        $param = [
            'nation_id' => 2,
            'quiz_id' => 1,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 3,
            'quiz_id' => 1,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 4,
            'quiz_id' => 1,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 3,
            'quiz_id' => 2,
        ];
        DB::table('nation_quiz')->insert($param);
        
        $param = [
            'nation_id' => 4,
            'quiz_id' => 2,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 5,
            'quiz_id' => 2,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 8,
            'quiz_id' => 2,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 5,
            'quiz_id' => 3,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 6,
            'quiz_id' => 3,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 7,
            'quiz_id' => 3,
        ];
        DB::table('nation_quiz')->insert($param);

        $param = [
            'nation_id' => 8,
            'quiz_id' => 3,
        ];
        DB::table('nation_quiz')->insert($param);
    }
}