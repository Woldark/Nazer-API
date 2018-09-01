<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('user_id')->unsigned()->index();
            $table->integer('user_client_id')->unsigned()->index()->nullable();
            $table->integer('application_id')->unsigned()->index()->nullable();

            $table->string('body');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_client_id')->references('id')->on('client_users');
            $table->foreign('application_id')->references('id')->on('applications');

            $table->string('create_date');
            $table->string('update_date')->nullable();
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
