<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5thUserToRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->bigInteger('roll_number_5')->nullable();
	    $table->bigInteger('contact_number_5')->nullable();
	    $table->string('name_5',255)->nullable();
	    $table->string('email_5',255)->nullable();	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn(['roll_number_5','contact_number_5','name_5','email_5']);
        });
    }
}
 
