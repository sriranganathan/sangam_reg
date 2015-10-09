<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roll_number_1');
            $table->bigInteger('contact_number_1');
            $table->integer('roll_number_2');
            $table->bigInteger('contact_number_2');
            $table->integer('roll_number_3');
            $table->bigInteger('contact_number_3');
            $table->integer('roll_number_4');
            $table->bigInteger('contact_number_4');
            $table->string('abstract',2500);
            $table->string('file_name',40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('registrations');
    }
}
