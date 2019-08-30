<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('mcode');
            $table->string('bname'); // Business name
            $table->string('faddress'); // Farm Address
            $table->string('vname'); //Voter Name
            $table->string('phone'); //Voter Name
            $table->string('tin'); //Voter Name
            $table->string('image_path'); //Voter Name
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
        Schema::dropIfExists('people');
    }
}
