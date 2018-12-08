<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStageUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_user', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');

            $table->integer('stage_id')->unsigned()->nullable();
            $table->foreign('stage_id')->references('id')
                ->on('stages')->onDelete('cascade');

            $table->integer('validator_id')->unsigned()->nullable();
            $table->foreign('validator_id')->references('id')
                ->on('users')->onDelete('cascade');
            $table->string('validation')->default('non traitée');
            $table->string('journal')->nullable();
            $table->string('rapport')->nullable();
            $table->string('remarque')->nullable();
            $table->boolean('assignment')->default(false);
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
        Schema::dropIfExists('stage_users');
        Schema::dropIfExists('users');
        Schema::dropIfExists('Stage');
    }
}
