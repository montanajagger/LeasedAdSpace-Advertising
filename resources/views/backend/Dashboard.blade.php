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
                        <h1 class="ad-word">DASHBOARD</h1>
                        <div class="lead-in">Welcome, {{$username}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-section')
    <div class="container">
        <div class="row page-section">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{env('APP_URL'). '/tutorial_videos'}}" target="_blank" style="color:white">
                            <div class="stat-panel stat-panel-one text-center">
                                <div class="description">Click for tutorials</div>
                                <span class="fa fa-mortar-board fa-3x stat"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{env('APP_URL'). '/affiliate_singup'}}" style="color:white;text-decoration:none">
                            <div class="stat-panel stat-panel-two text-center">
                                <div class="description">become an affiliate</div>
                                <span class="fa fa-users text-center stat"></span>
                            </div>
                        </a>
                    </div>
                    <a href="https://www.leasedadspace.com/member/affiliateTerms" style="color:white;text-decoration:none"></a>
                    <div class="col-lg-4">
                        <a href="https://www.leasedadspace.com/member/affiliateTerms" style="color:white;text-decoration:none"></a>
                        <a href="https://www.facebook.com/groups/leasedadspace/" target="_blank" style="color:white">
                            <div class="stat-panel stat-panel-three text-center">
                                <div class="description">Join Our Private Facebook Group!</div>
                                <span class="fa fa-facebook-square fa-3x text-center stat"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                <div class="row section-row">
                    <div class="col-lg-6">
                        <h2>Account Summary <small class="pull-right" style="padding-top:.5em;"><a href="{{env('APP_URL'). '/edit_profile'}}">edit profile</a></small></h2>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Username</label>
                                <div class="col-sm-6">
                                    <div class="form-control-static">SI</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Email</label>
                                <div class="col-sm-6">
                                    <div class="form-control-static">surgijilcuk@gmail.com</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-6 control-label">Account Type</label>
                                <div class="col-sm-6">
                                    <div class="form-control-static">Advertiser </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-6 control-label">Traffic Package Owned</label>
                                <div class="col-sm-6">
                                    <div class="form-control-static">Pearl (1)
                                        (<a href="{{env('APP_URL'). '/purchase_traffic_pack'}}">Buy Traffic Package!</a>)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Quick Stats</h2>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-5 control-label">Text Ad Impressions</label>
                                <div class="col-sm-7">
                                    <div class="form-control-static">Unserved Remaining: 2000</div>
                                    <div class="form-control-static">Unallocated: 2000</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">Banner Ad Impressions</label>
                                <div class="col-sm-7">
                                    <div class="form-control-static">125x125 Unserved Remaining: 4000</div>
                                    <div class="form-control-static">125x125 Unallocated: 4000</div>
                                    <div class="form-control-static">468x60 Unserved Remaining: 4000</div>
                                    <div class="form-control-static">468x60 Unallocated: 4000</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label">Click Credits</label>
                                <div class="col-sm-7">
                                    <div class="form-control-static">11</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Current Traffic Package Benefits</h2>
                                <p class="text-center">Your Current Traffic Package is...</p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="text-center package-panel package-panel-pearl" style="font-size:1.25em;">
                                            <span class="text-center description package-name"><strong>You Own The Pearl Package</strong></span>
                                        </div>
                                        <div class="panel-group">
                                            <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/dashboard#collapseOne">
                                                        <div class="panel-heading">
                                                            <p class="panel-title text-center"><span class="h4">Benefits For All Members</span></p>
                                                        </div>
                                                    </a>
                                                    <div id="collapseOne" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>Free editable profile page and web presence</li>
                                                                <li>Free Personal Blog </li>
                                                                <li>Post to AdBoards with click credits (7 credits per post)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-group">
                                            <div class="panel-group" id="accordion2">
                                                <div class="panel panel-default">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="https://www.leasedadspace.com/dashboard#collapseTwo">
                                                        <div class="panel-heading">
                                                            <p class="panel-title text-center"><span class="h4">Consumable Pearl Benefits</span></p>
                                                        </div>
                                                    </a>
                                                    <div id="collapseTwo" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>The following table summarizes your Small Text Ad, Small Banner Ad and Large Banner ad impressions based on
                                                                the Traffic Package(s) you own.</p>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="text-center" colspan="1" style="border-bottom:0px"></th>
                                                                        <th class="text-center" colspan="2" style="border-bottom:0px">Impressions From</th>
                                                                        <th class="text-center" colspan="1" style="border-bottom:0px"></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th style="border-top:0px">Type</th>
                                                                        <th class="text-center" style="border-top:0px">Pearl Package</th>
                                                                        <th class="text-center" style="border-top:0px">All Time *</th>
                                                                        <th class="text-center" style="border-top:0px">Remaining</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                    <tr><td>Text Ads</td><td class="text-center">4,000 </td><td class="text-center">4000</td><td class="text-center">2000</td></tr>
                                                                    <tr><td>Sm Banner Ad</td><td class="text-center">4,000 </td><td class="text-center">4000</td><td class="text-center">4000</td></tr>
                                                                    <tr><td>Lg Banner Ad</td><td class="text-center">4,000 </td><td class="text-center">4000</td><td class="text-center">4000</td></tr>

                                                                    </tbody>
                                                                </table>
                                                                <span class="small">* May include impressions from booster packs, special promotions or other sources.</span><br>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-group">
                                            <div class="panel-group" id="accordion3">
                                                <div class="panel panel-default">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="https://www.leasedadspace.com/dashboard#collapseThree">
                                                        <div class="panel-heading">
                                                            <p class="panel-title text-center"><span class="h4">Pearl Benefits</span></p>
                                                        </div>
                                                    </a>
                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                        <div class="panel-body">

                                                            <ul>
                                                                <li>Enhanced HTML WYSIWYG Personal Blog Editor!</li>
                                                                <li>Free Ad Board Posts Per Day: 1</li>
                                                                <li>Reduced click cost for additional AdBoard posts (7 credits per post rather than 10)</li>
                                                                <li>Solo Ad Blast Send Every: 28 Days</li>

                                                                <li>Solo Ad Blasts are permanently archived in the AdBlog and indexed by Search Engines</li>

                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <h2 id="purchaseTraffic">Purchase a Regular Traffic Package</h2>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="text-center">Your Next Traffic Package is...</p>
                                        <div class="col-sm-12 package-panel package-panel-amethyst">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="price pull-right">$17</p>
                                                    <p class="description package-name" style="font-size:2.5em;padding-top:.25em;">Amethyst</p>
                                                    <button class="btn btn-lg btn-block btn-info" onclick="$(&#39;#package1MoreInfo&#39;).toggle(&#39;slow&#39;)" style="margin-top:1.5em;margin-bottom:.5em;">Learn More</button>
                                                </div>
                                            </div>
                                            <div id="package1MoreInfo" class="row" style="display:none;">
                                                <br>
                                                <div class="col-sm-12">
                                                    <div class="description">Banner Ads</div>
                                                    <p class="">12,000 Additional Impressions
                                                        (6,000 each of small and large banner)</p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="description">Text Ads</div>
                                                    <p class="">6,000 Additional Impressions</p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="description">Solo Emails</div>
                                                    <p class="">1 every 14 days</p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="description">Ad Board Directory Posts</div>
                                                    <p class="">2 free posts per day in our Ad Board Directory.  Additional posts: 7 credits</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="text-center">
                                            <a href="{{env('APP_URL'). '/purchase_traffic_pack'}}" class="btn btn-lg btn-success btn-block" style="color:white;white-space:normal;">Buy Amethyst Traffic Package Now!</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h2 id="myParaAds"><span class="label label-success" style="display:inline-block;vertical-align:top;margin-bottom:.25em;">NEW!</span> Para Ad Licenses</h2>
                        <p class="alert alert-info"><strong>NOTICE:</strong> ParaAds are a standalone product sold exclusively and <em>directly</em> through Leased<strong>Ad</strong>Space.
                            These ads are not included in any of our seven standard traffic packages, and can be purchased individually and repeatedly regardless of whether you own one of the
                            traffic packages listed above.  <a href="https://www.leasedadspace.com/para/info">Find out more about para ads here!</a></p>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr><th>Duration</th>
                                            <th>Status</th>
                                            <th class="text-center">Total Impressions</th>
                                            <th class="text-center">Active Ads Configured</th>
                                            <th>Actions</th>
                                        </tr></thead>
                                        <tbody>

                                        <tr><td colspan="7" class="text-center">Wondering what ParaAds are?  <a href="{{env('APP_URL'). '/para/info'}}">Click here to find out!</a></td></tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;">Monthly Para Ads Are...</h4>
                                    </div>

                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-one" style="font-size:1.25em;">
                                            <strong>SOLD OUT!</strong>
                                        </div>
                                        <p class="text-center">
                                            <a href="{{env('APP_URL'). '/para/info'}}" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Learn More!</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title text-center" style="margin-bottom:0px;">Short Term Para Ads Are...</h4>
                                    </div>

                                    <div class="panel-body">
                                        <div class="text-center stat-panel stat-panel-two" style="font-size:1.25em;">
                                            <strong>AVAILABLE!</strong>
                                        </div>
                                        <p class="text-center">
                                            <a href="{{env('APP_URL'). '/para/info'}}" class="btn btn-md btn-info btn-block" style="color:white;white-space:normal;">Buy ParaAd Now!</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h2 id="myAds">Ad Board Posts <small class="pull-right" style="padding-top:.5em;"><a href="{{env('APP_URL'). '/submit_adboard_post'}}">Submit New Post</a></small></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr><th>Title</th>
                                    <th>Views</th>
                                    <th>Date Posted</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr></thead>
                                <tbody>
                                    <tr><td colspan="7" class="text-center">Hey now!!  Looks like you haven&amp;rsquot;t set up any Ad Board Posts yet.  The system only works if you work it!  <a href="{{env('APP_URL'). '/submit_adboard_post'}}">Create your first Ad Board post now!</a></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h2 id="myAds">Small Text Ads <small class="pull-right" style="padding-top:.5em;"><a href="{{env('APP_URL'). '/submit_textad'}}">Submit <span class="hidden-xs">Small </span>Text Ad</a></small></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr><th>Title</th>
                                    <th>Imp. Allocated</th>
                                    <th>Imp. Served</th>
                                    <th>Imp. Remaining</th>
                                    <th>Clicks</th>
                                    <th>CTR</th>
                                    <th>Actions</th>
                                </tr></thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{env('APP_URL'). '/edit_textad'}}">Free advertising</a></td>
                                        <td>2000</td>
                                        <td>2000</td>
                                        <td>0</td>
                                        <td>5</td>
                                        <td>0.25%</td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Impressions"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#textImpressionsAddModal" data-adid="1488039"><span class="fa fa-plus fa-lg"></span></button></span>
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Reduce Impressions"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#textImpressionsDecrementModal" data-adid="1488039"><span class="fa fa-minus fa-lg"></span></button></span>
                                            <span data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Text Ad"><a href="https://www.leasedadspace.com/ad/editTextAd/1488039"><button type="button" class="btn btn-primary btn-xs"><span class="fa fa-edit fa-lg"></span></button></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h2 id="myAds">Banner Ads <small class="pull-right" style="padding-top:.5em;"><a href="{{env('APP_URL'). '/submit_bannerad'}}">Submit Banner Ad</a></small></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr><th>Title</th>
                                    <th>Size</th>
                                    <th>Imp. Allocated</th>
                                    <th>Imp. Served</th>
                                    <th>Imp. Remaining</th>
                                    <th>Clicks</th>
                                    <th>CTR</th>
                                    <th>Actions</th>
                                </tr></thead>
                                <tbody>

                                <tr><td colspan="8" class="text-center">Whoa!!  Looks like you haven't set up any banner ads yet.  The system only works if you work it!  <a href="{{env('APP_URL'). '/submit_bannerad'}}">Setup your first banner ad now!</a></td></tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h2 id="myAds">Solo Email Ads <small class="pull-right" style="padding-top:.5em;"><a href="{{env('APP_URL'). '/send_soloemail'}}">Submit Solo Ad</a></small></h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr><th>Subject</th>
                                    <th># of Recipients</th>
                                    <th>Opens</th>
                                    <th>Clicks</th>
                                    <th>Blog Views</th>
                                    <th>Send Date</th>
                                    <th>Status</th>
                                </tr></thead>
                                <tbody>
                                    <tr><td colspan="8" class="text-center">Haven't sent a solo ad yet??  C'mon, <a href="{{env('APP_URL'). '/send_soloemail'}}">let's get busy!</a></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
