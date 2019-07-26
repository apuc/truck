<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingTable extends Migration {

    public function up() {
        Schema::create('shipping', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('shipping_status')->unsigned();

            $table->date('shipment_date_start');
            $table->date('shipment_date_end');
            $table->time('shipment_time_start');
            $table->time('shipment_time_end');
            $table->tinyInteger('shipment_delay_time')->default(0);

            $table->string('shipment_contact_name');
            $table->string('shipment_contact_phone');
            $table->string('shipment_address', 256);
            $table->string('shipment_coord', 64);

            $table->date('uploading_date_start');
            $table->date('uploading_date_end');
            $table->time('uploading_time_start');
            $table->time('uploading_time_end');
            $table->time('uploading_delay_time')->nullable();

            $table->string('uploading_contact_name');
            $table->string('uploading_contact_phone');
            $table->string('uploading_address', 256);
            $table->string('uploading_coord', 64);
        });
    }

    public function down() {
        Schema::dropIfExists('shipping');
    }
}
