<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRostereventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function($table) {
            $table->increments('id');
            $table->string('title',500);
            $table->longtext('notes')->nullable();
            $table->boolean('isapproved');
            $table->timestamp('startdate');
            $table->timestamp('enddate');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
