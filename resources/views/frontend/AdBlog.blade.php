@extends('layouts.frontendLayout')

@section('css')

@endsection


@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('header-section')
    <div class="page-header index">
        <div class="transition-header index-header animated-header">
            <div>
                <div class="col-xs-12" style="position: relative; min-height: 1px; padding-left: 15px; padding-right: 15px;">
                    <h1 class="sr-only">Leased Ad Space</h1>
                    <div class="animated-block">
                        <div class="lead-in">simple, fast, effective traffic</div>
                        <div class="ad-word">JOIN NOW</div>
                    </div>
                    <div class="animated-block">
                        <div class="lead-in">GET YOUR</div>
                        <div class="ad-word"><em>FREE BLOG</em></div>
                    </div>
                    <div class="animated-block">
                        <div class="lead-in">$9.97 will get you</div>
                        <div class="ad-word"><small>A</small> <em>Recurring</em> <small>Solo Ad</small></div>
                    </div>
                    <div class="animated-block">
                        <div class="lead-in">Commissions paid since launch</div>
                        <div class="ad-word">over $271,348</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-section')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Adblog</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @foreach($blogs as $key => $blog)
                    @if ($key < 3)
                        <div class="row">
                            <div class="col-sm-2">
                                @if (isset($smallTexts[$key]))
                                    <div class="gutter-ad-txt">
                                        <a href="{{ $smallTexts[$key]->link }}" target="_blank" class="text-center keychainify-checked steem-keychain-checked">
                                            <div class="title">{{ $smallTexts[$key]->title }}</div>
                                            <!-- #{title}-->
                                            <div>{{ $smallTexts[$key]->line_one }}</div>
                                            <!-- #{line1}-->
                                            <div>{{ $smallTexts[$key]->line_two }}</div>
                                            <!-- #{line2}-->
                                            <div class="title">{{ $smallTexts[$key]->call_to_action }}</div>
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="col-sm-10" style="background-color:#FCFCFC;margin-top:1em;padding-top:1em;border:1px #DEDEDE solid">
                                <h3 style="margin-top:0;">
                                    <a href="https://leasedadspace.com/adBlog/1489916/1-year-onlinemissed-leased-ad-space-launch" class="keychainify-checked steem-keychain-checked">
                                        {{ $blog->subject }}
                                    </a>
                                </h3>
                                <p style="margin:0px" class="small">
                                    Posted on 9-10-2020 at 12:28 AM by
                                    <a href="https://leasedadspace.com/members/maparecida" class="keychainify-checked steem-keychain-checked">
                                        {{ isset($blog->author) == true ? $blog->author->emailuser : '' }}
                                    </a>
                                </p>
                                <hr style="margin-top:.25em;margin-bottom:.25em;">
                                <div>
                                    {!! $blog->body !!}
                                    (<a href="https://leasedadspace.com/adBlog/1489905/ether-chain-smart-contracts--310-roi" class="keychainify-checked steem-keychain-checked">more →</a>)
                                </div>
                                <br>
                                <div>
                                    <p>Check out this offer, or
                                        <a href="https://leasedadspace.com/soloEmail/preVisit/1489916" target="_blank" id="clickLogin" class="keychainify-checked steem-keychain-checked">
                                            LOGIN
                                        </a>
                                        first to get click credits for your browsing!:
                                        <br>
                                        =&gt;
                                        <a href="https://www.trafficprofit.me/page/landing/1/Trafficprofitme" target="_blank" class="keychainify-checked steem-keychain-checked">
                                            https://www.trafficprofit.me/page/landing/1/Trafficprofitme
                                        </a>
                                    </p>
                                </div>
                                <br>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="row" style="margin-bottom:3em;">
                    @foreach($middleBanners as $banner)
                        <div class="col-md-6 bottom-banner">
                            <a href="{{ $banner->destination_url }}" target="_blank" class="keychainify-checked steem-keychain-checked">
                                <img src="{{ $banner->banner_url }}" class="img-responsive center-block fourSixtyEightImage">
                            </a>
                        </div>
                    @endforeach
                </div>
                @foreach($blogs as $key => $blog)
                    @if ($key > 2)
                        <div class="row">
                            <div class="col-sm-2">
                                @if (isset($smallTexts[$key]))
                                    <div class="gutter-ad-txt">
                                        <a href="{{ $smallTexts[$key]->link }}" target="_blank" class="text-center keychainify-checked steem-keychain-checked">
                                            <div class="title">{{ $smallTexts[$key]->title }}</div>
                                            <!-- #{title}-->
                                            <div>{{ $smallTexts[$key]->line_one }}</div>
                                            <!-- #{line1}-->
                                            <div>{{ $smallTexts[$key]->line_two }}</div>
                                            <!-- #{line2}-->
                                            <div class="title">{{ $smallTexts[$key]->call_to_action }}</div>
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <div class="col-sm-10" style="background-color:#FCFCFC;margin-top:1em;padding-top:1em;border:1px #DEDEDE solid">
                                <h3 style="margin-top:0;">
                                    <a href="https://leasedadspace.com/adBlog/1489916/1-year-onlinemissed-leased-ad-space-launch" class="keychainify-checked steem-keychain-checked">
                                        {{ $blog->subject }}
                                    </a>
                                </h3>
                                <p style="margin:0px" class="small">
                                    Posted on 9-10-2020 at 12:28 AM by
                                    <a href="https://leasedadspace.com/members/maparecida" class="keychainify-checked steem-keychain-checked">
                                        {{ isset($blog->author) == true ? $blog->author->emailuser : '' }}
                                    </a>
                                </p>
                                <hr style="margin-top:.25em;margin-bottom:.25em;">
                                <div>
                                    {!! $blog->body !!}
                                    (<a href="https://leasedadspace.com/adBlog/1489905/ether-chain-smart-contracts--310-roi" class="keychainify-checked steem-keychain-checked">more →</a>)
                                </div>
                                <br>
                                <div>
                                    <p>Check out this offer, or
                                        <a href="https://leasedadspace.com/soloEmail/preVisit/1489916" target="_blank" id="clickLogin" class="keychainify-checked steem-keychain-checked">
                                            LOGIN
                                        </a>
                                        first to get click credits for your browsing!:
                                        <br>
                                        =&gt;
                                        <a href="https://www.trafficprofit.me/page/landing/1/Trafficprofitme" target="_blank" class="keychainify-checked steem-keychain-checked">
                                            https://www.trafficprofit.me/page/landing/1/Trafficprofitme
                                        </a>
                                    </p>
                                </div>
                                <br>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- images on bottom of blogs -->
                <div class="row">
                    <div class="col-md-6 bottom-banner">
                        <a href="https://www.leasedadspace.com/ad/visitBannerLink/13038" target="_blank">
                            <img src="./Ad Blog - Leased Ad Space_files/24717.jpg" class="center-block fourSixtyEightImage" style="display: none !important;">
                        </a>
                    </div>
                    <div class="col-md-6 bottom-banner">
                        <a href="https://www.leasedadspace.com/ad/visitBannerLink/189030" target="_blank" class="">
                            <img src="./Ad Blog - Leased Ad Space_files/banner468x60" class="center-block fourSixtyEightImage" style="max-height: 60px; display: none !important;">
                        </a>
                    </div>
                </div>

                <!-- Pagination controllers -->
                <div class="row justify-content-center mb-5">
                    <div class="col-sm-12 text-center" style="display: flex; justify-content: center">
                        {{$blogs->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


