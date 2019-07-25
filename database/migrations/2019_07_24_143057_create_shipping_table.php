<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('shipping_status')->unsigned();
            $table->string('address_from', 256)->nullable();
            $table->string('address_to', 256)->nullable();
            $table->string('coord_from', 64)->nullable();
            $table->string('coord_to', 64)->nullable();
            $table->timestamp('shipment_time')->nullable();
            $table->timestamp('uploading_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('shipping');
    }
}
