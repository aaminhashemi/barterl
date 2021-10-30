<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemdetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('contactway');
            $table->binary('photo');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('cat_id')->unsigned();
            $table->bigInteger('uni_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('cat_id')->references('id')->on('categories')->cascadeOnUpdate();
            $table->foreign('uni_id')->references('id')->on('universities')->cascadeOnUpdate();
            $table->foreign('city_id')->references('id')->on('cities')->cascadeOnUpdate();
            $table->string('img');
            $table->timestamps(); // -> created at and updated at
            $table->string('exchangedesc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemdetails');
    }
}
