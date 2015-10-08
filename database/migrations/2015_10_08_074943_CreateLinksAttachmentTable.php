<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_rosterevent', function($table) {
            $table->increments('id');
            $table->integer('link_id')->unsigned();
            $table->integer('rosterevent_id')->unsigned();

           $table->foreign('link_id')->references('id')->on('links');
           $table->foreign('rosterevent_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('link_rosterevent');
        
    }
}
