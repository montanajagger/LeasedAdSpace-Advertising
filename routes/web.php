<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.Home', ['pageTitle' => 'Home']);
});

Route::get('/login', function() {
    return view('frontend.Login', ['pageTitle' => 'Log In']);
});

Route::post('/login', function() {
    return redirect('/dashboard');
});

Route::get('/register', function() {
    return view('frontend.Register', ['pageTitle' => 'Register']);
});

Route::get('/howitworks', function() {
    return View('frontend.HowItWorksIndex', ['pageTitle' => 'How It Works']);
});

Route::get('/howitworks_advertisers', function() {
    return View('frontend.HowItWorksAdvertisers', ['pageTitle' => 'Advertisers']);
});

Route::get('/howitworks_affiliate', function() {
    return View('frontend.HowItWorksAffiliate', ['pageTitle' => 'Affiliates']);
});

Route::get('/adblog', 'App\Http\Controllers\AdBlogController@show');

Route::get('/adboard', 'App\Http\Controllers\AdBoardController@show');

Route::get('/para/info', function() {
    return View('frontend.ParaAdsService', ['pageTitle' => 'ParaAds Service']);
});

Route::get('/advertiser_terms_of_service', function() {
    return View('frontend.AdvertiserTermsOfService', ['pageTitle' => 'Advertiser Terms of Service']);
});

Route::get('/affiliate_terms_of_service', function() {
    return View('frontend.AffiliateTermsOfService', ['pageTitle' => 'Affiliate Terms of Service']);
});

Route::get('/privacy_policy', function() {
    return View('frontend.PrivacyPolicy', ['pageTitle' => 'Privacy Policy']);
});

Route::get('/contactus', function() {
    return View('frontend.ContactUs', ['pageTitle' => 'Contact Us']);
});

Route::get('/faq', function() {
    return View('frontend.FAQ', ['pageTitle' => 'FAQ']);
});

Route::get('/leaders', function() {
    return View('frontend.Leaders', ['pageTitle' => 'Leaders']);
});

Route::get('/red_diamonds', function() {
    return View('frontend.RedDiamonds', ['pageTitle' => 'Red Diamonds']);
});

Route::get('/member_listing', function() {
    return View('frontend.MemberListing', ['pageTitle' => 'Member Listing']);
});

Route::get('/las_support_blog', function() {
    return View('frontend.LasSupportBlog', ['pageTitle' => 'Las Support Blog']);
});

Route::get('/tutorial_videos', function() {
    return View('frontend.TutorialVideos', ['pageTitle' => 'Tutorial Videos']);
});

Route::get('/dashboard', function() {
    return View('backend.Dashboard', ['pageTitle' => 'Dashboard', 'isLoggedIn' => true, 'username' => 'Serhii']);
});

Route::get('/edit_profile', function() {
    return View('backend.EditProfile', ['pageTitle' => 'Edit Profile', 'isLoggedIn' => true]);
});

Route::get('/purchase_traffic_pack', function() {
    return View('backend.PurchaseTrafficPack', ['pageTitle' => 'Purchase Traffic Pack', 'isLoggedIn' => true]);
});

Route::get('/purchases_histroy', function() {
    return View('backend.PurchasesHistory', ['pageTitle' => 'Purchases History', 'isLoggedIn' => true]);
});

Route::get('/submit_textad', function() {
    return View('backend.SubmitTextAd', ['pageTitle' => 'Submit Text Ad', 'isLoggedIn' => true]);
});

Route::get('/edit_textad', function() {
    return View('backend.EditTextAd', ['pageTitle' => 'Edit Text Ad', 'isLoggedIn' => true]);
});

Route::get('/submit_bannerad', function() {
    return View('backend.SubmitBannerAd', ['pageTitle' => 'Submit Banner Ad', 'isLoggedIn' => true]);
});

Route::get('/submit_adboard_post', function() {
    return View('backend.SubmitAdBoardPost', ['pageTitle' => 'Submit Ad Board Post', 'isLoggedIn' => true]);
});

Route::get('/send_soloemail', function() {
    return View('backend.SendSoloEmail', ['pageTitle' => 'Send Solo Email', 'isLoggedIn' => true]);
});

Route::get('/personal_blog', function() {
    return View('backend.PersonalBlog', ['pageTitle' => 'Personal Blog', 'isLoggedIn' => true]);
});

Route::get('/draft_post', function() {
    return View('backend.DraftPost', ['pageTitle' => 'Draft Post', 'isLoggedIn' => true]);
});

Route::get('/affiliate_singup', function() {
    return View('backend.AffiliateSignup', ['pageTitle' => 'Affiliate Signup', 'isLoggedIn' => true]);
});

Route::post('/affiliate_setup_fee', function() {
    return View('backend.AffiliateSetupFee', ['pageTitle' => 'Affiliate Setup Fee', 'isLoggedIn' => true]);
});
