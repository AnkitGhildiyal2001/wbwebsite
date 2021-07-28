<?php

namespace App\Http\Controllers;

use App\ProfileAccess;
use App\User;
use Illuminate\Http\Request;
use App\InstaProfilePic;

class ProfileAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    private function getPublicInfo($username)
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
    /**
     * Display the specified resource.
     *
     * @param  \App\ProfileAccess  $profileAccess
     * @return \Illuminate\Http\Response
     */
    public function show($user_slug)
    {
        $current_user = auth()->user();

        if (!$current_user->isCompany()) {
            abort(403);
        }

        $company = $current_user->company;

        $profile_user = User::where('slug', $user_slug)->first();

        $profile = $profile_user->profile()->first();

        $access = ProfileAccess::where('company_id', $company->id)
            ->where('user_id', $profile_user->id)
            ->first();

        if (!$access) {
            abort(403);
        }

        $user = $profile_user;
        $channels = json_decode($user->channels);

        $instagram = isset($channels->instagram) ? $channels->instagram : null;
        $youtube        = isset($channels->youtube) ? $channels->youtube : null;
        $facebook       = isset($channels->facebook) ? $channels->facebook : null;

        $insta_stats = [];
        $youtube_stats  = [];
        if( isset($youtube->id) ) {
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
		    }
	    }

        if ($instagram) {
            // $api_url = "https://www.instagram.com/" . $instagram->username . "/?__a=1";

            $response = $this->getPublicInfo($instagram->username);
            if( isset($response['graphql']['user']['edge_followed_by']['count']) ) {
              $followers = $response['graphql']['user']['edge_followed_by']['count'];
              $bio = $response['graphql']['user']['biography'];
              $profile_img = $response['graphql']['user']['profile_pic_url'];
              $media_count = $response['graphql']['user']['edge_owner_to_timeline_media']['count'];

              $insta_stats['followers'] = $followers;
              $insta_stats['bio'] = $bio;
              $insta_stats['profile_img'] = $profile_img;
              $insta_stats['media_count'] = $media_count;

              $profilepic = InstaProfilePic::where('user_id',$current_user->id)->first();
              if(isset($profilepic))
                $insta_stats['profile_img'] = $profilepic->profile_pic_url;

            }
        }

        return view('profile.index', compact('user', 'profile', 'instagram', 'insta_stats', 'youtube_stats', 'facebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfileAccess  $profileAccess
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileAccess $profileAccess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfileAccess  $profileAccess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfileAccess $profileAccess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfileAccess  $profileAccess
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileAccess $profileAccess)
    {
        //
    }
}
