@extends('layouts.applayout')

@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('header-section')
    <div class="page-header satellite dashboard">
        <div class="row">
            <div class="container transition-header satellite-header dashboard-header">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="ad-word">PARA ADS</h1>
                        <div class="lead-in">Focused Yet Multifaceted</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-section')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 last-page-section">
                <h1>ParaAds: <small>Focused Yet Multifaceted</small></h1>
                <hr>
                <p>In everything we do at Leased<strong>Ad</strong>Space, we take what works and super charge it.  And that's exactly
                    what we've done again with <strong>ParaAds</strong>, the awesome new product sold exclusively at Leased<strong>Ad</strong>Space.
                    Success in life is always at least partially related to <em>focus.</em>  That's what ParaAds are all about, <em>focused</em> advertising.</p>
                <p>In sports broadcasting, a parabolic microphone is used to "focus in" on a given area of the game to pick up sounds from
                    a targeted area and exclude sounds from other sources.  Similarly, a parametric speaker is used to target sound at a given
                    point, allowing people at that point to hear the sound, while others can't.  We've taken that principle, super charged it,
                    and applied it to your advertising!</p><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.1em;">5 Day Run</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-one" style="font-size:2em;"><strong>$16.97<br><span style="font-size:.5em;">A Great Value!</span></strong></div>
                                        <p class="text-center">



                                            <a href="https://www.leasedadspace.com/para/guestbuy?adType=FIVE_DAY" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Buy 5 Day Run Now!</a>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.1em;">10 Day Run</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-four" style="font-size:2em;"><strong>$27.97 <br><span style="font-size:.5em;">17% discount!</span></strong></div>
                                        <p class="text-center">
                                            <a href="https://www.leasedadspace.com/para/guestbuy?adType=TEN_DAY" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Buy 10 Day Run Now!</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.1em;">20 Day Run</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-three" style="font-size:2em;"><strong>$49.97 <br><span style="font-size:.5em;">26% discount!</span></strong></div>
                                        <p class="text-center">
                                            <a href="https://www.leasedadspace.com/para/guestbuy?adType=TWENTY_DAY" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Buy 20 Day Run Now!</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div id="homereg" class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.04em;">Monthly Sub<span class="hidden-sm">scription!</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-two" style="font-size:2em;"><strong>$67.00 <br><span style="font-size:.5em;">34% discount!</span></strong></div>
                                        <p class="text-center">
                                          <button class="btn btn-md btn-block btn-danger">SOLD OUT!</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>What are ParaAds?</h2>
                                <p>ParaAds take your ads, focus them like a laser beam, and point them straight at members logging in to Leased<strong>Ad</strong>Space,
                                    giving you great targeted results in a clean and unobtrusive interface.  We also take traffic sources that we collect from all across
                                    the internet, focus them tightly and aim them directly at a public rotator page that cycles those same login ads, but shows them to the general public.
                                    Additionally, if you're also an LAS affiliate, every time your offer is shown in the rotator an "Advertise Here" link is shown in the header that links to your LAS affiliate ID!
                                    You LITERALLY can grow your LAS downline <em>while advertising your other offers!</em></p>
                                <h2>Login Ads</h2>
                                <div class="pull-right" style="margin-left:1em;"><a href="https://www.leasedadspace.com/assets/paraads%20copy-88927168725bc2ad7010a7313f72d6a8.png" target="_blank"><img src="{{asset('assets/paraads-deadfa426c1ba5d9af748d21929c5a0f.png')}}"></a></div>
                                <p>Our login ads are clean, elegant and shown to all members of Leased<strong>Ad</strong>Space each time they login.  The ParaAd pool is carefully
                                    and automatically managed to ensure fair and valuable distribution of login ad impressions and ensure that we maintain a high level of value for
                                    our subscribers!  <strong>Click the image for a closeup!</strong></p>
                                <p>There is a cap on the number of slots that are available at any given time, and the system auto balances
                                    to ensure maximum effectiveness for customers.  This balancing algorithm is proprietary, and to our knowledge, is the only self balancing system of it's kind
                                    on the market today.  It's designed to manage ad inventory load in a way that promotes steady long term growth of the product, as well as to
                                    ensure growth in terms of impressions granted to ParaAd users. </p>
                                <p class="alert alert-info"><strong>IMPORTANT!: </strong>during our early launch period and until we reach our target subscriber load, ad impressions will be heavily weighted
                                    towards early adopters!  Sign up now and benefit from heavier early exposure!</p>
                                <h2>Login Ads in Public Rotator</h2>
                                <p>Why should we limit your ParaAds to only be seen by members logging in?  We don't think we should, so we don't!</p>
                                <p>We have a network of top tier traffic sources that we've collected over many years, and that we use personally to spread the word about Leased<strong>Ad</strong>Space and other
                                    products and services.  Now we're going to put that traffic network to work <em>for you!</em>  We put all our active ParaAds in to a rotator and aim our quality traffic sources at that page.  This
                                    ensures that you're not only getting a steady diet of LAS members seeing your ads, but also a steady stream of external customers looking at your offers!</p>
                                <h2>Public Rotator Ad Hits Help Build LAS Downline</h2>
                                <div class="pull-right" style="margin-left:1em;"><a href="https://www.leasedadspace.com/assets/paraoffer%20copy-602b2ced9b9d961f3c4a180d4a235f62.png" target="_blank"><img src="{{asset('assets/paraoffer-e82248b5a42bce20ed4146eb22d0d3e9.png')}}"></a></div>
                                <p>We don't stop at driving traffic to your offers, though.  Oh no!  Every time your ad pops up in the rotator you get views to your other offers, but you
                                    also get an opportunity to grow your LAS downline!</p>
                                <p><strong>Click the image for a close up</strong> of the ParaAds rotator interface.  See that link that says "Advertise Here" in the header?  If you're an active affiliate with us, then that link is <em>is tied to your
                                        Leased<strong>Ad</strong>Space affiliate ID!</em>  That means you not only get eyeballs on your offers, but you can also get LAS referrals to help build your
                                    downline for you and your team!</p>
                                <h2>Split Testing</h2>
                                <p>Each ParaAd you purchase can optionally be configured with one, or two links you would like to advertise.  Impressions served are split across both
                                    links if you choose to configure two different links, and impressions served are tracked separately for each link you set up!  This allows you a
                                    <em>fantastic</em> opportunity to split test two ads for the same program to see which one performs better for you!  If you're interested in this option, just
                                    enable "split testing" when you set up your ad!</p>
                                <h2>One on One Guidance and Support for Monthly Subscribers!</h2>
                                <p>Every monthly ParaAds subscriber is entitled to personal one on one coaching from the owners of Leased<strong>Ad</strong>Space on how to get better results.
                                    Additionally, we personally review monthly subscribers ParaAds for effectiveness to ensure that they are delivering the highest conversion rate possible!</p>
                            </div>
                        </div>
                        <h2 class="text-center">What Are You Waiting For?  Get Started Now!</h2>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.1em;">5 Day Run</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-one" style="font-size:2em;"><strong>$16.97<br><span style="font-size:.5em;">A Great Value!</span></strong></div>
                                        <p class="text-center">
                                            <a href="https://www.leasedadspace.com/para/guestbuy?adType=FIVE_DAY" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Buy 5 Day Run Now!</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.1em;">10 Day Run</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-four" style="font-size:2em;"><strong>$27.97 <br><span style="font-size:.5em;">17% discount!</span></strong></div>
                                        <p class="text-center">
                                          <a href="https://www.leasedadspace.com/para/guestbuy?adType=TEN_DAY" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Buy 10 Day Run Now!</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.1em;">20 Day Run</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-three" style="font-size:2em;"><strong>$49.97 <br><span style="font-size:.5em;">26% discount!</span></strong></div>
                                        <p class="text-center">
                                          <a href="https://www.leasedadspace.com/para/guestbuy?adType=TWENTY_DAY" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Buy 20 Day Run Now!</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div id="homereg" class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;font-size:1.04em;">Monthly Sub<span class="hidden-sm">scription!</span></h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-two" style="font-size:2em;"><strong>$67.00 <br><span style="font-size:.5em;">34% discount!</span></strong></div>
                                        <p class="text-center">
                                          <button class="btn btn-md btn-block btn-danger">SOLD OUT!</button>
                                        </p>
                                    </div>
                                </div>
                            </div>

    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
