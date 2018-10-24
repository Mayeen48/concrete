<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_requests', function (Blueprint $table) {
            $table->increments('trid');
            $table->string('departure',50);
            $table->string('destination',50);
            $table->string('depDate');
            $table->string('desDate');
            $table->string('trip',10);
            $table->string('name',50);
            $table->string('email',50);
            $table->string('phone',30);
            $table->string('person',10);
            $table->boolean('status');
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
        Schema::dropIfExists('ticket_requests');
    }
}
