<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignActivity;
use App\Chatroom;
use App\Mail\InfluencerApplied;
use App\Message;
use App\ProfileAccess;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index()
    {
        echo "Test Rout Working";
        exit;
    }
}
