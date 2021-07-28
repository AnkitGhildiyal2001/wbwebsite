<?php

namespace App\Providers;

use App\Campaign;
use App\CampaignCategory;
use App\Message;
use App\Observers\CampaignObserver;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Laravel\Passport\Passport;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Lang as GlobalLang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
     {
         Schema::defaultStringLength(191);
         Passport::routes();

         view()->composer('layout.partials.navbar', function ($view) {

             $currentUser = Auth::user();
             $notifications = $currentUser->unreadNotifications;
             // $notifications = $currentUser->unreadNotifications->pluck('data');

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

             // foreach ($notifications as $notification) {
             //     $notification = $notification->pluck('data');
             //     $info = $notification["\x00*\x00attributes"];

             //     $sender = User::find($info['user_id']);
             //     $message = Message::find($info['id']);

             //     $info['sender'] = $sender->firstname . ' ' . $sender->lastname;
             //     $info['message'] = Str::limit($message->content, 100);
             //     $info['time'] = $message->created_at->diffForHumans();

             //     $cleanNotifications->push($info);
             // }

             $view->with('notifications', $cleanNotifications);
         });

         view()->composer('layout.partials.onboarding', function ($view) {

             $categories = CampaignCategory::all();
             $months = trans('onboarding.months');
             $states = trans('onboarding.states');

             $view->with('categories', $categories)
                 ->with('months', $months)
                 ->with('states', $states);
         });
     }

}
