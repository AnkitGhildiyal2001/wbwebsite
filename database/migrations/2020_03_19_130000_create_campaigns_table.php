<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->longText('description')->nullable();
            $table->string('coupon_code')->nullable();
            $table->integer('influencer_quantity')->unsigned();
            $table->boolean('approve_influencer')->nullable();
            $table->boolean('shipping_by_company')->nullable();
            $table->boolean('custom_packaging')->nullable();
            $table->unsignedBigInteger('target_audience_id');
            $table->json('hashtags')->nullable();

            $table->integer('campaign_type')->nullable();
            $table->longText('campaign_description')->nullable();
            $table->date('publication_period_from')->nullable();
            $table->date('publication_period_to')->nullable();
            $table->string('account_to_tag')->nullable();
            $table->integer('influencer_product')->nullable();
            $table->boolean('youtube')->nullable();
            $table->boolean('twitch')->nullable();
            $table->boolean('instagram')->nullable();
            $table->boolean('dummycode')->nullable();
            $table->integer('product_givaway_count')->nullable();
            $table->longText('participation_terms')->nullable();

            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('campaign_category_id');
            $table->timestamps();
            $table->timestamp('archived_at', 0)->nullable();
            $table->softDeletes();
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
