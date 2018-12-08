<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->engine = 'InnoDB';
                $table->increments('id');
                $table->integer('manager_id')->unsigned()->nullable();
                $table->foreign('manager_id')->references('id')->on('users')->onDelete('cascade');
                $table->string('name')->nullable();
                $table->string('address')->nullable();
                $table->string('phone')->nullable();
                $table->string('description')->nullable();
                $table->string('mail')->nullable();
                $table->integer('fiscalNumber')->nullable();
                $table->boolean('status')->default(0);
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
        Schema::dropIfExists('entreprises');
    }
}
