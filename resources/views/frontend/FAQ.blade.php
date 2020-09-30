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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>FAQ</h1>
                <hr>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->

        <div class="row">
            <div class="col-sm-10">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseOne">
                            <div class="panel-heading">
                                <h4 class="panel-title">How do I get started with LeasedAdSpace.com as an advertiser?</h4>
                            </div>
                        </a>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Getting started with Leasedadspace.com is easy as 1-2-3...</p>
                                <ol>
                                    <li><a href="https://www.leasedadspace.com/register/index">Register for an Account</a></li>
                                    <li>Start utilizing some of the free advertising benefits we offer</li>
                                    <li>Purchase a traffic package and setup your text and banner ads and watch the traffic roll in!</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseAffiliate">
                            <div class="panel-heading">
                                <h4 class="panel-title">How do I get started with LeasedAdSpace.com as an affiliate?</h4>
                            </div>
                        </a>
                        <div id="collapseAffiliate" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Becoming an LAS affiliate is a great way to both advertise your own products, and make money advertising Leased<strong>Ad</strong>Space products to other potential customers!  More information about being an affiliate <a href="https://www.leasedadspace.com/howItWorks/affiliate">can be found here</a> and you can enable your affiliate account on your <a href="https://www.leasedadspace.com/dashboard/index">Member Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseTwo">
                            <div class="panel-heading">
                                <h4 class="panel-title">Do I have to pay money to use the Leased Ad Space traffic platform?</h4>
                            </div>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>No, you don't.  Many of our services are offered free of charge.  Some of our products require a modest outlaying of money, but most of those also come with renewable / long term benefits for no recurring or additional cost.</p>
                                <p>Additionally, you are not required to purchase anything at Leased<strong>Ad</strong>Space to become an LAS affiliate, though your commission rate will be higher and you will likely be more successful if you do purchase.  It's tough to sell something that you don't know anything about!</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseThree">
                            <div class="panel-heading">
                                <h4 class="panel-title">Can I have more then one account?</h4>
                            </div>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Absolutely not!  If we find a duplicate account in our system, we will delete it.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseFour">
                            <div class="panel-heading">
                                <h4 class="panel-title">Can other members of my house hold sign up and purchase Traffic Package or themselves become affiliates?</h4>
                            </div>
                        </a>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Any member of your family can create an advertiser account and utilize either the free or purchased services that LAS provides.</p>
                                <p>Additionally, any members of your household who are of legal age to make money in the country they reside in may enable an affiliate account. They must have their own email address to do so. We understand other people in your house hold, may be trying to make money online as well.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseFive">
                            <div class="panel-heading">
                                <h4 class="panel-title">Can I skip purchasing the first $9.97 Traffic Package and purchase a higher Traffic Package?</h4>
                            </div>
                        </a>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>No, you must first own all lower level traffic packages before purchasing a higher level package.  The reason for this is that each package contains some renewable / long term benefits, and each successive package builds on the benefits of the package below it.  ParaAds and some of our other advertising packages however can be purchased in any combination, at any time and as frequently as you like.  Only traffic packages have the "built on previous packages" requirement</p>
                                <p>We ARE however working on an easier method of purchasing higher level traffic packages that will allow you to purchase many packages at the same time. You would still own all the lower traffic package levels, but would only have to go through the checkout process once rather than multiple times.  This would be much faster and save on transaction fees for both LAS and our customers.  Check back for more info!</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseSix">
                            <div class="panel-heading">
                                <h4 class="panel-title">How long does it take for my traffic packages to start after purchase?</h4>
                            </div>
                        </a>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>This largely depends on what payment method you provided when you purchase.  Generally speaking, you have immediate access to your traffic packages, after purchase. So they start as soon as you set up your ads.  However, some payment methods... such as bitcoin, require time to be "approved" and for us to verify that funds have been received.  In cases such as this, your purchase will be credited to your account as soon as we get confirmation of funds received.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseSeven">
                            <div class="panel-heading">
                                <h4 class="panel-title">Are their any refunds on product purchases?</h4>
                            </div>
                        </a>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>All Leased<strong>Ad</strong>Space product purchases are digitally delivered products and as such are  <strong>NON-REFUNDABLE</strong>. All payments are final. All traffic packages are digitally delivered online, and are immediately available after purchase in your members area.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseEight">
                            <div class="panel-heading">
                                <h4 class="panel-title">How are the traffic packages and products delivered?</h4>
                            </div>
                        </a>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>All traffic package purchasers will receive internal and external advertising, using the following types of ads:</p>
                                <ol>
                                    <li>Text Ads</li>
                                    <li>Banner Ads</li>
                                    <li>Email Marketing/Solo ads</li>
                                    <li>A Public Profile Page</li>
                                    <li>Instant Blog Postings</li>
                                    <li>Our Classified Ad Directory</li>
                                    <li>Search Engine traffic/all content is public</li>
                                </ol>
                                <p><a href="https://www.leasedadspace.com/para/info">ParaAds</a> and other products and services have their own unique benefits and distribution methods best explained in their own deailed product descriptions.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseNine">
                            <div class="panel-heading">
                                <h4 class="panel-title">Can you guarantee me a certain amount of website visitors or sales from these Traffic Packages?</h4>
                            </div>
                        </a>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>No, we cannot guarantee that you will generate more sales, or an exact amount of visitors. This is highly dependent on your site’s sales copy, price point, demand for your product or service and overall web site presentation. Using our platform gives your site more direct EXPOSURE and presence on the web. Every traffic package will give your ads/webpages exposure by at least 6 different traffic methods, including permanent ads. Whether your offers convert or not is your responsibility. No traffic provider online can guarantee conversion, it is impossible.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseTen">
                            <div class="panel-heading">
                                <h4 class="panel-title">How do I earn money reselling these traffic packages and other LAS products?</h4>
                            </div>
                        </a>
                        <div id="collapseTen" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Our affiliate program and compensation plan details are explained in the <a href="https://www.leasedadspace.com/howItWorks/affiliate">How it Works for Affiliates Page</a></p>
                                <p>As with any business, your results may vary, and will be based on your individual capacity, business experience, expertise, and level of desire. There are no guarantees concerning the level of success or income you may experience with our affiliate program or our traffic packages. All Purchases are final.</p>
                                <p>We made the Leased Ad Space platform with the "Average Marketer" in mind, we understand how frustrating it can be to earn any real money online. We designed these traffic packages with affordability, and will strive to make them the very best! </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/faq/index#collapseTwelve">
                            <div class="panel-heading">
                                <h4 class="panel-title">How will I receive payment for my commissions?</h4>
                            </div>
                        </a>
                        <div id="collapseTwelve" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We process sales commissions on a monthly basis.  Commissions runs begin on the 15th for the prior calendar month and are usually finished by the 21st.  Payment is currently either by bitcoin or PayPal <strong>only</strong>.  If you are unable to receive commissions payments via one of these methods, you are not eligible for our affiliate program.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->

                </div> <!-- / .panel-group -->
                <div class="row">
                    <div class="col-sm-6">
                        <a href="https://www.leasedadspace.com/ad/visitBannerLink/30772" target="_blank" class="bottom-banner">
                            <img src="http://www.cryptosbuilder.com/images/cbanner1.gif" class="img-responsive center-block fourSixtyEightImage">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="https://www.leasedadspace.com/ad/visitBannerLink/75771" target="_blank" class="bottom-banner">
                            <img src="http://www.cryptosbuilder.com/images/cbanner1.gif" class="img-responsive center-block fourSixtyEightImage">
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.panel-group -->
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gutter-ad-txt">
                            <a href="https://www.leasedadspace.com/ad/visitTextLink/517348" target="_blank" class="text-center">
                                <div class="title">Dan Robb is looking for leaders</div>
                                <!-- #{title}-->
                                <div>Join My Now LifeStyle Team</div>
                                <!-- #{line1}-->
                                <div>And Get Fit And A Fat Wallet!</div>
                                <!-- #{line2}-->
                                <div class="title">Join My Pre-Launch Team Now!</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gutter-ad-img-sm">
                            <a href="https://www.leasedadspace.com/ad/visitBannerLink/1111295" target="_blank" class="">
                                <img src="https://thumbs.gfycat.com/ConfusedTheseDeviltasmanian-size_restricted.gif" class="img-responsive center-block">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gutter-ad-txt">
                            <a href="https://www.leasedadspace.com/ad/visitTextLink/212996" target="_blank" class="text-center">
                                <div class="title">Do you suck at marketing?</div>
                                <!-- #{title}-->
                                <div>We have a solution for YOU...</div>
                                <!-- #{line1}-->
                                <div>Let us show you the right way</div>
                                <!-- #{line2}-->
                                <div class="title">Check NOW !</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="gutter-ad-img-sm">
                            <a href="https://www.leasedadspace.com/ad/visitBannerLink/1111295" target="_blank" class="">
                                <img src="https://thecryptomailer.com/getimg.php?id=4" class="img-responsive center-block">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
