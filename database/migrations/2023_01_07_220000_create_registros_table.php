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
        Schema::create('registros', function (Blueprint $table) {
            //UUID como identificador
            $table->uuid()->primary();
            $table->unsignedBigInteger('imunizado_id');
            $table->foreign('imunizado_id')->references('id')->on('users')->onDelete('cascade');
            $table->char('profissional_id',14);
            $table->foreign('profissional_id')->references('cns')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('lote_id');
            $table->foreign('lote_id')->references('id')->on('lotes')->onDelete('cascade');
            $table->date('data_vacinacao');
            $table->string('CNES');
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
        Schema::dropIfExists('registros');
    }
};
