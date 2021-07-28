<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\CampaignCategory;
use App\Profile;
use App\Services\InstagramService;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\InstaProfilePic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Socialite;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private function insta_response($username)
     {
         $curl = curl_init();
         curl_setopt_array($curl, array(
           CURLOPT_URL => "https://easy-instagram-service.p.rapidapi.com/username?username=".$username."&random=x8n3nsj2",
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 30,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "GET",
           CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_secret\"\r\n\r\nbab4b323a3f6e0ca69a1017f9afb019b\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"grant_type\"\r\n\r\nauthorization_code\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"redirect_uri\"\r\n\r\nhttps://calsob.cf/\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"code\"\r\n\r\nAQAEPcJuRD9XdUC1VB-gzuc5H-g6U4Y_xc62wpnxaMJN2QxKttKz5LkZHolwGvcLjn_00K-4kiEPS-rues2dPLIo_djbigWf1KzlBP-L0nraVSCOaMkCwkNojXCAZL8R1lqeV7vX-xpZrBXntx9EjpFtHdSXQfcVShe8G3cx_Ui477XiLVQ2-qDbkhUbpcdOe9RfOaw7vr7R4836IIMBOfEjJ_cu5tSZnQj_dsb-abXh2w\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"client_id\"\r\n\r\n234501778482042\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
           CURLOPT_HTTPHEADER => array(
             "cache-control: no-cache",
             "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
             "postman-token: c262f872-2ffd-e1bf-6d77-8f67e7edcdf6",
             "x-rapidapi-host: easy-instagram-service.p.rapidapi.com",
             "x-rapidapi-key: 1b398dedacmsh3a0c864b03918c3p17a43ajsnd9fea44f80de"
           ),
         ));
         $response = curl_exec($curl);
         curl_close($curl);
          return json_decode($response, true)['profile_pic_url'];
     }
    public function index()
    {
        $user = auth()->user();

        $profile = $user->profile()->first();

        $pageConfigs = [
            'sidebarCollapsed' => true
        ];

        $breadcrumbs = [
            ['link' => "dashboard-analytics", 'name' => "Home"], ['link' => "dashboard-analytics", 'name' => "Pages"], ['name' => "Profile"]
        ];

        $channels = json_decode($user->channels);

        $instagram      = isset($channels->instagram) ? $channels->instagram : [];
        $youtube        = isset($channels->youtube) ? $channels->youtube : null;
        $facebook       = isset($channels->facebook) ? $channels->facebook : null;
	      $twitch         = isset($channels->twitch) ? $channels->twitch : null;
        $youtube_stats  = [];
	    if( isset($youtube->id) ) {
			$youtube_stats = $this->getYouTubeStats($youtube);
	    }


        $insta_stats = [];
        if ($instagram) {
            // $api_url = "https://www.instagram.com/" . $instagram->username . "/?__a=1";

            if( isset($response['graphql']['user']['edge_followed_by']['count']) ) {
              $followers = $response['graphql']['user']['edge_followed_by']['count'];
              $bio = $response['graphql']['user']['biography'];
              $profile_img = $response['graphql']['user']['profile_pic_url'];
              $media_count = $response['graphql']['user']['edge_owner_to_timeline_media']['count'];

              $insta_stats['followers'] = $followers;
              $insta_stats['bio'] = $bio;
              $insta_stats['profile_img'] = $profile_img;
              $insta_stats['media_count'] = $media_count;
            }

            if(!auth()->user()->isCompany()){
              $currenttime=Carbon::now();
              $expiretime = Carbon::parse($currenttime)->addHour(24);
              $profilepic = InstaProfilePic::where('user_id',auth()->user()->id)->first();
              if($profilepic){

                  if($currenttime > $profilepic->expire_time){
                    $res1 = "helper.php?url=".urlencode($this->insta_response($instagram->username));
                    $res = url($res1);
                    $insta_stats['profile_img'] = $res;
                    $profilepic->user_id=auth()->user()->id;
                    $profilepic->profile_pic_url=$res;
                    $profilepic->expire_time=$expiretime;
                    $profilepic->save();
                  }else{
                    $res= $profilepic->profile_pic_url;
                  }
               }else{
                   $res1 = "helper.php?url=".urlencode($this->insta_response($instagram->username));
                   $res = url($res1);
                   $profilepic=  new InstaProfilePic;
                   $profilepic->user_id=auth()->user()->id;
                   $profilepic->profile_pic_url=$res;
                   $profilepic->expire_time=$expiretime;
                   $profilepic->save();
              }
              $insta_stats['profile_img'] = $res;
            }

            //$res1 = "helper.php?url=".urlencode($this->insta_response($instagram->username));
            //$res = url($res1);
            //$insta_stats['profile_img'] = $res;
            //dd($insta_stats);
        }
        $twitch_stats = (isset($twitch->id)) ? $this->getTwitchInfo($twitch) : [];

        //   $user = Auth::user();
        //   $aboutText = DB::table('profiles')->where('id', $user->profile_id)->first()->about;

        return view('profile.index', compact('user', 'profile', 'instagram', 'insta_stats', 'youtube_stats', 'youtube', 'facebook', 'twitch_stats', 'twitch'));

        //   return view('/pages/page-user-profile', [
        //       'pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs,
        //   ]);
    }

	public function getYouTubeStats($youtube)
	{
		$youtube_stats = [];
		if( !isset($youtube->id) )
			return [];

		try {
			$channel = \Cache::remember('youtube_user_stats_' . $youtube->id , 2 * 60 * 60, function () use ($youtube) {
				return Youtube::getChannelById($youtube->id);
			});
		}  catch (\Exception $e) {
			$channel = (object)[];
		}
		if( isset($channel->id) )
		{
			$snippet = optional($channel)->snippet;
			$youtube_stats['title'] = optional($snippet)->title;
			$youtube_stats['description'] = optional($snippet)->description;
			$youtube_stats['published_at'] = optional($snippet)->publishedAt;
			$youtube_stats['thumbnail_url'] = optional($snippet)->thumbnails->medium->url;
			$youtube_stats['view_count'] = optional($channel)->statistics->viewCount;
			$youtube_stats['subscriber_count'] = optional($channel)->statistics->subscriberCount;

            $youtube_stats['video_count'] = optional($channel)->statistics->videoCount;
            $total_like_count = 0;
            $total_view_count = 0;
            $total_dislike_count = 0;
            $total_comment_count = 0;
            $total_favorite_count = 0;
            $videoList = Youtube::listChannelVideos($channel->id, 40);
            for($i = 0; $i < count($videoList); $i++){
                $video = $videoList[0];
                $videoId = $video->id->videoId;
                $video = Youtube::getVideoInfo($videoId);
                if($video){
                    $total_like_count += $video->statistics->likeCount;
                    $total_view_count += $video->statistics->viewCount;
                    $total_dislike_count += $video->statistics->dislikeCount;
                    $total_comment_count += $video->statistics->commentCount;
                    $total_favorite_count += $video->statistics->favoriteCount;
                }
            }
            $total_engagement = $total_like_count + $total_view_count + $total_dislike_count + $total_comment_count + $total_favorite_count;
            $average_engagement = (count($videoList) > 0) ? $total_engagement / count($videoList) : 0;
            $engagement_rate = ($youtube_stats['subscriber_count'] > 0) ? $average_engagement / $youtube_stats['subscriber_count'] : 0;
            $youtube_stats['engagement_rate'] = round($engagement_rate, 2)."%";

			if( optional($channel)->statistics->subscriberCount < 500 ) {
				session(['social-account-error' => 'Leider unterstützen wir aktuell nur Konten mit mehr als 500 Followern. Bitte schaue später erneut vorbei!']);
				$this->postDisconnectChannel(request()->merge([
					'channel' => 'youtube'
				]));
				$youtube_stats = [];
			}
		}
		return $youtube_stats;
    }

	public function getTwitchInfo( $twitch )
	{
		if( !isset($twitch->id) ) {
			return [];
		}
		$stats = [];

		try {
			$stats = \Cache::remember('twitch_stats_' . $twitch->token , 2 * 60 * 60, function () use ($twitch) {

				$followers = Http::withHeaders([
						'Authorization' => 'Bearer ' . $twitch->token,
						'Client-Id' => config('services.twitch.client_id'),
					])
					->get('https://api.twitch.tv/helix/users/follows?to_id=' . $twitch->id)
					->json();
				$followers = optional($followers)['total'];
				$twitchApi  = new \TwitchApi\TwitchApi([
					'client_id' => config('services.twitch.client_id'),
				]);
				$user        = $twitchApi->getUser($twitch->id);
				$following   = $twitchApi->getUsersFollowedChannels($twitch->id);
				$streams     = $twitchApi->getFollowedStreams($twitch->token);

				return $stats = [
					'id' => $twitch->id,
					'name' => optional($user)['display_name'],
					'bio' => optional($user)['bio'],
					'avatar' => optional($user)['logo'],
					'following' => optional($following)['_total'],
					'followers' => $followers,
					'streams' => count(optional($streams)['streams'] ?? []),
				];
			});
		}  catch (\Exception $e) {
		}

		if( optional($stats)['followers'] < 500 ) {
			session(['social-account-error' => 'Leider unterstützen wir aktuell nur Konten mit mehr als 500 Followern. Bitte schaue später erneut vorbei!']);
			$this->postDisconnectChannel(request()->merge([
				'channel' => 'twitch'
			]));
			$stats = [];
		}
		return $stats;
    }

	public function getFacebookStats($facebook)
	{
		$fb = new \Facebook\Facebook([
			'app_id' => '3101192343295530', //config('services.facebook.client_id'),
			'app_secret' => '8b72077ec384e325a321e7e1a36dc48f', //config('services.facebook.client_secret'),
			'default_graph_version' => 'v7.0',
			//'default_access_token' => $facebook->token, // optional
		]);
		 ///Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
   $helper = $fb->getRedirectLoginHelper();
		echo $helper->getLoginUrl('https://wunderbrudis.de/facebook-auth', ['email']);
		exit;
   $helper = $fb->getJavaScriptHelper();
   $helper = $fb->getCanvasHelper();
   $helper = $fb->getPageTabHelper();
   //dd($facebook->id);
		try {
			$response = $fb->get($facebook->id , $facebook->token);
		} catch(\Facebook\Exceptions\FacebookResponseException $e) {

		} catch(\Facebook\Exceptions\FacebookSDKException $e) {
		}
		$graphNode = $response->getBody();
		//dd($graphNode);
    }

    public function getPublicInfo($username)
    {
        $url     = sprintf("https://www.instagram.com/$username");
        return null;
        try {
	        $content = file_get_contents($url);
	        $content = explode("window._sharedData = ", $content)[1];
	        $content = explode(";</script>", $content)[0];
	        $data    = json_decode($content, true);
	        return (isset( $data['entry_data']['ProfilePage'][0])) ? $data['entry_data']['ProfilePage'][0] : null;
        } catch (\ErrorException $e) {
        	return null;
        }
    }

    public function getInstagramUserInfo($instagram)
    {
    	//print_r($instagram);
    	$instagramService = new InstagramService($instagram);
	    //$instagramService->getUserLikes();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $user = auth()->user();

        if ($user->slug != $slug) {
            abort(403);
        }

        $profile = $user->profile()->first();

        $channels = json_decode($user->channels);

        $instagram = isset($channels->instagram) ? $channels->instagram : null;
        $youtube = isset($channels->youtube) ? $channels->youtube : null;
        $twitter = isset($channels->twitter) ? $channels->twitter : null;
        $facebook = isset($channels->facebook) ? $channels->facebook : null;
	    $twitch = isset($channels->twitch) ? $channels->twitch : null;

        $categories = CampaignCategory::all();

        $myCategoriesIds = $user->campaignCategories->pluck('id');
        $myCategoriesIds = $myCategoriesIds->toArray();

        $this->getYouTubeStats($youtube);
        $this->getTwitchInfo($twitch);

        return view('profile.edit', compact('user', 'profile', 'instagram', 'youtube', 'twitter', 'categories', 'myCategoriesIds', 'facebook', 'twitch'));
    }

	public function getConnectSocial($driver = 'youtube')
	{
		if( $driver == 'twitch') {
			return Socialite::driver($driver)
				->scopes([
					'analytics:read:games', 'user:read:email'
				])
				->redirect();
		}
		return Socialite::driver($driver)->redirect();
    }

	public function postDisconnectChannel(Request $request)
	{
		$user       = auth()->user();
		$channel    = $request->input('channel');
		$channels = @json_decode($user->channels, true);
		unset($channels[$channel]);
		$user->channels = json_encode($channels);
		$user->update();
		return [
			'success' => true,
			'message' => 'Disconnected'
		];
    }

	public function postDisconnectInstagram()
	{
		$is_disconnect = request()->input('is_disconnect');
		$is_disconnect = $is_disconnect == 'yes';
		$user = auth()->user();
		$channels = @json_decode($user->channels, true);
		unset($channels['instagram']);
		$user->channels = json_encode($channels);
		$user->update();
		$message = 'Leider unterstützen wir aktuell nur Konten mit mehr als 500 Followern. Bitte schaue später erneut vorbei!';
		if( !$is_disconnect ) {
			session(['social-account-error' => $message]);
		}
		return [
			'success' => true,
			'message' => $message
		];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $user = $profile->user;

        $validate = $request->validate([
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'about' => 'max:300',
        ]);

        if(!$user->isCompany()) {
            $validate = $request->validate([
                'username' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'about' => 'max:300',
                'category' => 'required|array|max:3',
            ]);
        }

        $bucket = 'wb-profileimages';
        Config::set('filesystems.disks.s3.bucket', $bucket);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalName();
            $path = $user->id . '/' . $name;
            $user->image = $path;

            $image->storeAs($user->id, $name);
        }

        //TODO: if username change also change path to profile image

        if ($request['removed-image'] != null) {
            $user->image = NULL;
        }
        $validate['notify'] = $request->notify ? true : false;
        $user->update([
            'username' => $validate['username'],
            'slug' => Str::slug($validate['username']),
            'firstname' => $validate['firstname'],
            'lastname' => $validate['lastname'],
            'email' => $validate['email'],
            'notify' => $validate['notify']
        ]);

        if ($user->wasChanged('firstname') || $user->wasChanged('lastname')) {
            $user->update([
                'name' => $validate['firstname'] . ' ' . $validate['lastname']
            ]);
        }

        $categories = $request->category;

        $user->campaignCategories()->sync($categories);

        $profile->update([
            'about' => $validate['about'],
        ]);

        $profile->save();

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
