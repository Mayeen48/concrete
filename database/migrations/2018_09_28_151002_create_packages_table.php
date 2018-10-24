<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('pId');
            $table->integer('cId');
            $table->integer('dId');
            $table->string('packageName',100);
            $table->string('packageType',50);
            $table->string('trip',20);
            $table->text('description')->nullable();
            $table->string('price',30);
            $table->date('regDeadline');
            $table->string('image',50);
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
        Schema::dropIfExists('packages');
    }
}
