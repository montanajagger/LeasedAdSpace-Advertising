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
                                @if (isset($leftBlogs[$key]))
                                    @if ($key % 2 == 0)
                                        <div class="gutter-ad-txt">
                                            <a href="{{ $leftBlogs[$key]->link }}" target="_blank" class="text-center keychainify-checked steem-keychain-checked">
                                                <div class="title">{{ $leftBlogs[$key]->title }}</div>
                                                <!-- #{title}-->
                                                <div>{{ $leftBlogs[$key]->line_one }}</div>
                                                <!-- #{line1}-->
                                                <div>{{ $leftBlogs[$key]->line_two }}</div>
                                                <!-- #{line2}-->
                                                <div class="title">{{ $leftBlogs[$key]->call_to_action }}</div>
                                            </a>
                                        </div>
                                    @else
                                        <div class="gutter-ad-img-sm">
                                            <a href="{{ $leftBlogs[$key]->destination_url }}" target="_blank" class="keychainify-checked steem-keychain-checked">
                                                <img src="{{ $leftBlogs[$key]->banner_url }}" class="center-block">
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="col-sm-10" style="background-color:#FCFCFC;margin-top:1em;padding-top:1em;border:1px #DEDEDE solid">
                                <h3 style="margin-top:0;">
                                    <a href="https://leasedadspace.com/adBlog/1489916/1-year-onlinemissed-leased-ad-space-launch" class="keychainify-checked steem-keychain-checked">
                                        {{ $blog->subject }}
                                    </a>
                                </h3>
                                <p style="margin:0px; font-size: 17px;" class="small">
                                    Posted on {{ date('d-m-Y', strtotime($blog->date_created)) }} at {{ date('h:i A', strtotime($blog->date_created)) }} by
                                    <a href="https://leasedadspace.com/members/maparecida" class="keychainify-checked steem-keychain-checked">
                                        {{ isset($blog->author) == true ? $blog->author->folder : '' }}
                                    </a>
                                </p>
                                <hr style="margin-top:.25em;margin-bottom:.25em;">
                                <div style="font-size: 20px;">
                                    {!! $blog->body !!}
                                </div>
                                <br>
                                <div style="font-size: 20px">
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
                                @if (isset($leftBlogs[$key]))
                                    @if ($key % 2 == 0)
                                        <div class="gutter-ad-txt">
                                            <a href="{{ $leftBlogs[$key]->link }}" target="_blank" class="text-center keychainify-checked steem-keychain-checked">
                                                <div class="title">{{ $leftBlogs[$key]->title }}</div>
                                                <!-- #{title}-->
                                                <div>{{ $leftBlogs[$key]->line_one }}</div>
                                                <!-- #{line1}-->
                                                <div>{{ $leftBlogs[$key]->line_two }}</div>
                                                <!-- #{line2}-->
                                                <div class="title">{{ $leftBlogs[$key]->call_to_action }}</div>
                                            </a>
                                        </div>
                                    @else
                                        <div class="gutter-ad-img-sm">
                                            <a href="{{ $leftBlogs[$key]->destination_url }}" target="_blank" class="keychainify-checked steem-keychain-checked">
                                                <img src="{{ $leftBlogs[$key]->banner_url }}" class="center-block">
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="col-sm-10" style="background-color:#FCFCFC;margin-top:1em;padding-top:1em;border:1px #DEDEDE solid">
                                <h3 style="margin-top:0;">
                                    <a href="https://leasedadspace.com/adBlog/1489916/1-year-onlinemissed-leased-ad-space-launch" class="keychainify-checked steem-keychain-checked">
                                        {{ $blog->subject }}
                                    </a>
                                </h3>
                                <p style="margin:0px; font-size: 17px;" class="small">
                                    Posted on {{ date('d-m-Y', strtotime($blog->date_created)) }} at {{ date('h:m', strtotime($blog->date_created)) }} AM by
                                    <a href="https://leasedadspace.com/members/maparecida" class="keychainify-checked steem-keychain-checked">
                                        {{ isset($blog->author) == true ? $blog->author->folder : '' }}
                                    </a>
                                </p>
                                <hr style="margin-top:.25em;margin-bottom:.25em;">
                                <div style="font-size: 20px;">
                                    {!! $blog->body !!}
                                </div>
                                <br>
                                <div style="font-size: 20px;">
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
                    @foreach($bottomBanners as $banner)
                        <div class="col-md-6 bottom-banner">
                            <a href="{{ $banner->destination_url }}" target="_blank">
                                <img src="{{ $banner->banner_url }}" class="center-block fourSixtyEightImage">
                            </a>
                        </div>
                    @endforeach
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
