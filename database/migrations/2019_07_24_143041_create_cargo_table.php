<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('cargo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('shipper_id')->unsigned();
            $table->bigInteger('shipping_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->float('length')->nullable();
            $table->float('weight')->nullable();
        });


        Schema::create('cargo_type', function (Blueprint $table) {
            $table->increments('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cargo');
        Schema::dropIfExists('cargo_type');
    }
}
