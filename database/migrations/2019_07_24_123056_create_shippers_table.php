<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippers', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('shipper_email')->nullable();
            $table->text('shipper_firm')->nullable();
            $table->integer('user_id')->unsigned();

//            $table->foreign('user_id')->references('id')->on('users');
        });

//        Schema::table('shippers', function (Blueprint $table){
//
//        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippers');
    }
}
