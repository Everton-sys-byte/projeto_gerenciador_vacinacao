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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacina_id');
            $table->foreign('vacina_id')->references('id')->on('vacinas')->onDelete('cascade');
            $table->string('codigo')->unique();
            $table->string('tecnologia');
            $table->bigInteger('quantidade');
            $table->date('data_vencimento');
            $table->string('status')->default('ok');
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
        Schema::dropIfExists('lotes');
    }
};
