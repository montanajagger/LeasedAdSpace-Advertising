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
    <div class="row page-section unified section-lead">
        <div class="container">
            <div id="summary-lead" class="row">
                <div class="col-sm-12">
                    <p class="lead">Get Traffic, Build Your Business and <br class="hidden-lg"><em>GET PAID!</em></p>
                    <p class="text-center">LeasedAdSpace is <em>the only</em> unique one-stop-shop viral marketing platform on the market today.
                        We pack more value in to our <em>free offferings</em> than the other guys do in their <em>paid platforms!</em>  <strong>NOBODY</strong>
                        can touch us in terms of the value in the services we deliver or the quality of the traffic and visitors we send you!</p>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="margin-bottom:0px;font-size:1.1em;">Get Traffic!</h4>
                                </div>
                                <div class="panel-body">
                                    <p>We have the goods:</p>
                                    <ul>
                                        <li>Small Text Ads</li>
                                        <li>Banner Ads</li>
                                        <li>Solo Email Blasts</li>
                                        <li>Ad Board Classifieds <span class="visible-sm"> Ads</span></li>
                                    </ul>
                                    <p class="text-left">All this and more will get eyeballs on your offers.  <em>Period.</em>
                                        Every service we offer is custom tailored for long term residual benefit.</p>
                                    <!--<p class="text-center"><a href="/ad/index">Click Here To Learn More About This!</a></p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="margin-bottom:0px;font-size:1.1em;"><span class="visible-sm visible-md">Biz Tools</span><span class="hidden-sm hidden-md">Build Your Business!</span></h4>
                                </div>
                                <div class="panel-body">
                                    <p class="text-left">Tools to succeed:</p>
                                    <ul>
                                        <li>Free web presence</li>
                                        <li>Free personal blog</li>
                                        <li>Customizable Profile</li>
                                        <li>And More!</li>
                                    </ul>
                                    <p class="text-left">Network and social tools along with high profile exposure of our paid customers make purchasing traffic from us a real no brainer!</p>
                                    <!--<p class="text-center"><a href="/ad/index">Click Here To Learn More About This!</a></p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="margin-bottom:0px;font-size:1.1em;">Make Money!</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="text-left">Proven System:</p>
                                    <ul>
                                        <li>Low startup costs</li>
                                        <li>Long Term Benefits</li>
                                        <li>Up to 75% Commissions!</li>
                                        <li>Zero Complexity!</li>
                                    </ul>
                                    <p class="text-left">Resell <span class="hidden-sm">traffic </span>packages directly to your customers!  Up to 75% commissions on all the sales to customers that you've referred! *</p>
                                    <!--<p class="text-center"><a href="/ad/index">Click Here To Learn More About This!</a></p>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="homereg" class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title" style="margin-bottom:0px;font-size:1.04em;">Get Traffic &amp; Make Money!</h4>
                                </div>
                                <div class="panel-body">
                                    <p class="text-center"><em>DON'T DELAY!</em></p>
                                    <p>
                                    </p><form action="https://www.leasedadspace.com/register/index" method="post" class="">
                                        <div class="form-group">
                                            <label for="firstName" class="control-label">First Name</label>
                                            <input type="null" class="form-control" name="firstName" placeholder="First Name" value="" id="firstName">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastName" class="control-label">Last Name</label>
                                            <input type="null" class="form-control" name="lastName" placeholder="Last Name" value="" id="lastName">
                                        </div>
                                        <div class="form-group ">
                                            <label for="email" class="control-label">Email</label>


                                            <input type="null" class="form-control" name="email" placeholder="Email Address" data-placement="left" data-toggle="popover" data-trigger="focus" data-html="true" title="&lt;strong&gt;Email Provider Reliability - Use GMail!&lt;/strong&gt;" data-content="We &lt;strong&gt;strongly encourage&lt;/strong&gt; the use of a gmail address. Other providers have unreliable delivery rates!  If you do not receive your confirmation email, this is likely why!" value="" id="email">
                                        </div>
                                        <div class="modal-footer">
                                            <span class="hidden-sm"><input type="submit" name="_action_shortForm" value="Get Started Now!" class="btn btn-block btn-success"></span>
                                            <span class="visible-sm"><input type="submit" name="_action_shortForm" value="Start Now!" class="btn btn-block btn-success"></span>
                                        </div>
                                        <span class="visible-sm visible-md"><br><br><br><span class="visible-sm"><br><br><br><br><br><br><br><br></span></span>
                                        <p></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9">
                            <p class="text-center">Instantly reach <strong>more visitors online</strong>, and dramatically <strong>increase your daily website traffic</strong> using our <strong>advanced viral traffic system</strong>. The Leased Ad Space platform delivers traffic, every single person or business trying to make money online needs website traffic, without traffic your business is dead in the water!</p>
                            <p class="text-center">No tricks. No gimmicks. Don’t waste your precious time bidding on keywords or hunting down traffic sites that only deliver junk traffic. Our system is simple, fast, and effective. For one flat rate, your ads are delivered to high quality visitors on thousands of pages all across the internet.</p>
                        </div>
                        <div class="col-sm-3">
                            <a href="https://www.leasedadspace.com/ad/visitBannerLink/659152" target="_blank" class="">
                                <img src="https://easy1up.com/images/banners/125by125.png" class="img-responsive centered-responsive-image oneTwentyFiveImage">
                            </a>
                            <br>
                            <a href="https://www.leasedadspace.com/ad/visitTextLink/1176005" target="_blank" class="xyz-text-panel text-center">
                                <div class="title">✅My #1 Best Traffic Source</div>
                                <!-- #{title}-->
                                <div>Unlimited Clicks</div>
                                <!-- #{line1}-->
                                <div>24/7</div>
                                <!-- #{line2}-->
                                <div class="title">Click Here For Real Traffic</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row page-section xyz-row undefined">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="https://www.leasedadspace.com/ad/visitBannerLink/812387" target="_blank" class="xyz-spot-wrapper wide-wrapper">
                                <img src="http://thumbs.gfycat.com/DevotedMellowAcornbarnacle-size_restricted.gif" class="img-responsive centered-responsive-image fourSixtyEightImage">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="https://www.leasedadspace.com/ad/visitBannerLink/881665" target="_blank" class="xyz-spot-wrapper wide-wrapper">
                                <img src="http://thumbs.gfycat.com/DevotedMellowAcornbarnacle-size_restricted.gif" class="img-responsive centered-responsive-image fourSixtyEightImage">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row page-section xyz-row undefined">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Affiliate Leaders and Red Diamond Elites™</h2>
                    <p>Our affiliate leaders are the lifeblood of Leased<strong>Ad</strong>Space and they help build the backbone of our thriving community!  Check out more about our affiliate leaders on our <a href="https://www.leasedadspace.com/members/leaders">Affiliate Leader Boards Page</a>,
                        and find out about our Red Diamond members and <a href="https://www.leasedadspace.com/members/red-diamonds">Red Diamond Elite on their dedicated highlight page!</a></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 style="margin-bottom:0em;">Recent Commissions <small>(<a href="https://www.leasedadspace.com/members/leaders">more...</a>)</small></h3>
                                    <hr style="margin-top:.25em;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>We've paid out $283,057.17 in  commissions since we launched in the spring of 2016!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Frank Bauer (<a href="https://www.leasedadspace.com/members/add2it">add2it</a>)
                                                earned a <strong>$4.84</strong> commission on a sale <strong><span title="9-5-2020 6:30:41 AM">3 days</span> ago!</strong></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)
                                                earned a <strong>$13.10</strong> commission on a sale <strong><span title="8-31-2020 4:17:08 PM">8 days</span> ago!</strong></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)
                                                earned a <strong>$8.24</strong> commission on a sale <strong><span title="8-23-2020 6:28:07 PM">16 days</span> ago!</strong></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Devesh Krishna (<a href="https://www.leasedadspace.com/members/DeveshKrishna">DeveshKrishna</a>)
                                                earned a <strong>$4.84</strong> commission on a sale <strong><span title="8-23-2020 2:42:11 AM">17 days</span> ago!</strong></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)
                                                earned a <strong>$4.84</strong> commission on a sale <strong><span title="8-4-2020 11:17:06 PM">35 days</span> ago!</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="margin-bottom:2em;">
                                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/58405" target="_blank" class="">
                                        <img src="http://tmntextads.com/images/468g.jpg" class="img-responsive centered-responsive-image fourSixtyEightImage">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 style="margin-bottom:0em;">Top Referrers Past 7 Days <small>(<a href="https://www.leasedadspace.com/members/leaders">more top referrers...</a>)</small></h3>
                                    <hr style="margin-top:.25em;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p>Our customer database is currently at 45,997 and growing strong!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Nandkishore Deopersad (<a href="https://www.leasedadspace.com/members/millionaire1">millionaire1</a>) has
                                                <strong>3</strong> referrals in the past 7 days!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Joyce Parker Hyde (<a href="https://www.leasedadspace.com/members/Cash2flow">Cash2flow</a>) has
                                                <strong>1</strong> referrals in the past 7 days!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Maria Kalomvosaki (<a href="https://www.leasedadspace.com/members/ezybiz">ezybiz</a>) has
                                                <strong>1</strong> referrals in the past 7 days!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Stephen Adams (<a href="https://www.leasedadspace.com/members/solasola">solasola</a>) has
                                                <strong>1</strong> referrals in the past 7 days!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">

                                            <img src="{{asset('assets/placeholder.jpg')}}" class="img-rounded img-responsive center-block" alt="avatar" style="vertical-align:middle;max-height:85px;margin-bottom:.5em;">

                                        </div>
                                        <div class="col-sm-10">
                                            <p class="well">Frank Bauer (<a href="https://www.leasedadspace.com/members/add2it">add2it</a>) has
                                                <strong>1</strong> referrals in the past 7 days!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 style="margin-bottom:0em;">Red Diamond Elites™ <small>(<a href="https://www.leasedadspace.com/members/red-diamonds">more about RDE...</a>)</small></h3>
                            <hr style="margin-top:.25em;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>We have 290 members who are dedicated to success and have upgraded to Red Diamond status! In return they receive
                                        prominent placement on our site and dedicated traffic streams that we funnel straight to their pages!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="well alert-danger" style="background:#F2DEDE;border-color:#e4bac0;">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pull-left" style="margin-right:.75em;">
                                                    <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                                                </div>
                                                <p class="small pull-right" style="padding-top:3px;margin-top:0em;margin-bottom:0em;margin-left:.75em;"><a style="color:#F21329;" tabindex="0" data-html="true" class="alert-danger" role="button" data-toggle="popover" data-trigger="focus" title="RDE (Red Diamond Elite) Score" data-placement="left" data-content="&lt;p class=&#39;text-left&#39;&gt;The RDE (Red Diamond Elite™) Score is a proprietary ranking system that we use to rank Red Diamond activity levels. It includes
                                                    such things as number of logins, number of blog posts, number of hits to your referrer ID, and many other factors.  The score is based on the past 7 days of activity and
                                                    is used to identify the top 10 Red Diamonds for inclusion in the Red Diamond Elite™ group!&lt;/p&gt;">RDE Score: 850</a></p>
                                                <p class="text-left" style="margin-top:0em;margin-bottom:0em;"><strong>Shaun Price</strong> (<a href="https://www.leasedadspace.com/members/ShaunPrice">ShaunPrice</a>)</p>
                                                <hr style="margin-top:0em;margin-bottom:.5em;background-color:#e4bac0;height:1px;">
                                                <p>Hi Shaun  here.
                                                    I'm an entrepreneur and educator in the Bitcoin space.
                                                    I'm involved in several business opportunities that can earn Bitcoin for me on a daily basis.
                                                    I'm a firm believer that Bitcoin is the future of money and I'm convinced that we will eventually see Bitcoin hit $100k or more.
                                                    So...</p>
                                            </div>
                                        </div>
                                        <div class="row" style="">
                                            <div class="col-sm-12">
                                                <p class="small pull-right" style="padding-top:3px;margin-top:0em;margin-bottom:0em;margin-left:.75em;"><a href="https://www.leasedadspace.com/members/ShaunPrice/blog">All posts from Shaun Price</a></p>
                                                <p style="margin-bottom:0em;"><strong>Most Recent Blog Post</strong></p>
                                                <hr style="background-color:#e4bac0;height:1px;margin-top:0px;margin-bottom:.5em;">
                                            </div>
                                            <div style="padding:.75em;">
                                                <div class="col-sm-12" style="padding:.5em;background-color:#FCFCFC;border:1px #e4bac0 solid">
                                                    <p style="margin:0em;margin-left:.75em;" class="small pull-right"><span class="">Published <span title="9-7-2020 5:09:50 PM">1 day</span> ago</span></p>
                                                    <p style="margin:0em;"><a href="https://www.leasedadspace.com/members/ShaunPrice/blog/1488903/bitcoin-whale-transfers-641-million-of-btcs">BITCOIN WHALE TRANSFERS $641 MILLION OF BTCS</a></p>
                                                    <hr style="margin:0em 0em .25em 0em;background-color:#e4bac0;">
                                                    <small><p><a href="https://www.facebook.com/groups/coinbitpros" target="_blank"></a>... (<a href="https://www.leasedadspace.com/members/ShaunPrice/blog/1488903/bitcoin-whale-transfers-641-million-of-btcs">continue reading →</a>)</p></small>
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="">
                                                <p style="margin-top:.5em;margin-bottom:0em;"><strong>Most Recent Solo Ad</strong></p>
                                                <hr style="background-color:#e4bac0;height:1px;margin-top:0px;margin-bottom:.5em;">
                                            </div>
                                            <div style="padding:.75em;">
                                                <div class="col-sm-12" style="padding:.5em;background-color:#FCFCFC;border:1px #e4bac0 solid">
                                                    <p style="margin:0em;margin-left:.75em;" class="small pull-right"><span class="">Sent <span title="9-7-2020 7:13:47 PM">1 day</span> ago</span></p>
                                                    <p style="margin:0em;"><a href="https://www.leasedadspace.com/adBlog/1488923/learn-how-to-earn-and-trade-bitcoin-safely">LEARN HOW TO EARN AND TRADE BITCOIN SAFELY</a></p>
                                                    <hr style="margin:0em 0em .25em 0em;background-color:#e4bac0;">
                                                    <small><p>LEARN HOW TO EARN AND TRADE BITCOIN SAFELY</p>
                                                        <p><br></p>
                                                        <p>Let's face... (<a href="https://www.leasedadspace.com/adBlog/1488923/learn-how-to-earn-and-trade-bitcoin-safely">continue reading →</a>)</p>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="margin-bottom:1em;">
                                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/13027" target="_blank" class="">
                                        <img src="http://1goldmine.com/ban1.gif" class="img-responsive centered-responsive-image fourSixtyEightImage" >
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <div class="well alert-danger" style="background:#F2DEDE;border-color:#e4bac0;">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pull-left" style="margin-right:.75em;">
                                                    <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                                                </div>
                                                <p class="small pull-right" style="padding-top:3px;margin-top:0em;margin-bottom:0em;margin-left:.75em;"><a style="color:#F21329;" tabindex="0" data-html="true" class="alert-danger" role="button" data-toggle="popover" data-trigger="focus" title="RDE (Red Diamond Elite) Score" data-placement="left" data-content="&lt;p class=&#39;text-left&#39;&gt;The RDE (Red Diamond Elite™) Score is a proprietary ranking system that we use to rank Red Diamond activity levels. It includes
                                                    such things as number of logins, number of blog posts, number of hits to your referrer ID, and many other factors.  The score is based on the past 7 days of activity and
                                                    is used to identify the top 10 Red Diamonds for inclusion in the Red Diamond Elite™ group!&lt;/p&gt;">RDE Score: 750</a></p>
                                                <p class="text-left" style="margin-top:0em;margin-bottom:0em;"><strong>Bryan Alton</strong> (<a href="https://www.leasedadspace.com/members/quickprofits">quickprofits</a>)</p>
                                                <hr style="margin-top:0em;margin-bottom:.5em;background-color:#e4bac0;height:1px;">
                                                <p>When it comes to sales, there’s a saying about
                                                    the importance of being a ‘product of the product’.
                                                    In its simplest form, it means practice what you preach.

                                                    It means if you’re selling a product that claims to
                                                    make someone fitter, physically and financially, first

                                                    be able to demonstrate that ...
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="">
                                            <div class="col-sm-12">
                                                <p class="small pull-right" style="padding-top:3px;margin-top:0em;margin-bottom:0em;margin-left:.75em;"><a href="https://www.leasedadspace.com/members/quickprofits/blog">All posts from Bryan Alton</a></p>
                                                <p style="margin-bottom:0em;"><strong>Most Recent Blog Post</strong></p>
                                                <hr style="background-color:#e4bac0;height:1px;margin-top:0px;margin-bottom:.5em;">
                                            </div>
                                            <div style="padding:.75em;">
                                                <div class="col-sm-12" style="padding:.5em;background-color:#FCFCFC;border:1px #e4bac0 solid">
                                                    <p style="margin:0em;margin-left:.75em;" class="small pull-right"><span class="">Published <span title="9-5-2020 4:29:09 PM">3 days</span> ago</span></p>
                                                    <p style="margin:0em;"><a href="https://www.leasedadspace.com/members/quickprofits/blog/1488144/2000-per-day-without-speaking-to-anyone">$2,000 Per Day WITHOUT speaking to ANYONE</a></p>
                                                    <hr style="margin:0em 0em .25em 0em;background-color:#e4bac0;">
                                                    <small><p>Because my good friend David does ALL the work</p>
                                                        <p>and WE collect the... (<a href="https://www.leasedadspace.com/members/quickprofits/blog/1488144/2000-per-day-without-speaking-to-anyone">continue reading →</a>)</p></small>
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="">
                                                <p style="margin-top:.5em;margin-bottom:0em;"><strong>Most Recent Solo Ad</strong></p>
                                                <hr style="background-color:#e4bac0;height:1px;margin-top:0px;margin-bottom:.5em;">
                                            </div>
                                            <div style="padding:.75em;">
                                                <div class="col-sm-12" style="padding:.5em;background-color:#FCFCFC;border:1px #e4bac0 solid">
                                                    <p style="margin:0em;margin-left:.75em;" class="small pull-right"><span class="">Sent <span title="9-3-2020 7:11:44 PM">5 days</span> ago</span></p>
                                                    <p style="margin:0em;"><a href="https://www.leasedadspace.com/adBlog/1487419/re-friend-2000-a-day-for-beginners">RE: Friend $2,000 a day for beginners!?</a></p>
                                                    <hr style="margin:0em 0em .25em 0em;background-color:#e4bac0;">
                                                    <small>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>YES! Absolutely No skills needed!</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row page-section xyz-row undefined">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-sm-4">
                                <a href="https://www.leasedadspace.com/ad/visitBannerLink/18008" target="_blank" class="xyz-spot-wrapper wide-wrapper">
                                    <img src="http://products.tanyaaliza.com/wp-content/uploads/2016/08/TheHomeBusinessSurvivalGuide.jpg" class="img-responsive centered-responsive-image oneTwentyFiveImage">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="https://www.leasedadspace.com/ad/visitBannerLink/67573" target="_blank" class="xyz-spot-wrapper wide-wrapper">
                                    <img src="http://products.tanyaaliza.com/wp-content/uploads/2016/08/TheHomeBusinessSurvivalGuide.jpg" class="img-responsive centered-responsive-image oneTwentyFiveImage">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="https://www.leasedadspace.com/ad/visitBannerLink/1441446" target="_blank" class="xyz-spot-wrapper wide-wrapper">
                                    <img src="http://products.tanyaaliza.com/wp-content/uploads/2016/08/TheHomeBusinessSurvivalGuide.jpg" class="img-responsive centered-responsive-image oneTwentyFiveImage">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row page-section xyz-row undefined">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>
                        AdBoards
                    </h2>
                    <div class="col-xs-12">
                        <p>Our AdBoards are our newest killer feature and they're <em>blowing up</em> in the first few weeks of use. They're a unique hybrid between a classified ad
                            and a more traditional link posting system that is getting <em>awesome</em> results for our members!  Check out the
                            <a href="https://www.leasedadspace.com/adboard/index">Main AdBoard Page on LAS right here!</a></p>
                        <p>AdBoards are free to use for all members, with a modest click requirement for posting.  New members are given credits to start and
                            members owning at least one Ad Pack are given <strong>a number of free posts <em>per day</em> indicated in their Ad Pack benefits!</strong></p>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center">Ad Board Stats</h4>
                                    </div>
                                    <div class="panel-body">
                                        <p class="visible-sm-block visible-md-block small"><strong>Posts</strong></p>
                                        <p class="small"><span class="visible-sm-inline visible-md-inline">1 D<span class="hidden-sm">ay</span>:</span><span class="hidden-sm hidden-md"><strong>Todays Posts:</strong></span> <span class="pull-right">43</span></p>
                                        <p class="small">7 D<span class="hidden-sm">ay</span> <span class="hidden-sm hidden-md">Posts</span>: <span class="pull-right">265</span></p>
                                        <p class="small">30 D<span class="hidden-sm">ay</span> <span class="hidden-sm hidden-md">Posts</span>: <span class="pull-right">1111</span></p>
                                        <p class="visible-sm-block visible-md-block small"><strong>Views</strong></p>
                                        <p class="small"><span class="visible-sm-inline visible-md-inline">1 D<span class="hidden-sm">ay</span>:</span><span class="hidden-sm hidden-md"><strong>Todays Views:</strong></span> <span class="pull-right">4005</span></p>
                                        <p class="small">7 D<span class="hidden-sm">ay</span><span class="hidden-sm hidden-md"> Views</span>: <span class="pull-right">35918</span></p>
                                        <p class="small">30 D<span class="hidden-sm">ay</span><span class="hidden-sm hidden-md"> Views</span>: <span class="pull-right">103202</span></p>
                                    </div>
                                </div>
                            </div><br><br><br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/421" target="_blank" class="">
                                        <img src="http://richardweberg.com/images/125x125.gif" class="img-responsive centered-responsive-image oneTwentyFiveImage">
                                    </a>
                                </div>
                            </div><br><br><br><br>
                            <div class="row" style="margin-top:2em;">
                                <div class="col-xs-12">
                                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/13044" target="_blank" class="">
                                        <img src="http://richardweberg.com/images/125x125.gif" class="img-responsive centered-responsive-image oneTwentyFiveImage">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-7" style="padding-left:2em;padding-right:2em;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p><a href="https://www.leasedadspace.com/adboard/preVisit/1489490" target="_blank">Free Wholesale Buyers Club Invitation | Make Easy Passive Income For L...</a></p>
                                            <p class="text-left"></p><p>Free Wholesale Buyers Club Invitation Join Our Exclusive Private Wholesale Buyers Club Today for FREE! Learn... (<a href="https://www.leasedadspace.com/" tabindex="0" data-html="true" data-toggle="modal" data-target="#moreContainer1489490">more details →</a>)</p><p></p>
                                            <hr style="margin:0px">
                                            <p class="small"><strong>0 views</strong> — posted <strong><span title="9-9-2020 4:45:57 AM">1 hour</span></strong> ago by <a href="https://www.leasedadspace.com/members/afisher">afisher</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p><a href="https://www.leasedadspace.com/adboard/preVisit/1489488" target="_blank">*** Life Got You Financially Stressed? ***</a></p>
                                            <p class="text-left"></p><p>It's time to "Fire Your Boss" and take control of your Financial Freedom. *** Join An Absolutely Remarkable Money Making Program! ***... (<a href="https://www.leasedadspace.com/" tabindex="0" data-html="true" data-toggle="modal" data-target="#moreContainer1489488">more details →</a>)</p><p></p>
                                            <hr style="margin:0px">
                                            <p class="small"><strong>1 views</strong> — posted <strong><span title="9-9-2020 4:37:09 AM">1 hour</span></strong> ago by <a href="https://www.leasedadspace.com/members/afisher">afisher</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p><a href="https://www.leasedadspace.com/adboard/preVisit/1489484" target="_blank">Professional Residential Lockout Services by Locksmith Seattle</a></p>
                                            <p class="text-left"></p><p>We are 24 Hour Locksmith Seattle organization whi... (<a href="https://www.leasedadspace.com/" tabindex="0" data-html="true" data-toggle="modal" data-target="#moreContainer1489484">more details →</a>)</p><p></p>
                                            <hr style="margin:0px">
                                            <p class="small"><strong>1 views</strong> — posted <strong><span title="9-9-2020 4:29:36 AM">1 hour</span></strong> ago by <a href="https://www.leasedadspace.com/members/locksmithsecurity">locksmithsecurity</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p><a href="https://www.leasedadspace.com/adboard/preVisit/1489482" target="_blank">Automate your affiliate income effortlessly...</a></p>
                                            <p class="text-left"></p><p>It is a groundbreaker... Three Professional Internet marketers revea... (<a href="https://www.leasedadspace.com/" tabindex="0" data-html="true" data-toggle="modal" data-target="#moreContainer1489482">more details →</a>)</p><p></p>
                                            <hr style="margin:0px">
                                            <p class="small"><strong>2 views</strong> — posted <strong><span title="9-9-2020 4:27:44 AM">2 hours</span></strong> ago by <a href="https://www.leasedadspace.com/members/anantshakti">anantshakti</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div>
                                                <img src="{{asset('assets/placeholder.jpg')}}" width="110px" class="img-rounded img-responsive center-block" alt="avatar">
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p><a href="https://www.leasedadspace.com/adboard/preVisit/1489476" target="_blank">Open if you make UNDER $300/day online…</a></p>
                                            <p class="text-left"></p><p>&gt;&gt;&gt; Make FAST Money From Home &gt;&gt;&gt;&gt;... (<a href="https://www.leasedadspace.com/" tabindex="0" data-html="true" data-toggle="modal" data-target="#moreContainer1489476">more details →</a>)</p><p></p>
                                            <hr style="margin:0px">
                                            <p class="small"><strong>2 views</strong> — posted <strong><span title="9-9-2020 4:06:49 AM">2 hours</span></strong> ago by <a href="https://www.leasedadspace.com/members/sophia777">sophia777</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p class="text-center">
                                <a href="https://www.leasedadspace.com/adboard/index"><strong>...Check out more hot AdBoard content here!...</strong></a>
                                <br><br>
                            </p>
                        </div>

                        <div class="col-sm-3">
                            <div class="row">
                                <div class="well">
                                    <a href="https://www.leasedadspace.com/login/index" class="text-center">
                                        <p class="text-center">Want To See Your Ad Here On The Leased<strong>Ad</strong>Space AdBoards?</p>
                                        <p class="text-center">What Are you Waiting For?</p>
                                        <p class="text-center"><strong><u>Get Started For Free Now!</u></strong></p>
                                    </a>
                                </div>
                            </div>
                            <br><br><br><br>
                            <div class="row">
                                <a href="https://www.leasedadspace.com/ad/visitTextLink/98776" target="_blank" class="xyz-text-panel text-center">
                                    <div class="title">6-Figure Side-Income Online</div>
                                    <!-- #{title}-->
                                    <div>Free Training Series Reveals</div>
                                    <!-- #{line1}-->
                                    <div>Everything Step-by-Step</div>
                                    <!-- #{line2}-->
                                    <div class="title">Get Access To My Free Training</div>
                                </a>
                            </div>
                            <br><br><br><br>
                            <div class="row">
                                <a href="https://www.leasedadspace.com/ad/visitTextLink/348092" target="_blank" class="xyz-text-panel text-center">
                                    <div class="title">Autopilot Income System</div>
                                    <!-- #{title}-->
                                    <div>Leads And Commissions Unleashed.</div>
                                    <!-- #{line1}-->
                                    <div>Get Instant Access Now!</div>
                                    <!-- #{line2}-->
                                    <div class="title">Watch Video Now!</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/75771" target="_blank" class="">
                                        <img src="http://www.morningsolutions.com/wp-content/uploads/2014/11/imguru.png" class="img-responsive centered-responsive-image fourSixtyEightImage">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/29713" target="_blank" class="">
                                        <img src="http://www.globalteamalliance.co.network/GoFounders.jpg" class="img-responsive centered-responsive-image fourSixtyEightImage">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row page-section xyz-row undefined">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://www.leasedadspace.com/ad/visitTextLink/1459781" target="_blank" class="xyz-text-panel text-center">
                        <div class="title">COPY This Proven System...</div>
                        <!-- #{title}-->
                        <div>HEALTHY NEVER TASTED SO GOOD!</div>
                        <!-- #{line1}-->
                        <div>MUCH MORE Than Just Another COFFEE!</div>
                        <!-- #{line2}-->
                        <div class="title">Take The Free Tour!</div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.leasedadspace.com/ad/visitTextLink/84569" target="_blank" class="xyz-text-panel text-center">
                        <div class="title">Reach People</div>
                        <!-- #{title}-->
                        <div>Promote Your Business Opportunity.</div>
                        <!-- #{line1}-->
                        <div>You can join free.</div>
                        <!-- #{line2}-->
                        <div class="title">Join Today</div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.leasedadspace.com/ad/visitTextLink/831383" target="_blank" class="xyz-text-panel text-center">
                        <div class="title">100% Free Course (Value $1997)</div>
                        <!-- #{title}-->
                        <div>Learn Proven Strategies To Build</div>
                        <!-- #{line1}-->
                        <div>That Pays You For Generating Leads</div>
                        <!-- #{line2}-->
                        <div class="title">Create Your Free Account Here</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row page-section traffic-packages undefined">
        <div class="container">
            <div id="traffic-packages" class="row dashboard">
                <div class="col-xs-12">
                    <h2>traffic packages</h2>
                    <div class="container-fluid">
                        <p class="package-lead text-center">All of our traffic packages are <strong>one time purchases!</strong>  No inventory loading and no recurring monthly
                            fees!</p>
                        <p class="package-lead text-center">For more information and details about our Traffic Packages, see our <a href="https://www.leasedadspace.com/howItWorks/advertiser">How it Works for Advertisers</a> page</p>
                        <div class="row">
                            <div class="col-sm-12 package-panel package-panel-pearl">
                                <div class="col-sm-3">
                                    <div class="description package-name">Pearl Package</div>
                                    <div class="price">$9<small>.97</small></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Banner Ads</div>
                                    <div class="">8,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Text Ads</div>
                                    <div class="">4,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Solo Emails</div>
                                    <div class="">1 every 28 days</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="description">Ad Board Directory Posts</div>
                                    <div class="">1 free post per day in our Ad Board Directory. Additional posts: 7 credits</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 package-panel package-panel-amethyst">
                                <div class="col-sm-3">
                                    <div class="description package-name">Amethyst Package</div>
                                    <div class="price">$17</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Banner Ads</div>
                                    <div class="">12,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Text Ads</div>
                                    <div class="">6,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Solo Emails</div>
                                    <div class="">1 every 14 days</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="description">Ad Board Directory Posts</div>
                                    <div class="">2 free posts per day in our Ad Board Directory. Additional posts: 7 credits</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 package-panel package-panel-emerald">
                                <div class="col-sm-3">
                                    <div class="description package-name">Emerald Package</div>
                                    <div class="price">$27</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Banner Ads</div>
                                    <div class="">20,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Text Ads</div>
                                    <div class="">14,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Solo Emails</div>
                                    <div class="">1 every 9 days</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="description">Ad Board Directory Posts</div>
                                    <div class="">3 free posts per day in our Ad Board Directory. Additional posts: 7 credits</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 package-panel package-panel-sapphire">
                                <div class="col-sm-3">
                                    <div class="description package-name">Sapphire Package</div>
                                    <div class="price">$47</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Banner Ads</div>
                                    <div class="">24,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Text Ads</div>
                                    <div class="">16,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Solo Emails</div>
                                    <div class="">1 every 7 days</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="description">Ad Board Directory Posts</div>
                                    <div class="">4 free posts per day in our Ad Board Directory. Additional posts: 7 credits</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 package-panel package-panel-ruby">
                                <div class="col-sm-3">
                                    <div class="description package-name">Ruby Package</div>
                                    <div class="price">$67</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Banner Ads</div>
                                    <div class="">28,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Text Ads</div>
                                    <div class="">18,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Solo Emails</div>
                                    <div class="">1 every 5 days</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="description">Ad Board Directory Posts</div>
                                    <div class="">5 free posts per day in our Ad Board Directory. Additional posts: 7 credits</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 package-panel package-panel-diamond">
                                <div class="col-sm-3">
                                    <div class="description package-name">Diamond Package</div>
                                    <div class="price">$87</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Banner Ads</div>
                                    <div class="">40,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Text Ads</div>
                                    <div class="">20,000 Impressions</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Solo Emails</div>
                                    <div class="">1 every 4 days</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="description">Ad Board Directory Posts</div>
                                    <div class="">6 free posts per day in our Ad Board Directory. Addtional posts: 7 credits</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 package-panel package-panel-red-diamond">
                                <div class="col-sm-3">
                                    <div class="description package-name">Red Diamond Package</div>
                                    <div class="price">$147</div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Banner Ads</div>
                                    <div class="">110,000 Impressions <span class="monthly-disclaimer">Every Month! <span class="fa fa-asterisk"></span></span></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Text Ads</div>
                                    <div class="">60,000 Impressions <span class="monthly-disclaimer">Every Month <span class="fa fa-asterisk"></span></span></div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="description">Solo Emails</div>
                                    <div class="">1 every 48 hours</div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="description">Ad Board Directory Posts</div>
                                    <div class="">25 free posts per day in our Ad Board Directory. Addtional posts: 7 credits</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="final-pitch" class="row">
                <div class="col-sm-12 section-lead">
                    <br>
                    <h2>Let us help you get instant web traffic!</h2>
                    <p class="text-center">No where else online will you ever be able to find this much advertising for such a low cost. Even with the first $9.97 traffic package you are able to send one email to the <strong>entire subscribed membership</strong> of Leased<strong>Ad</strong>Space every month, with no further cost to do so.</p>
                    <p class="text-center">We offer a very unique opportunity where <strong>you can earn some very serious income</strong> selling the most wanted commodity online while advertising your own programs, products, and opportunities at the same time!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row page-section join-now undefined">
        <div class="container">
            <div id="join-now" class="row">
                <div class="col-xs-12">
                    <h2>email all Members now for only $9.97</h2>
                    <!--<h2><a href="/register/index" style="color:#fff;">Join Now</a></h2>-->
                    <form action="https://www.leasedadspace.com/register/index" method="post" class="form-inline">
                        <div class="form-group form-group-lg">
                            <label for="firstName" class="sr-only">First name</label>
                            <input type="text" name="firstName" id="firstName" placeholder="first name" class="form-control" value="">
                        </div>
                        <div class="form-group form-group-lg">
                            <label for="lastName" class="sr-only">Last name</label>
                            <input type="text" name="lastName" id="lastName" placeholder="last name" class="form-control" value="">
                        </div>
                        <div class="form-group form-group-lg">
                            <label for="emailAddress" class="sr-only">Email address</label>
                            <input type="email" name="email" id="email" placeholder="email address" class="form-control" value="">
                        </div>
                        <div class="form-group form-group-lg">
                            <input type="submit" name="_action_shortForm" value="Get Traffic Now!" controller="register" class="btn btn-block btn-lg btn-default form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
