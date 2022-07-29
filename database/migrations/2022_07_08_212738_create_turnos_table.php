<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('fecha');
            $table->bigInteger('cancha_id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('turnos')->onDelete('cascade');
            $table->foreign('cancha_id')->references('id')->on('canchas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
};
