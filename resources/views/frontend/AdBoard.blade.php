@extends('layouts.frontendLayout')

@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('css')
    <style>
        html {
            --lh: 2.7rem;
            line-height: 2.7rem;
        }

        .post-body {
            --max-lines: 3;
            position: relative;
            max-height: calc(2.7rem * var(--max-lines));
            overflow: hidden;
            padding-right: 1rem;
        }

        .post-body::after {
            content: "...";
            position: absolute;
            inset-inline-end: 0; /* "right" */
        }

        p {
            display: inline-block;
        }

        p.txt-more-details {
            float: right;
            font-size: 18px;
        }

        .panel {
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
            box-shadow: 0 1px 1px rgba(0,0,0,0.05);
        }

        .panel-default {
            border-color: #ddd;
        }

        .panel-default>.panel-heading {
            border-color: #ddd;
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit;
            text-align: center;
        }

        .panel-body {
            padding: 15px;
            box-sizing: border-box;
        }

        .visible-sm-block {
            display: none;
        }

        .visible-sm-inline, .visible-md-inline {
            display: none;
        }

        small, .small {
            font-size: 85%;
        }

        p {
            margin: 0 0 10px;
        }

        .center-block {
            margin-left: auto;
            margin-right: auto;
        }

        .img-rounded {
            border-radius: 6px;
        }

        img {
            vertical-align: center;
        }

        .img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        img {
            width: 110px;
        }
    </style>
@endsection

@section('header-section')
    <div class="page-header satellite dashboard">
        <div class="row">
            <div class="container transition-header satellite-header dashboard-header">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="ad-word">AD BOARD</h1>
                        <div class="lead-in">post yours now!</div>
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
                <h1>
                    <span class="hidden-xs">LAS </span>Ad Board<span class="hidden-xs"> Directory</span>
                    <small class="pull-right" style="padding-top:.5em;"><strong><a href="https://www.leasedadspace.com/login/index">Post Your Free Ad Now!</a></strong></small>
                </h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="panel panel-default" style="margin-bottom:6em;">
                    <div class="panel-heading">
                        <h4 class="panel-title text-center">Ad Board Stats</h4>
                    </div>
                    <div class="panel-body">
                        <p class="visible-sm-block visible-md-block small"><strong>Posts</strong></p>
                        <p class="small"><span class="visible-sm-inline visible-md-inline">1 D<span class="hidden-sm">ay</span>:</span><span class="hidden-sm hidden-md"><strong>Todays Posts:</strong></span> <span class="pull-right">{{ $todayCount }}</span></p>
                        <p class="small">7 D<span class="hidden-sm">ay</span> <span class="hidden-sm hidden-md">Posts</span>: <span class="pull-right">{{ $weekPostsCount }}</span></p>
                        <p class="small">30 D<span class="hidden-sm">ay</span> <span class="hidden-sm hidden-md">Posts</span>: <span class="pull-right">{{ $monthPostsCount }}</span></p>
                        <p class="visible-sm-block visible-md-block small"><strong>Views</strong></p>
                        <p class="small"><span class="visible-sm-inline visible-md-inline">1 D<span class="hidden-sm">ay</span>:</span><span class="hidden-sm hidden-md"><strong>Todays Views:</strong></span> <span class="pull-right">{{ $todayViewsCount }}</span></p>
                        <p class="small">7 D<span class="hidden-sm">ay</span><span class="hidden-sm hidden-md"> Views</span>: <span class="pull-right">{{ $weekViewsCount }}</span></p>
                        <p class="small">30 D<span class="hidden-sm">ay</span><span class="hidden-sm hidden-md"> Views</span>: <span class="pull-right">{{ $monthViewsCount }}</span></p>
                    </div>
                </div>
                <div class="col-sm-12 gutter-ad-img-sm" style="margin-bottom:6em;">
                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/31" target="_blank" class="">
                        <img src="http://richardweberg.com/images/125x125.gif" class="img-responsive center-block">
                    </a>
                </div>

                <div class="col-sm-12 gutter-ad-txt" style="margin-bottom:6em;">
                    <a href="https://www.leasedadspace.com/ad/visitTextLink/3167" target="_blank" class="text-center">
                        <div class="title">Earn $3,476 With LeasedAdSpace</div>
                        <!-- #{title}-->
                        <div>Instantly Generate More Leads and</div>
                        <!-- #{line1}-->
                        <div>Sales in Less than 10 Minutes</div>
                        <!-- #{line2}-->
                        <div class="title">Get FREE Instant Access</div>
                    </a>
                </div>
                <div class="col-sm-12 gutter-ad-img-sm" style="margin-bottom:6em;">
                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/33" target="_blank" class="">
                        <img src="http://richardweberg.com/images/125x125.gif" class="img-responsive center-block">
                    </a>
                </div>
                <div class="col-sm-12 gutter-ad-txt">
                    <a href="https://www.leasedadspace.com/ad/visitTextLink/685141" target="_blank" class="text-center">
                        <div class="title">Do you suck at making money online?</div>
                        <!-- #{title}-->
                        <div>Internet marketing is stupid simple</div>
                        <!-- #{line1}-->
                        <div>When you know what you are doing</div>
                        <!-- #{line2}-->
                        <div class="title">Let us help you, click here now</div>
                    </a>
                </div>
            </div>
            <div class="col-sm-7">
                @foreach($posts as $post)

                    <div class="row">
                        <div class="col-sm-2 p-3">
                            <div>
                                <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                            </div>
                        </div>
                        <div class="col-sm-10 p-2">
                            <p>
                                <a href="https://www.leasedadspace.com/adboard/preVisit/1489490" target="_blank">
                                    {{ $post->title }}
                                </a>
                            </p>
                            <p class="text-left"></p>
                            <div class="post-body">
                                {!! $post->description !!}
                            </div>
                            <p class="txt-more-details">(<span style="color: #ff0000">More Details-></span>)</p>
                            <p></p>
                            <p></p>
                            <hr style="margin:0px">
                            <p class="small">
                                <strong>{{ $post->thing_count }} views</strong> — posted
                                <strong>
                                    <span title="9-9-2020 4:45:57 AM">3 hours</span>
                                </strong>
                                ago by
                                <a href="https://www.leasedadspace.com/members/afisher">
                                    {{ $post->first_name . ' ' . $post->last_name }}
                                </a>
                            </p>
                        </div>
                    </div>
                @endforeach
                <br>
                <div class="row mb-5">
                    <div class="col-sm-12 text-center" style="display: flex; justify-content: center">
                        {{$posts->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title text-center"><a href="https://www.leasedadspace.com/members/red-diamonds" style="color:white;"><u>Hot Content From Market Leaders</u></a></h4>
                    </div>
                    <div class="panel-body">
                        <a href="https://www.leasedadspace.com/promo/index" style="color:white;">
                            <div class="text-center stat-panel stat-panel-two">
                                <strong>Want to see your blog posts here?</strong>
                            </div>
                        </a>

                        <p class="small text-center">
                            <a href="https://www.leasedadspace.com/members/anantshakti/blog/1489483/automate-your-affiliate-income-effortlessly" target="_blank">Automate your affiliate income effortlessly...</a>
                        </p>
                        <hr style="margin:0px">
                        @foreach($lastTenPosts as $post)
                            <p class="small" style="margin-bottom:1em;">
                                <span class="visible-lg visible-xs text-left">
                                    <strong>{{ $post->count->thing_count }}</strong>
                                    views — posted
                                    {{ $post->ago }}
                                </span>
                            </p>
                            <p class="small text-center">
                                <a href="https://www.leasedadspace.com/members/ShaunPrice/blog/1488903/bitcoin-whale-transfers-641-million-of-btcs" target="_blank">{{ $post->title }}</a>
                            </p>
                        @endforeach
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title text-center"><a href="https://www.leasedadspace.com/members/leaders" style="color:white;"><u>Recent Sales &amp; Leader Boards</u></a></h4>
                    </div>
                    <div class="panel-body">
                        <a href="https://www.leasedadspace.com/members/leaders" style="color:white;"><div class="text-center stat-panel stat-panel-three"><strong>See all recent sales and leader boards here!</strong></div></a>

                        <p class="small text-center">Frank Bauer (<a href="https://www.leasedadspace.com/members/add2it">add2it</a>)
                            earned $4.84 for the sale of -  Pearl!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="9-5-2020 6:30:41 AM">4 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="9-5-2020 6:30:41 AM">4 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)
                            earned $13.10 for the sale of -  Emerald Traffic Package!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="8-31-2020 4:17:08 PM">8 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="8-31-2020 4:17:08 PM">8 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)
                            earned $8.24 for the sale of -  Amethyst Traffic Package!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="8-23-2020 6:28:07 PM">16 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="8-23-2020 6:28:07 PM">16 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Devesh Krishna (<a href="https://www.leasedadspace.com/members/DeveshKrishna">DeveshKrishna</a>)
                            earned $4.84 for the sale of -  Pearl!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="8-23-2020 2:42:11 AM">17 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="8-23-2020 2:42:11 AM">17 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)
                            earned $4.84 for the sale of -  Pearl Traffic Package!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="8-4-2020 11:17:06 PM">35 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="8-4-2020 11:17:06 PM">35 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Edward Keyte (<a href="https://www.leasedadspace.com/members/edkeyte">edkeyte</a>)
                            earned $20.35 for the sale of -  10 Day!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="7-25-2020 2:46:10 PM">45 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="7-25-2020 2:46:10 PM">45 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Darren Olander (<a href="https://www.leasedadspace.com/members/darrenolander">darrenolander</a>)
                            earned $19.64 for the sale of -  Emerald Traffic Package!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="7-19-2020 6:32:12 AM">52 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="7-19-2020 6:32:12 AM">52 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Robert Fraser (<a href="https://www.leasedadspace.com/members/robf">robf</a>)
                            earned $12.37 for the sale of -  Amethyst Traffic Package!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="7-11-2020 1:30:13 AM">60 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="7-11-2020 1:30:13 AM">60 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Bryan Stoker (<a href="https://www.leasedadspace.com/members/rbstoker">rbstoker</a>)
                            earned $12.35 for the sale of -  5 Day Para Ad!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="6-26-2020 9:25:07 PM">74 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="6-26-2020 9:25:07 PM">74 days</span></strong> ago</span>
                        </p>

                        <p class="small text-center">Joe Bulik (<a href="https://www.leasedadspace.com/members/homebizjoe">homebizjoe</a>)
                            earned $36.35 for the sale of -  20 Day Para Ad!</p>
                        <hr style="margin:0px">
                        <p class="small" style="margin-bottom:1em;">
                            <span class="visible-lg visible-xs text-right"><strong><span title="6-21-2020 11:41:16 PM">79 days</span></strong> ago</span>
                            <span class="hidden-lg hidden-xs text-right"><strong><span title="6-21-2020 11:41:16 PM">79 days</span></strong> ago</span>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
