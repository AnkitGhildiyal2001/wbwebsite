<?php

namespace App\Http\Controllers;

use App\User;
use App\Campaign;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Mail\CampaignNotification;
use Illuminate\Support\Facades\Mail;

class DummydataController extends Controller
{
    public function create()
    {
        $campaign = Campaign::find(52);
        $result = DB::table('campaign_categories')
        ->join('campaign_category_user', 'campaign_category_user.campaign_category_id','=','campaign_categories.id')
        ->join('users','users.id','=','campaign_category_user.user_id')
        ->join('campaigns', 'campaigns.states', 'LIKE', DB::raw( "CONCAT('%', users.state, '%') " ))
        ->where('campaigns.age_range->first', '<=' ,DB::raw( "YEAR(CURDATE())-YEAR(birthday)" ))
        ->where('campaigns.age_range->second', '>=' ,DB::raw( "YEAR(CURDATE())-YEAR(birthday)" ))
        ->where('users.notify', true)
        /*->whereNotNull(DB::raw( "json_extract(users.channels, '$.instagram')"))
        ->whereNotNull(DB::raw( "json_extract(users.channels, '$.youtube')"))
        ->whereNotNull(DB::raw( "json_extract(users.channels, '$.twitch')"))*/
        ->select('users.email','users.name','users.firstname','users.lastname')->get();

        if(!$result->isEmpty()){
          //$user_emails = $result->pluck('email')->all();
         foreach ($result as $user) {
             Mail::to('ak75963@gmail.com')->send(new CampaignNotification($campaign, $user));
         }
          
        }

    	/*$id = DB::table('campaigns')->insertGetId([
            'title'=>'Test Coupon',
            'slug'=>'test-coupon',
            'description'=>'This is the product description',
            'coupon_code'=>'Code10',
            'influencer_quantity'=>'22',
            //'approve_influencer'=>'1',
            //'shipping_by_company'=>'1',
            'target_audience_id'=>'1',
            'hashtags'=>'"#hashtag"',
            'campaign_type'=>'1',
            'campaign_description'=>'This is the campaign description Loren upsilons Do...',
            'publication_period_from'=>'2021-04-18',
            'publication_period_to'=>'2021-04-25',
            'account_to_tag'=>'hivency',
            'influencer_product'=>'1',
            'company_id'=>'1',
            'campaign_category_id'=>'1',
            'states'=>'1',
            'campaign_url'=>'https://Code.de',
            'states'=>'"BW,BY,BE,BB,HB,HH,HE,MV,NI,NW,RP,SL,SN,ST,SH,TH"',
            'age_range'=>'{"first": 18, "second": 80}',
            'need_to_do'=>'["Do this", "And this", "And this", "Aaaaand this"]',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('products')->insert([
            'name'=>'Test',
            'image_product'=>'mustermann-gmbh/1616254744FE8EA809-61EA-48F9-967F-CAAA4B9F7281.jpeg',
            'variations'=>'[{"image": "mustermann-gmbh/1616254744424280DF-3092-4FE5-9A5B-33EEEC70116A.png", "quantity": "22", "variation": "Blau"}]',
            'company_id'=>'1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);

    	DB::table('campaign_activities')->insert([
            'campaign_activity_id'=>'1',
            'user_id'=>'3',
            'campaign_id'=>$id,
            'company_id'=>'1',
            'company_user_id'=>'1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);

        DB::table('campaign_images')->insert([
            'url'=>'https://test.com/image',
            'campaign_id'=>'1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        return "create";*/
    }

    public function delete()
    {

        return "delete";
    }
}
