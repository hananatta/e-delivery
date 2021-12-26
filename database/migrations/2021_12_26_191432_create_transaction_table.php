<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('trans_id');
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('mahala');
            $table->string('zokak');
            $table->string('dar');
            $table->string('nearest_point');
            $table->unsignedInteger('gover_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('center_id');
            $table->unsignedInteger('sector_id');
            $table->unsignedInteger('status_id');
            $table->timestamps();

            //fk
            $table->foreign('gover_id')->references('id')->on('governorates');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('center_id')->references('id')->on('centers');
            $table->foreign('gover_id')->references('id')->on('sectors');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
