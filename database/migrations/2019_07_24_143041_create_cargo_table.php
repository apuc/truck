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
            $table->string('description', 256);      // краткое описание
            $table->float('length');                        // длина
            $table->float('width');                         // ширина
            $table->float('height');                        // высота
            $table->float('weight');                        // вес в тоннах
            $table->float('lifting_weight')->nullable();
            $table->float('lifting_length')->nullable();
            $table->tinyInteger('equipped');                // 1 - Lifting crane; 2- Plate
            $table->string('comment');                      // комментарий
            $table->string('order_number', 64);      // номер заказа у клиента
        });


        Schema::create('cargo_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
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
