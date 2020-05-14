<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHobbyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_hobby', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('hobby_id');
            $table->primary('user_id', 'hobby_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user')->onDelete('setNull');
            $table->foreign('hobby_id')->references('id')->on('hobby')->onDelete('setNull');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_hobby');
    }
}
