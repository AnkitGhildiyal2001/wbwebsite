<?php

use App\Campaign;
use App\CampaignImage;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route url

Route::get('/', function () {
    return view('home1');
});

Route::get('/iam', 'Auth\VerificationController@test');

Route::get('/influencer', function () {
    return view('influencer1');
});

Route::get('/business', function () {
    return view('business1');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/agb', function () {
    return view('agb1');
});
Route::get('/impressum', function () {
    return view('impressum1');
});
Route::get('/datenschutz', function () {
    return view('datenschutz1');
});
Route::get('/preise', 'PreiseController@index')->name('Preise.index');


// just for debugging sentry errors
Route::get('/debug-sentry', function () {
    throw new Exception('My first Sentry error!');
});

Route::get('/dummy-create', 'DummydataController@create')->name('dummy.create');
Route::get('/dummy-delete', 'DummydataController@delete')->name('dummy.delete');

Route::post('/influencer/kategorien', 'CampaignCategoryController@store')->name('influencer.categories');

Route::group(['middleware' => ['auth', 'web', 'verified']], function () {

    Route::post('/variant/selection/save', 'ProductController@variant_selection_save')->name('variant.selection.save');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

	Route::get('profile/connect-social/{driver}', 'ProfileController@getConnectSocial');
    Route::resource('profile', 'ProfileController');
    Route::post('profile/disconnect-instagram', 'ProfileController@postDisconnectInstagram');
    Route::post('profile/disconnect-channel', 'ProfileController@postDisconnectChannel');

    Route::get('/profil/{user}', 'ProfileAccessController@show')->name('influencer.profile');

    Route::post('/darkmode', 'UserController@setTheme')->name('darkmode');

    Route::get('/meine-kampagnen', 'UserCampaignController@index')->name('user.campaign.index');
    Route::get('/meine-kampagnen/{campaign}', 'UserCampaignController@show')->name('user.campaign.show');

    Route::get('/kampagnen', 'CampaignController@index')->name('campaign.index');
    Route::get('/kampagne/create', 'CampaignController@create')->name('campaign.create')->middleware('company');
    /*Route::get('/kampagne/create', 'CampaignController@create')->name('campaign.create')->middleware('company');*/
    Route::post('/kampagne/create', 'CampaignController@store')->name('campaign.store')->middleware('company');
    Route::post('/kampagne/update-options', 'CampaignController@update_options')->name('campaign.update_options')->middleware('company');
    Route::post('/kampagne/bezahlung', 'CampaignController@pay')->middleware('company');
    Route::post('/kampagne/pay-success', 'CampaignController@paysuccess')->middleware('company');
    Route::patch('/kampagne/{slug}/edit', 'CampaignController@update')->name('campaign.update')->middleware('company');
    Route::get('/kampagne/{slug}/edit', 'CampaignController@edit')->name('campaign.edit')->middleware('company');
    Route::get('/kampagne/{company}/{slug}', 'CampaignController@show')->name('campaign.show');
    Route::delete('/kampagne/{company}/{slug}', 'CampaignController@destroy')->name('campaign.delete')->middleware('company');

   
    Route::get('/product/deletevariant', 'ProductController@deletevariant')->name('product.deletevariant');
    Route::resource('product', 'ProductController')->middleware('company');

    //Srtipe callback routes
    Route::get('campaign-success', 'CampaignController@campainSuccess')->name('campaign.success');
    Route::get('campaign-cancel', 'CampaignController@campainCancel')->name('campaign.cancel');

    Route::post('/bilder/kampagnen/{campaign}', function(Request $request, $campaign_id) {
        $bucket = 'wb-campaigns';
        Config::set('filesystems.disks.s3.bucket', $bucket);

        $campaign = Campaign::where('status', 1)->where('id', $campaign_id)->first();
        $file = $request->file('file');
        $company = $campaign->company->slug;
        $name = $file->getClientOriginalName();
        $path = $company . '/' . $campaign->id . '/' . $name;
        $file->storeAs($company . '/' . $campaign->id, $name);
        CampaignImage::create([
            'url' => $path,
            'campaign_id' => $campaign->id,
        ]);
    })->name('upload.images')->middleware('company');

    Route::delete('/bilder/kampagnen/loeschen', function() {
        return 200;
    })->name('delete.images');

    Route::patch('/set-state/{campaign}/{influencer}/{state}', 'UserCampaignController@setState')->name('campaign.setstate');
    Route::post('/accept/{campaign}/{influencer}', 'UserCampaignController@acceptInfluencer')->name('campaign.accept');
    Route::post('/decline/{campaign}/{influencer}', 'UserCampaignController@declineInfluencer')->name('campaign.decline');
    Route::post('/submitpost/{campaign}/{influencer}', 'UserCampaignController@submitPost')->name('campaign.submitpost');

    Route::post('/submitgiveawayaddress/{campaign}/{influencer}', 'CampaignController@submitgiveawayaddress')->name('submitgiveawayaddress');

    Route::post('/campaign-details', 'CampaignController@campaign_details')->name('campaign.details');

    Route::get('/account/passwort', 'AccountController@changePassword')->name('account.password');
    Route::patch('/account/password', 'AccountController@savePassword')->name('account.savePassword');
    Route::get('/account/adresse', 'AccountController@changeAddress')->name('account.address');
    Route::patch('/account/adresse', 'AccountController@saveAddress')->name('account.saveAddress');

    Route::post('/bewerben', 'ApplyController@send')->name('campaign.apply');

    Route::get('/nachrichten', 'ChatroomController@index')->name('chatroom.index');

    Route::post('/add-message', 'ChatroomController@store');
    Route::post('/read-chat/{id}', 'ChatroomController@markChatRead');

    Route::post('/approve', 'ApplyController@approve');
    Route::post('/decline', 'ApplyController@decline');

    Route::get('instagram-auth', 'SocialController@instagram');
    Route::get('youtube-auth', 'SocialController@youtube');
    Route::get('facebook-auth', 'SocialController@facebook');
    Route::get('twitch-auth', 'SocialController@twitch');
});

// Route Apps
Route::get('/app-chat', 'ChatAppController@chatApp');
Route::get('/app-calender', 'CalenderAppController@calenderApp');
Route::get('/app-ecommerce-shop', 'EcommerceAppController@ecommerce_shop');
Route::get('/app-ecommerce-details', 'EcommerceAppController@ecommerce_details');
Route::get('/app-ecommerce-wishlist', 'EcommerceAppController@ecommerce_wishlist');
Route::get('/app-ecommerce-checkout', 'EcommerceAppController@ecommerce_checkout');

// Users Pages
Route::get('/app-user-list', 'UserPagesController@user_list');
Route::get('/app-user-view', 'UserPagesController@user_view');
Route::get('/app-user-edit', 'UserPagesController@user_edit');

// Route Data List
Route::resource('/data-list-view', 'DataListController');
Route::resource('/data-thumb-view', 'DataThumbController');


// Route Content
Route::get('/content-grid', 'ContentController@grid');
Route::get('/content-typography', 'ContentController@typography');
Route::get('/content-text-utilities', 'ContentController@text_utilities');
Route::get('/content-syntax-highlighter', 'ContentController@syntax_highlighter');
Route::get('/content-helper-classes', 'ContentController@helper_classes');

// Route Color
Route::get('/colors', 'ContentController@colors');

// Route Icons
Route::get('/icons-feather', 'IconsController@icons_feather');
Route::get('/icons-font-awesome', 'IconsController@icons_font_awesome');

// Route Cards
Route::get('/card-basic', 'CardsController@card_basic');
Route::get('/card-advance', 'CardsController@card_advance');
Route::get('/card-statistics', 'CardsController@card_statistics');
Route::get('/card-analytics', 'CardsController@card_analytics');
Route::get('/card-actions', 'CardsController@card_actions');

// Route Components
Route::get('/component-alert', 'ComponentsController@alert');
Route::get('/component-buttons', 'ComponentsController@buttons');
Route::get('/component-breadcrumbs', 'ComponentsController@breadcrumbs');
Route::get('/component-carousel', 'ComponentsController@carousel');
Route::get('/component-collapse', 'ComponentsController@collapse');
Route::get('/component-dropdowns', 'ComponentsController@dropdowns');
Route::get('/component-list-group', 'ComponentsController@list_group');
Route::get('/component-modals', 'ComponentsController@modals');
Route::get('/component-pagination', 'ComponentsController@pagination');
Route::get('/component-navs', 'ComponentsController@navs');
Route::get('/component-navbar', 'ComponentsController@navbar');
Route::get('/component-tabs', 'ComponentsController@tabs');
Route::get('/component-pills', 'ComponentsController@pills');
Route::get('/component-tooltips', 'ComponentsController@tooltips');
Route::get('/component-popovers', 'ComponentsController@popovers');
Route::get('/component-badges', 'ComponentsController@badges');
Route::get('/component-pill-badges', 'ComponentsController@pill_badges');
Route::get('/component-progress', 'ComponentsController@progress');
Route::get('/component-media-objects', 'ComponentsController@media_objects');
Route::get('/component-spinner', 'ComponentsController@spinner');
Route::get('/component-toast', 'ComponentsController@toast');

// Route Extra Components
Route::get('/ex-component-avatar', 'ExtraComponentsController@avatar');
Route::get('/ex-component-chips', 'ExtraComponentsController@chips');
Route::get('/ex-component-divider', 'ExtraComponentsController@divider');

// Route Forms
Route::get('/form-select', 'FormsController@select');
Route::get('/form-switch', 'FormsController@switch');
Route::get('/form-checkbox', 'FormsController@checkbox');
Route::get('/form-radio', 'FormsController@radio');
Route::get('/form-input', 'FormsController@input');
Route::get('/form-input-groups', 'FormsController@input_groups');
Route::get('/form-number-input', 'FormsController@number_input');
Route::get('/form-textarea', 'FormsController@textarea');
Route::get('/form-date-time-picker', 'FormsController@date_time_picker');
Route::get('/form-layout', 'FormsController@layouts');
Route::get('/form-wizard', 'FormsController@wizard');
Route::get('/form-validation', 'FormsController@validation');

// Route Tables
Route::get('/table', 'TableController@table');
Route::get('/table-datatable', 'TableController@datatable');
Route::get('/table-ag-grid', 'TableController@ag_grid');

// Route Pages
Route::get('/page-user-profile', 'PagesController@user_profile');
Route::get('/page-faq', 'PagesController@faq');
Route::get('/page-knowledge-base', 'PagesController@knowledge_base');
Route::get('/page-kb-category', 'PagesController@kb_category');
Route::get('/page-kb-question', 'PagesController@kb_question');
Route::get('/page-search', 'PagesController@search');
Route::get('/page-invoice', 'PagesController@invoice');
Route::get('/page-account-settings', 'PagesController@account_settings');

// Route Authentication Pages
Route::get('/auth-login', 'AuthenticationController@login');
Route::get('/auth-register', 'AuthenticationController@register');
Route::get('/auth-forgot-password', 'AuthenticationController@forgot_password');
Route::get('/auth-reset-password', 'AuthenticationController@reset_password');
Route::get('/auth-lock-screen', 'AuthenticationController@lock_screen');

// Route Miscellaneous Pages
Route::get('/page-coming-soon', 'MiscellaneousController@coming_soon');
Route::get('/error-404', 'MiscellaneousController@error_404');
Route::get('/error-500', 'MiscellaneousController@error_500');
Route::get('/page-not-authorized', 'MiscellaneousController@not_authorized');
Route::get('/page-maintenance', 'MiscellaneousController@maintenance');

// Route Charts & Google Maps
Route::get('/chart-apex', 'ChartsController@apex');
Route::get('/chart-chartjs', 'ChartsController@chartjs');
Route::get('/chart-echarts', 'ChartsController@echarts');
Route::get('/maps-google', 'ChartsController@maps_google');

// Route Extension Components
Route::get('/ext-component-sweet-alerts', 'ExtensionController@sweet_alert');
Route::get('/ext-component-toastr', 'ExtensionController@toastr');
Route::get('/ext-component-noui-slider', 'ExtensionController@noui_slider');
Route::get('/ext-component-file-uploader', 'ExtensionController@file_uploader');
Route::get('/ext-component-quill-editor', 'ExtensionController@quill_editor');
Route::get('/ext-component-drag-drop', 'ExtensionController@drag_drop');
Route::get('/ext-component-tour', 'ExtensionController@tour');
Route::get('/ext-component-clipboard', 'ExtensionController@clipboard');
Route::get('/ext-component-plyr', 'ExtensionController@plyr');
Route::get('/ext-component-context-menu', 'ExtensionController@context_menu');
Route::get('/ext-component-swiper', 'ExtensionController@swiper');
Route::get('/ext-component-i18n', 'ExtensionController@i18n');

Auth::routes(['verify' => true]);
Nova::routes();
Route::get('register/{type?}', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('/login/validate', 'Auth\LoginController@validate_api');

Route::group(['middleware' => 'auth'], function(){
    Route::get('billing', 'BillingController@index')->name('billing');
    Route::get('coupon', 'CheckoutController@checkCoupon')->name('coupon');
    Route::get('checkout/{plan_id}', 'StripeController@billingCreateSession')->name('checkout');
    Route::post('checkout', 'CheckoutController@processcheckout')->name('checkout.process');
    Route::get('cancel', 'BillingController@cancel')->name('cancel');
    Route::get('resume', 'BillingController@resume')->name('resume');

    //Stripe Standard Checkout.
    Route::get('billing/success', 'StripeController@billingSuccess')->name('success.stripe.billing');
    Route::get('billing/cancel', 'StripeController@billingCancel')->name('cancel.stripe.billing');
    
    
    Route::get('payment-methods/default/{paymentMethod}', 'PaymentMethodController@markDefault')->name('payment-methods.markDefault');
    Route::resource('payment-methods', 'PaymentMethodController');
    Route::get('invoices/download/{paymentId}', 'BillingController@downloadInvoice')->name('invoices.download');
    // Checking Test Route!
    Route::get('test','TestController@index')->name('test');

    // Chapters Module is Here!
    Route::get('chapters','ChaptersController@index')->name('chapters');
    // view Specific Chapter
    Route::get('viewChapter/{id}','ChaptersController@viewChapter')->name('chapters.view');
    // View Quiz Page for Specific Chapter

    Route::get('QuizChallenge/{id}','ChaptersController@viewQuiz')->name('quiz.view');

    // test form

    Route::post('testForm','ChaptersController@testForm')->name('testForm');
    Route::get('/notifications/get', 'NotificationController@get');

});

Route::stripeWebhooks('stripe-webhook');

Route::get('verify/{facebook}', 'Auth\VerificationController@redirectToProvider');
Route::get('login/{facebook}/callback', 'Auth\VerificationController@handleProviderCallback');
Route::get('email/resend','Auth\VerificationController@resend');


Route::get('/{username}', 'InviteCountController@index');