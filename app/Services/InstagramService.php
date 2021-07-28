<?php

namespace App\Services;

use MetzWeb\Instagram\Instagram;

class InstagramService
{
	protected $client;
	protected $userId;
	protected $username;
	protected $accessToken;

	public function __construct( object $instagram  )
	{
		$this->client = $this->getClient();
		$this->userId = optional($instagram)->id;
		$this->username = optional($instagram)->username;
		$this->accessToken = optional($instagram)->access_token;

		$this->client->setAccessToken($this->accessToken);
	}

	private function getClient() : Instagram
	{
	    return new Instagram([
	      'apiKey'      => config('services.instagram.client_id'),
	      'apiSecret'   => config('services.instagram.client_secret'),
	      'apiCallback' => config('services.instagram.redirect')
	    ]);
	}

	public function getUserLikes()
	{
		echo '<pre>';
		print_r($this->client->getUser('17841406584366283'));
		echo '</pre>';
	}
}

?>