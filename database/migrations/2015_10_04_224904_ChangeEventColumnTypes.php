<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeEventColumnTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE events MODIFY COLUMN startdate varchar(255)');
        DB::statement('ALTER TABLE events MODIFY COLUMN enddate varchar(255)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE events MODIFY COLUMN startdate timestamp');
        DB::statement('ALTER TABLE events MODIFY COLUMN enddate timestamp');
    }
}
