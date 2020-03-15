<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunningQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('running_quizzes', function (Blueprint $table) {
            $table->id();
            $table->integer('game_id');
            $table->integer('quiz_id');
            $table->set('status', [0, 1, 2]); //0 = not yet started, 1 = on going, 2 = finish
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('running_quizzes');
    }
}
