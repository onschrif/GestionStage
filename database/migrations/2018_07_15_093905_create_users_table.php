<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');


            $table->string('name')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('numRegis')->nullable();
            $table->boolean('state')->default(false);
            $table->string('domaine')->nullable();
            $table->bigInteger('telNumber')->nullable();
            $table->string('email')->unique();
            $table->string('personnelEmail')->nullable();
            $table->string('class')->nullable();
            $table->string('skills')->nullable();
            $table->string('type')->default('responsable');
            $table->string('password');
            $table->string('file')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
