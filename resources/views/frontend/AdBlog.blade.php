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
                @foreach($blogs as $blog)
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="gutter-ad-txt">
                                <a href="https://www.leasedadspace.com/ad/visitTextLink/42312" target="_blank" class="text-center">
                                    <div class="title">Expert Secrets</div>
                                    <!-- #{title}-->
                                    <div>Free Book On</div>
                                    <!-- #{line1}-->
                                    <div>Creating Mass Movement</div>
                                    <!-- #{line2}-->
                                    <div class="title">Get Your Free Copy Now</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-10" style="background-color:#FCFCFC;margin-top:1em;padding-top:1em;border:1px #DEDEDE solid">
                            <h3 style="margin-top:0;">
                                <a href="https://www.leasedadspace.com/adBlog/{{ $blog->id  }}/{{ $blog->title }}">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            {!! $blog->body !!}
                        </div>
                    </div>
                @endforeach
                <!-- images on bottom of blogs -->
                <div class="row">
                    <div class="col-md-6 bottom-banner">
                        <a href="https://www.leasedadspace.com/ad/visitBannerLink/13038" target="_blank">
                            <img src="./Ad Blog - Leased Ad Space_files/24717.jpg" class="img-responsive  center-block fourSixtyEightImage" style="display: none !important;">
                        </a>
                    </div>
                    <div class="col-md-6 bottom-banner">
                        <a href="https://www.leasedadspace.com/ad/visitBannerLink/189030" target="_blank" class="">
                            <img src="./Ad Blog - Leased Ad Space_files/banner468x60" class="img-responsive center-block fourSixtyEightImage" style="max-height: 60px; display: none !important;">
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


