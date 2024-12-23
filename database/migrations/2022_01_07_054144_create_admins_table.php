<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('information_id')->unsigned()->nullable();
            $table->foreignId('skill_id')->unsigned()->nullable();
            $table->foreignId('education_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('status');
            $table->string('country');
            $table->string('image');
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
        Schema::dropIfExists('admins');
    }
}
