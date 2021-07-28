<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class SocialController extends Controller
{
    public function instagram(Request $request)
    {
        $code = $request->input('code');

        // set post fields
        $client_secret = config('services.instagram.client_secret');
        $post = [
            'client_id' => config('services.instagram.client_id'),
            'client_secret' => $client_secret,
            'code' => $code,
            'grant_type' => 'authorization_code',
            'redirect_uri' => env('INSTAGRAM_AUTH_URL'),
        ];

        $ch = curl_init('https://api.instagram.com/oauth/access_token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        // execute!
        $response = curl_exec($ch);

        // close the connection, release resources used
        curl_close($ch);

        // do anything you want with your response
        $json = json_decode($response);

        $access_token = $json->access_token;
        $user_id = $json->user_id;

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, 'https://graph.instagram.com/access_token?grant_type=ig_exchange_token&client_secret=' . $client_secret . '&access_token=' . $access_token);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $json2 = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        $jsonArrayResponse = json_decode($json2);
        $long_live_access_token = $jsonArrayResponse->access_token;

        $lastcURL = curl_init();
        curl_setopt($lastcURL, CURLOPT_URL, 'https://graph.instagram.com/' . $user_id . '?fields=account_type,username&access_token=' . $long_live_access_token);
        curl_setopt($lastcURL, CURLOPT_RETURNTRANSFER, true);

        $json3 = curl_exec($lastcURL);
        curl_close($lastcURL);

        $http_response = json_decode($json3);
        $insta_username = $http_response->username;

	    $user       = auth()->user();
	    $channels   = @json_decode($user->channels, true);
        $channels['instagram'] = [
	        'username' => $insta_username,
	        'id' => $user_id,
	        'access_token' => $long_live_access_token,
        ];

        $user->channels = json_encode($channels);
        $user->save();

        return redirect()->route('profile.edit', $user->slug);
    }

	public function youtube(Request $request)
	{
		$user       = auth()->user();
		$youtube    = Socialite::driver('youtube')->user();
		$channels   = @json_decode($user->channels, true);
		$channels['youtube'] = [
			'nickname' => $youtube->nickname,
			'id' => $youtube->id,
			'token' => $youtube->token,
			'expiresIn' => $youtube->expiresIn,
			'email' => $youtube->email,
			'avatar' => $youtube->avatar,
		];
		$user->channels = json_encode($channels);
		$user->save();
		return redirect()->route('profile.edit', $user->slug);
	}

	public function facebook(Request $request)
	{
		$user       = auth()->user();
		$facebook   = Socialite::driver('facebook')->stateless()->user();
		$channels   = @json_decode($user->channels, true);
		$channels['facebook'] = [
			'token' => $facebook->token,
			'id' => $facebook->id,
			'name' => $facebook->name,
			'email' => $facebook->email,
			'avatar' => $facebook->avatar,
			'expiresIn' => $facebook->expiresIn,
		];
		$user->channels = json_encode($channels);
		$user->update();
		return redirect()->route('profile.edit', $user->slug);
	}

	public function twitch(Request $request)
	{
		$user       = auth()->user();
		$twitch     = Socialite::driver('twitch')->stateless()->user();
		$channels   = @json_decode($user->channels, true);
		$channels['twitch'] = [
			'id' => $twitch->id,
			'token' => $twitch->token,
			'refreshToken' => $twitch->refreshToken,
			'expiresIn' => $twitch->expiresIn,
			'name' => $twitch->name,
			'nickname' => $twitch->nickname,
			'email' => $twitch->email,
			'avatar' => $twitch->avatar,
			'view_count' => $twitch->user['view_count'],
		];
		$user->channels = json_encode($channels);
		$user->update();

		return redirect()->route('profile.edit', $user->slug);
	}
}