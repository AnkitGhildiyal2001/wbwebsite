<?php

namespace App\Http\Controllers;

use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Str;

class NotificationController extends Controller
{
    public function update(Request $request) {
        $notificationId = $request->id;

        $currentUser = User::find($request->user_id);
        Log::debug($currentUser);
        $notification = $currentUser->notifications()->where('id', $notificationId)->first();
        Log::debug($notification);
        $notification->read_at = Carbon::now()->addSecond()->toDateTimeString();
        $notification->save();
        return 200;
    }

    public function get() {
        $currentUser = Auth::user();
        $notifications = $currentUser->unreadNotifications;
        $cleanNotifications = new Collection();
        foreach($notifications as $notification) {

          $info = $notification['data']["\x00*\x00attributes"];

          $sender = User::find($info['user_id']);
          $message = Message::find($info['id']);

          $info['id'] = $notification->id;
          $info['sender'] = $sender->firstname . ' ' . $sender->lastname;
          $info['message'] = Str::limit($message->content, 100);
          $info['time'] = $message->created_at->diffForHumans();

          $cleanNotifications->push($info);
        }

        return $cleanNotifications;
    }
}