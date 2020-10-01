<?php


namespace App\Http\Controllers;

use App\Models\LasBannerAd;
use App\Models\LasSmallTextAd;

class HowItWorksController extends Controller
{
    public function show()
    {
        return View('frontend.HowItWorksIndex', ['pageTitle' => 'How It Works']);
    }

    public function showForAdvertising() {
        $topBanners = LasBannerAd::inRandomOrder()->where('banner_type', 'ONE_TWENTY_FIVE')->limit(4)->get();
        $bottomBanners = LasBannerAd::inRandomOrder()->where('banner_type', 'FOUR_SIXTY_EIGHT')->limit(2)->get();
        $middleSmallTextBlogs = LasSmallTextAd::inRandomOrder()->limit(1)->first();
        $bottomSmallTextBlogs = LasSmallTextAd::inRandomOrder()->limit(1)->first();

        return View('frontend.HowItWorksAdvertisers', ['pageTitle' => 'Advertisers', 'topBanners' => $topBanners, 'bottomBanners' => $bottomBanners, 'middleSmallTextBlogs' => $middleSmallTextBlogs, 'bottomSmallTextBlogs' => $bottomSmallTextBlogs]);
    }

    public function showForAffiliate() {
        $topBanners = LasBannerAd::inRandomOrder()->where('banner_type', 'FOUR_SIXTY_EIGHT')->limit(2)->get();
        $bottomBanners = LasBannerAd::inRandomOrder()->where('banner_type', 'ONE_TWENTY_FIVE')->limit(4)->get();
        $middleSmallTextBlogs = LasSmallTextAd::inRandomOrder()->limit(3)->get();

        return View('frontend.HowItWorksAffiliate', ['pageTitle' => 'Affiliates', 'topBanners' => $topBanners, 'bottomBanners' => $bottomBanners, 'middleSmallTextBlogs' => $middleSmallTextBlogs]);
    }
}
