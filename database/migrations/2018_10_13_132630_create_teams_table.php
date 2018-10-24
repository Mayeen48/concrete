<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('tId');
            $table->string('pName',50)->nullable();
            $table->string('mName',50)->nullable();
            $table->string('mEmail',50)->nullable();
            $table->string('mPhone',25)->nullable();
            $table->string('fLink',150)->nullable();
            $table->string('tLink',150)->nullable();
            $table->string('gLink',150)->nullable();
            $table->string('image',50)->nullable();;
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
        Schema::dropIfExists('teams');
    }
}
