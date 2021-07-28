<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignCategoryUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_category_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campaign_category_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::table('campaign_category_user', function (Blueprint $table) {
            $table->foreign('campaign_category_id')->references('id')->on('campaign_categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_category_user');
    }
}
