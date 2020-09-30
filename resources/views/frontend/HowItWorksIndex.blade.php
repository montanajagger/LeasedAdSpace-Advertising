@extends('layouts.applayout')

@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('header-section')
    <div class="page-header index">
        <div class="transition-header index-header animated-header">
            <div>
                <div class="col-xs-12">
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
    <div class="container" style="padding-bottom: 30px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>How it Works</h1>
                        <hr>
                        <p>Leased Ad Space is the most unique opportunity online. We give you the best marketing platform to sell whatever products or services you like.  And with our affiliate program, you can <em>make money from Leased<strong>Ad</strong>Space, while also making money from your other offers!</em></p>
                        <p>Every single business or person that is trying to make money online needs traffic, without it, we're all dead in the water! We provide you with a traffic platform, and if you choose, also give you the platform to sell it!</p>
                        <p>To learn more about what we offer, choose one of the following options:</p>
                        <div class="row">
                            <hr>
                            <div class="col-sm-6">
                                <a href="{{env('APP_URL'). '/howitworks_advertisers'}}" style="text-decoration:none;"><button type="button" class="btn btn-lg btn-block btn-success">Tell Me More About How Advertising Works</button></a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{env('APP_URL'). '/howitworks_affiliate'}}" style="text-decoration:none;"><button type="button" class="btn btn-lg btn-block btn-success">Tell Me More About How The Affiliate Program Works</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
