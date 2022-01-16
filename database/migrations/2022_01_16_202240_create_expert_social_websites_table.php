<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertSocialWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_social_websites', function (Blueprint $table) {
            $table->id();
            $table->foreignId("expert_id")->constrained();
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
        Schema::dropIfExists('expert_social_websites');
    }
}
