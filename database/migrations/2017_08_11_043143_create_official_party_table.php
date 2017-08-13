<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficialPartyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('official_party', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('official_id')->unsigned();
            $table->integer('party_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('from');
            $table->integer('to');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('official_id')->references('id')->on('officials')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('party_id')->references('id')->on('parties')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('official_party');
    }
}
