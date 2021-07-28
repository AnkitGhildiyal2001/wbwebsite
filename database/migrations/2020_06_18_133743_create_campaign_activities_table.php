<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_activity_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('campaign_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('company_user_id')->nullable();
            $table->timestamps();
        });

        Schema::table('campaign_activities', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('campaign_id')->references('id')->on('campaigns');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('company_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_activities');
    }
}
