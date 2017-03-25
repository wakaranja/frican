<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->date('date');
          $table->DateTime('from');
          $table->DateTime('to');
          $table->string('venue');
          $table->string('location')->nullable();
          $table->integer('ticket')->default(0);
          $table->string('ticket_details')->nullable();
          $table->string('organizer')->nullable();
          $table->string('image')->nullable();
          $table->string('description',5000)->nullable();
          $table->integer('created_by');
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
        Schema::dropIfExists('events');
    }
}
