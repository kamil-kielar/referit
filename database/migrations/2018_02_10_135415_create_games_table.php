<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('img_id');
            $table->bigInteger('ref_sender');
            $table->foreign('ref_sender')->references('id')->on('users');
            $table->bigInteger('ref_checker');
            $table->foreign('ref_checker')->references('id')->on('users');
            $table->mediumText('user_ref_exp');
            $table->double('user_click_x', 10, 2);
            $table->double('user_click_y', 10, 2);
            $table->time('ref_send_time');
            $table->time('ref_check_time');
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
        Schema::dropIfExists('games');
    }
}
