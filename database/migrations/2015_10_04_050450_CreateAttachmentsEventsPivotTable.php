<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsEventsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('attachment_rosterevent', function($table) {
            $table->increments('id');
            $table->integer('attachment_id')->unsigned();
            $table->integer('rosterevent_id')->unsigned();

           $table->foreign('attachment_id')->references('id')->on('attachments');
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
        Schema::drop('attachment_rosterevent');
    }
}
