<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nation_quiz', function (Blueprint $table) {
            $table->unsignedInteger('nation_id');
            $table->unsignedInteger('quiz_id');
            $table->primary(['nation_id','quiz_id']);

            // 外部キー制約
            $table->foreign('nation_id')->references('id')->on('nations')->onDelete('cascade');
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nation_quiz');
    }
}