<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string("phone_num", 50)->nullable();
            $table->text("address")->nullable();
            $table->string("gmail", 50)->nullable();
            $table->string("facebook", 50)->nullable();
            $table->string("twitter", 50)->nullable();
            $table->string("instagram", 50)->nullable();
            $table->string("linkedin", 50)->nullable();
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
        Schema::dropIfExists('socials');
    }
}
