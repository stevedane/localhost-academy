<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->double('amount');
            $table->string('method');

            $table->foreign('id_customer')->references('id')->on('customers');
            $table->unsignedBigInteger('id_customer');
 
            $table->foreign('id_car')->references('id')->on('cars');
            $table->unsignedBigInteger('id_car');

            $table->unsignedBigInteger('id_service');
            $table->string('service_type');

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
        Schema::dropIfExists('payments');
    }
}
