<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc', function (Blueprint $table) {
            $table->id();
            $table->text('gpu');
            $table->text('cpu');
            $table->text('ram');
            $table->text('hdd');
            $table->text('sdd');
            $table->text('motherboard');
            $table->text('power_supply');
            $table->text('cooler');
            $table->text('comp_case');
            $table->string('image')->default(null);
            $table->integer('price');
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
        Schema::dropIfExists('pc');
    }
}
