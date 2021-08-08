<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'code' => 'jp',
            'name' => '日本',
        ];
        DB::table('nations')->insert($param);

        $param = [
            'code' => 'us',
            'name' => 'アメリカ合衆国',
        ];
        DB::table('nations')->insert($param);
        
        $param = [
            'code' => 'cn',
            'name' => '中華人民共和国',
        ];
        DB::table('nations')->insert($param);

        $param = [
            'code' => 'ru',
            'name' => 'ロシア連邦',
        ];
        DB::table('nations')->insert($param);

        $param = [
            'code' => 'au',
            'name' => 'オーストラリア',
        ];
        DB::table('nations')->insert($param);

        $param = [
            'code' => 'ca',
            'name' => 'カナダ',
        ];
        DB::table('nations')->insert($param);

        $param = [
            'code' => 'es',
            'name' => 'スペイン',
        ];
        DB::table('nations')->insert($param);

        $param = [
            'code' => 'in',
            'name' => 'インド',
        ];
        DB::table('nations')->insert($param);
    }
}