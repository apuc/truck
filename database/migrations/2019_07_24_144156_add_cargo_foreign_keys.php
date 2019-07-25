<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCargoForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('cargo', function (Blueprint $table){
            $table->foreign('shipper_id')->references('id')->on('shippers');
            $table->foreign('shipping_id')->references('id')->on('shipping');
            $table->foreign('type_id')->references('id')->on('cargo_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('cargo', function(Blueprint $table) {
            $table->dropForeign(['shipper_id']);
            $table->dropForeign(['shipping_id']);
            $table->dropForeign(['type_id']);
        });
    }
}
