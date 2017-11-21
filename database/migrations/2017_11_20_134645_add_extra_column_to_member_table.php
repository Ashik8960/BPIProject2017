<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraColumnToMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members',function ($table){
            $table->string('sex',50);
            $table->string('voter_id',200)->nullable();
            $table->string('date_of_transfer',200)->nullable();
            $table->string('transfering_institute',250)->nullable();
            $table->string('tms_no',100)->unique()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members',function ($table){
            $table->dropColumn('sex');
            $table->dropColumn('voter_id');
            $table->dropColumn('date_of_transfer');
            $table->dropColumn('transfering_institute');
            $table->dropColumn('tms_no');
        });
    }
}
