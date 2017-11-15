<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('email',100)->unique();
            $table->string('photo',255)->nullable();
            $table->string('department',255);
            $table->string('status',100);
            $table->string('designation',100);
            $table->string('dateOfBirth',100)->nullable();
            $table->string('firstJointOfDate',100)->nullable();
            $table->string('presentJointOfDate',100)->nullable();
            $table->string('dateOfReturn',100)->nullable();
            $table->string('mobile_no',100)->nullable()->unique();
            $table->string('file_no',100)->unique();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
