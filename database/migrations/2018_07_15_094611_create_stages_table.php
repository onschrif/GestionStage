<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('ideator_id')->unsigned()->nullable();
            $table->foreign('ideator_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('duration')->nullable();
            $table->integer('nbPersons')->nullable()->default(1);
            $table->date('startingDate')->nullable();
            $table->date('endingDate')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('domaine')->nullable();
            $table->string('title')->nullable();
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
        Schema::dropIfExists('stages');
    }
}
