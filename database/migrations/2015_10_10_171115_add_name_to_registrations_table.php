<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameToRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrations', function ($table) {
        $table->string('name_1',255);
        $table->string('name_2',255);
        $table->string('name_3',255);
        $table->string('name_4',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registrations', function ($table) {
        $table->dropColumn('name_1');
        $table->dropColumn('name_2');
        $table->dropColumn('name_3');
        $table->dropColumn('name_4');
        });
    }
}
