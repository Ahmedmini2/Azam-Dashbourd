<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->json('idd')->nullable();
            $table->integer('invoice_id')->nullable();
            $table->json('date')->nullable();
            $table->string('prop')->nullable();
            $table->string('depar')->nullable();
            $table->json('quan')->nullable();
            $table->json('unit_price')->nullable();
            $table->json('stot')->nullable();
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
        Schema::dropIfExists('invoice_details');
    }
}
