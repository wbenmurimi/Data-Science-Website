<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('profiles', function(Blueprint $table){
            $table->bigIncrements('id')->unique();
            $table->bigInteger('user_id')->index()->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('avatar');
            $table->text('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('profiles');
    }
}
