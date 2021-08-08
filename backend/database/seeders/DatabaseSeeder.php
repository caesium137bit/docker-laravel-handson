<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NationsTableSeeder::class);
        $this->call(QuizzesTableSeeder::class);
        $this->call(NationQuizTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
