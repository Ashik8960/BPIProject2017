<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members',function ($table){
            $table->string('education_qualification',200)->nullable;
            $table->string('home_district',200)->nullable;

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
            $table->dropColumn('education_qualification');
            $table->dropColumn('home_district');
        });
    }
}
