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
	    $table->string('project_name',255);
	    $table->enum('project_category',['c','nc'])->default('c');   
            $table->bigInteger('roll_number_1');
            $table->bigInteger('contact_number_1');
            $table->bigInteger('roll_number_2');
            $table->bigInteger('contact_number_2');
            $table->bigInteger('roll_number_3');
            $table->bigInteger('contact_number_3');
            $table->bigInteger('roll_number_4');
            $table->bigInteger('contact_number_4');
            $table->string('file_name',255);
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
