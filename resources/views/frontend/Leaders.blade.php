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
                <h1>Affiliate Leaderboards</h1>
                <hr>
                <p>Social proof is a big deal.  We get it.  We're the real deal, and we have the numbers to prove it.
                    These lists are completely dynamic and driven off real time data.  No waiting to update, no fudged
                    numbers.  Just the facts jack!</p>
            </div>
            <div class="col-sm-6 text-center">
                <img class="img-responsive centered-responsive-image" style="width:50%; height:50%; margin-top:.5em;margin-bottom:.5em;" src="{{asset('assets/coinpayments.png')}}">
            </div>
            <div class="col-sm-6 text-center">
                <img class="img-responsive centered-responsive-image" style="width:50%; height:50%; margin-top:1.5em;" src="{{asset('assets/creditanddebitcards.png')}}">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>50 Most Recent Earners</h2>
                <div class="">
                    <table class="table">
                        <thead>
                        <tr><th>Member Name</th><th class="hidden-xs">Member Rank</th><th>Amount</th><th>Transaction Date</th></tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Frank Bauer (<a href="https://www.leasedadspace.com/members/add2it">add2it</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>4.84</td>
                            <td>09-05-2020 06:30:41 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)</td>
                            <td class="hidden-xs">Amethyst (2)</td>
                            <td>13.10</td>
                            <td>08-31-2020 04:17:08 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)</td>
                            <td class="hidden-xs">Amethyst (2)</td>
                            <td>8.24</td>
                            <td>08-23-2020 06:28:07 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Devesh Krishna (<a href="https://www.leasedadspace.com/members/DeveshKrishna">DeveshKrishna</a>)</td>
                            <td class="hidden-xs">Pearl (1)</td>
                            <td>4.84</td>
                            <td>08-23-2020 02:42:11 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Emma Baker (<a href="https://www.leasedadspace.com/members/LuxLife">LuxLife</a>)</td>
                            <td class="hidden-xs">Amethyst (2)</td>
                            <td>4.84</td>
                            <td>08-04-2020 11:17:06 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Edward Keyte (<a href="https://www.leasedadspace.com/members/edkeyte">edkeyte</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>20.35</td>
                            <td>07-25-2020 02:46:10 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Darren Olander (<a href="https://www.leasedadspace.com/members/darrenolander">darrenolander</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>19.64</td>
                            <td>07-19-2020 06:32:12 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Robert Fraser (<a href="https://www.leasedadspace.com/members/robf">robf</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>12.37</td>
                            <td>07-11-2020 01:30:13 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Bryan Stoker (<a href="https://www.leasedadspace.com/members/rbstoker">rbstoker</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>12.35</td>
                            <td>06-26-2020 09:25:07 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Joe Bulik (<a href="https://www.leasedadspace.com/members/homebizjoe">homebizjoe</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>36.35</td>
                            <td>06-21-2020 11:41:16 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Edward Keyte (<a href="https://www.leasedadspace.com/members/edkeyte">edkeyte</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>20.35</td>
                            <td>06-14-2020 09:49:18 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Jasco Network (<a href="https://www.leasedadspace.com/members/JascoNetwork">JascoNetwork</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>12.35</td>
                            <td>06-12-2020 10:35:18 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Robert Fraser (<a href="https://www.leasedadspace.com/members/robf">robf</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>19.64</td>
                            <td>06-07-2020 03:00:05 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Adrian Hibbert (<a href="https://www.leasedadspace.com/members/adrianhibbert">adrianhibbert</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>05-26-2020 02:05:14 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Ed Newman (<a href="https://www.leasedadspace.com/members/ednewman">ednewman</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>05-19-2020 10:28:22 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Carol Walczak (<a href="https://www.leasedadspace.com/members/carolw44">carolw44</a>)</td>
                            <td class="hidden-xs">Diamond (6)</td>
                            <td>8.23</td>
                            <td>05-16-2020 01:55:06 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Carol Walczak (<a href="https://www.leasedadspace.com/members/carolw44">carolw44</a>)</td>
                            <td class="hidden-xs">Diamond (6)</td>
                            <td>22.80</td>
                            <td>05-15-2020 11:42:11 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Thomas Keoppel (<a href="https://www.leasedadspace.com/members/henrystoptips">henrystoptips</a>)</td>
                            <td class="hidden-xs">Amethyst (2)</td>
                            <td>13.57</td>
                            <td>05-14-2020 06:05:08 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Carol Walczak (<a href="https://www.leasedadspace.com/members/carolw44">carolw44</a>)</td>
                            <td class="hidden-xs">Diamond (6)</td>
                            <td>8.23</td>
                            <td>05-06-2020 08:46:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Carol Walczak (<a href="https://www.leasedadspace.com/members/carolw44">carolw44</a>)</td>
                            <td class="hidden-xs">Diamond (6)</td>
                            <td>13.10</td>
                            <td>05-06-2020 08:22:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>menno vzijl (<a href="https://www.leasedadspace.com/members/leased">leased</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>8.24</td>
                            <td>05-04-2020 04:42:11 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>12.37</td>
                            <td>05-03-2020 05:48:16 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Neville Easley (<a href="https://www.leasedadspace.com/members/PassiveWealth">PassiveWealth</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>12.37</td>
                            <td>05-01-2020 07:09:25 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>04-30-2020 10:42:18 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Carol Walczak (<a href="https://www.leasedadspace.com/members/carolw44">carolw44</a>)</td>
                            <td class="hidden-xs">Diamond (6)</td>
                            <td>8.24</td>
                            <td>04-29-2020 11:28:06 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Matthew Feast (<a href="https://www.leasedadspace.com/members/mattfeast52">mattfeast52</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>34.19</td>
                            <td>04-29-2020 01:13:06 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Jasco Network (<a href="https://www.leasedadspace.com/members/JascoNetwork">JascoNetwork</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>12.35</td>
                            <td>04-28-2020 03:58:07 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Robert Fraser (<a href="https://www.leasedadspace.com/members/robf">robf</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>19.64</td>
                            <td>04-27-2020 12:00:07 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Joshua Domsky (<a href="https://www.leasedadspace.com/members/JDomsky">JDomsky</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>04-25-2020 04:47:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Jasco Network (<a href="https://www.leasedadspace.com/members/JascoNetwork">JascoNetwork</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>04-24-2020 12:30:26 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>04-03-2020 06:20:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>34.19</td>
                            <td>04-01-2020 05:39:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>David Hurley (<a href="https://www.leasedadspace.com/members/hirohurl">hirohurl</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>03-31-2020 10:07:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Robert Fraser (<a href="https://www.leasedadspace.com/members/robf">robf</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>12.35</td>
                            <td>03-29-2020 06:52:06 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Dan Watson (<a href="https://www.leasedadspace.com/members/danwatson">danwatson</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>03-27-2020 04:28:08 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>19.64</td>
                            <td>03-15-2020 03:39:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>kay WISDOM (<a href="https://www.leasedadspace.com/members/teamkay">teamkay</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>4.84</td>
                            <td>03-04-2020 11:10:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>03-01-2020 06:24:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Julian Leahy (<a href="https://www.leasedadspace.com/members/human">human</a>)</td>
                            <td class="hidden-xs">Pearl (1)</td>
                            <td>4.84</td>
                            <td>02-22-2020 07:16:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Edward Keyte (<a href="https://www.leasedadspace.com/members/edkeyte">edkeyte</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>02-18-2020 06:42:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Devesh Krishna (<a href="https://www.leasedadspace.com/members/DeveshKrishna">DeveshKrishna</a>)</td>
                            <td class="hidden-xs">Pearl (1)</td>
                            <td>13.57</td>
                            <td>02-15-2020 10:41:05 AM UTC</td>
                        </tr>

                        <tr>
                            <td>anthony farby (<a href="https://www.leasedadspace.com/members/farbhof1">farbhof1</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>13.10</td>
                            <td>02-11-2020 01:43:05 AM UTC</td>
                        </tr>

                        <tr>
                            <td>David Franklin (<a href="https://www.leasedadspace.com/members/samwt">samwt</a>)</td>
                            <td class="hidden-xs">Pearl (1)</td>
                            <td>4.84</td>
                            <td>02-10-2020 12:34:05 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Renee Sullivan (<a href="https://www.leasedadspace.com/members/reneesullivan">reneesullivan</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>36.35</td>
                            <td>02-07-2020 02:15:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>John Hostick (<a href="https://www.leasedadspace.com/members/money247">money247</a>)</td>
                            <td class="hidden-xs">Pearl (1)</td>
                            <td>4.84</td>
                            <td>02-03-2020 04:26:06 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>19.64</td>
                            <td>01-29-2020 04:20:05 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Curtis Futch (<a href="https://www.leasedadspace.com/members/cfutchwater">cfutchwater</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>7.25</td>
                            <td>01-21-2020 09:48:04 PM UTC</td>
                        </tr>

                        <tr>
                            <td>Joe Bulik (<a href="https://www.leasedadspace.com/members/homebizjoe">homebizjoe</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>106.94</td>
                            <td>01-21-2020 05:56:05 AM UTC</td>
                        </tr>

                        <tr>
                            <td>Joe Bulik (<a href="https://www.leasedadspace.com/members/homebizjoe">homebizjoe</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>63.29</td>
                            <td>01-21-2020 05:40:05 AM UTC</td>
                        </tr>

                        <tr>
                            <td>anthony farby (<a href="https://www.leasedadspace.com/members/farbhof1">farbhof1</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>8.24</td>
                            <td>01-20-2020 03:48:06 PM UTC</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-6 bottom-banner">
                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/25" target="_blank">
                        <img src="https://opptracker.com/IMAGES/GG/try%20it%20now.gif" class="img-responsive  center-block fourSixtyEightImage">
                    </a>
                </div>
                <div class="col-md-6 bottom-banner">
                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/27" target="_blank" class="">
                        <img src="https://opptracker.com/IMAGES/GG/try%20it%20now.gif" class="img-responsive center-block fourSixtyEightImage">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>Top 50 All Time Referrers</h2>
                <div class="">
                    <table class="table">
                        <thead>
                        <tr><th>Member Name</th><th class="hidden-xs">Member Rank</th><th>Referrals To Date</th><th>Join Date</th></tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Jody W. Toomey (<a href="https://www.leasedadspace.com/members/Team">Team</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>733</td>
                            <td>05-31-2016</td>
                        </tr>

                        <tr>
                            <td>Alis Arotan (<a href="https://www.leasedadspace.com/members/Arotan">Arotan</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>506</td>
                            <td>05-25-2017</td>
                        </tr>

                        <tr>
                            <td>Chuck Nguyen (<a href="https://www.leasedadspace.com/members/OnlineEntrepreneur">OnlineEntrepreneur</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>372</td>
                            <td>03-09-2018</td>
                        </tr>

                        <tr>
                            <td>Robert Fraser (<a href="https://www.leasedadspace.com/members/robf">robf</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>361</td>
                            <td>08-16-2016</td>
                        </tr>

                        <tr>
                            <td>Mrs Ray (<a href="https://www.leasedadspace.com/members/mrsray">mrsray</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>325</td>
                            <td>06-12-2016</td>
                        </tr>

                        <tr>
                            <td>Jasco Network (<a href="https://www.leasedadspace.com/members/JascoNetwork">JascoNetwork</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>320</td>
                            <td>10-27-2016</td>
                        </tr>

                        <tr>
                            <td>Penny Cannon (<a href="https://www.leasedadspace.com/members/wiggie1226">wiggie1226</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>307</td>
                            <td>04-19-2016</td>
                        </tr>

                        <tr>
                            <td>Ryan Hartman (<a href="https://www.leasedadspace.com/members/ryanhartman">ryanhartman</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>290</td>
                            <td>03-28-2016</td>
                        </tr>

                        <tr>
                            <td>Audrey Sorg (<a href="https://www.leasedadspace.com/members/Audreysorg">Audreysorg</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>286</td>
                            <td>03-28-2016</td>
                        </tr>

                        <tr>
                            <td>Edward Keyte (<a href="https://www.leasedadspace.com/members/edkeyte">edkeyte</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>278</td>
                            <td>09-02-2016</td>
                        </tr>

                        <tr>
                            <td>Donald Ducharme (<a href="https://www.leasedadspace.com/members/don3593">don3593</a>)</td>
                            <td class="hidden-xs">Amethyst (2)</td>
                            <td>254</td>
                            <td>04-15-2016</td>
                        </tr>

                        <tr>
                            <td>Darren Olander (<a href="https://www.leasedadspace.com/members/darrenolander">darrenolander</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>252</td>
                            <td>07-06-2016</td>
                        </tr>

                        <tr>
                            <td>Klaus Biesel (<a href="https://www.leasedadspace.com/members/klausius">klausius</a>)</td>
                            <td class="hidden-xs">Ruby (5)</td>
                            <td>246</td>
                            <td>04-14-2016</td>
                        </tr>

                        <tr>
                            <td>John Weberg (<a href="https://www.leasedadspace.com/members/mmelite">mmelite</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>243</td>
                            <td>03-28-2016</td>
                        </tr>

                        <tr>
                            <td>James Fomba (<a href="https://www.leasedadspace.com/members/workwithjames">workwithjames</a>)</td>
                            <td class="hidden-xs">Amethyst (2)</td>
                            <td>202</td>
                            <td>08-18-2016</td>
                        </tr>

                        <tr>
                            <td>Guido Nussbaum (<a href="https://www.leasedadspace.com/members/teamway">teamway</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>187</td>
                            <td>09-01-2016</td>
                        </tr>

                        <tr>
                            <td>gary welsh (<a href="https://www.leasedadspace.com/members/garywelsh">garywelsh</a>)</td>
                            <td class="hidden-xs">Diamond (6)</td>
                            <td>171</td>
                            <td>05-13-2016</td>
                        </tr>

                        <tr>
                            <td>Steve Johnston (<a href="https://www.leasedadspace.com/members/bitcoinbarrel">bitcoinbarrel</a>)</td>
                            <td class="hidden-xs">Emerald (3)</td>
                            <td>171</td>
                            <td>12-16-2016</td>
                        </tr>

                        <tr>
                            <td>Ed Newman (<a href="https://www.leasedadspace.com/members/ednewman">ednewman</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>166</td>
                            <td>09-16-2016</td>
                        </tr>

                        <tr>
                            <td>Seely Clark (<a href="https://www.leasedadspace.com/members/clarkie44">clarkie44</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>151</td>
                            <td>03-28-2016</td>
                        </tr>

                        <tr>
                            <td>John Worsham (<a href="https://www.leasedadspace.com/members/woody35">woody35</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>146</td>
                            <td>04-11-2016</td>
                        </tr>

                        <tr>
                            <td>Tony Tezak (<a href="https://www.leasedadspace.com/members/tonytezak">tonytezak</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>139</td>
                            <td>03-28-2016</td>
                        </tr>

                        <tr>
                            <td>Alonzo Brown (<a href="https://www.leasedadspace.com/members/alonzobrown">alonzobrown</a>)</td>
                            <td class="hidden-xs">Emerald (3)</td>
                            <td>131</td>
                            <td>06-18-2016</td>
                        </tr>

                        <tr>
                            <td>Adrian Hibbert (<a href="https://www.leasedadspace.com/members/adrianhibbert">adrianhibbert</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>125</td>
                            <td>08-18-2016</td>
                        </tr>

                        <tr>
                            <td>Lucie Bellemare (<a href="https://www.leasedadspace.com/members/lucie">lucie</a>)</td>
                            <td class="hidden-xs">Emerald (3)</td>
                            <td>118</td>
                            <td>05-16-2016</td>
                        </tr>

                        <tr>
                            <td>Frank Bauer (<a href="https://www.leasedadspace.com/members/add2it">add2it</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>118</td>
                            <td>10-27-2016</td>
                        </tr>

                        <tr>
                            <td>Alexei Zoubov (<a href="https://www.leasedadspace.com/members/affordwealth">affordwealth</a>)</td>
                            <td class="hidden-xs">Emerald (3)</td>
                            <td>114</td>
                            <td>05-02-2016</td>
                        </tr>

                        <tr>
                            <td>Richard Daigle (<a href="https://www.leasedadspace.com/members/redmarketing">redmarketing</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>113</td>
                            <td>04-11-2016</td>
                        </tr>

                        <tr>
                            <td>Lori Petrosino (<a href="https://www.leasedadspace.com/members/viplorip">viplorip</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>109</td>
                            <td>08-17-2016</td>
                        </tr>

                        <tr>
                            <td>Virgil Aponte (<a href="https://www.leasedadspace.com/members/vaponte">vaponte</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>108</td>
                            <td>08-19-2016</td>
                        </tr>

                        <tr>
                            <td>income4u2 Williams (<a href="https://www.leasedadspace.com/members/income4u2">income4u2</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>106</td>
                            <td>05-23-2016</td>
                        </tr>

                        <tr>
                            <td>Steve Dawson (<a href="https://www.leasedadspace.com/members/interprofits">interprofits</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>98</td>
                            <td>08-12-2016</td>
                        </tr>

                        <tr>
                            <td>"Bigg" Lloyd Dotson (<a href="https://www.leasedadspace.com/members/IMBigg">IMBigg</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>95</td>
                            <td>09-12-2016</td>
                        </tr>

                        <tr>
                            <td>Olov Forsgren (<a href="https://www.leasedadspace.com/members/forsgren">forsgren</a>)</td>
                            <td class="hidden-xs">Amethyst (2)</td>
                            <td>95</td>
                            <td>05-05-2016</td>
                        </tr>

                        <tr>
                            <td>Bernard M. (<a href="https://www.leasedadspace.com/members/infoshare007">infoshare007</a>)</td>
                            <td class="hidden-xs">Emerald (3)</td>
                            <td>91</td>
                            <td>05-28-2016</td>
                        </tr>

                        <tr>
                            <td>Rohan Awathare (<a href="https://www.leasedadspace.com/members/jack567612">jack567612</a>)</td>
                            <td class="hidden-xs">Pearl (1)</td>
                            <td>90</td>
                            <td>09-11-2016</td>
                        </tr>

                        <tr>
                            <td>ALLEN PARKER (<a href="https://www.leasedadspace.com/members/parkerspot">parkerspot</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>90</td>
                            <td>02-19-2017</td>
                        </tr>

                        <tr>
                            <td>Mike J Anthony (<a href="https://www.leasedadspace.com/members/mikejanthony">mikejanthony</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>87</td>
                            <td>07-23-2016</td>
                        </tr>

                        <tr>
                            <td>Stuart Grunert (<a href="https://www.leasedadspace.com/members/stuartg">stuartg</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>84</td>
                            <td>07-21-2016</td>
                        </tr>

                        <tr>
                            <td>Mazen Farkouh (<a href="https://www.leasedadspace.com/members/mazenfarkouh">mazenfarkouh</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>83</td>
                            <td>04-11-2017</td>
                        </tr>

                        <tr>
                            <td>Marry Sugutskaia (<a href="https://www.leasedadspace.com/members/Marrin">Marrin</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>82</td>
                            <td>12-28-2016</td>
                        </tr>

                        <tr>
                            <td>Sheikh Anees (<a href="https://www.leasedadspace.com/members/sheikhanees">sheikhanees</a>)</td>
                            <td class="hidden-xs">Emerald (3)</td>
                            <td>81</td>
                            <td>04-22-2016</td>
                        </tr>

                        <tr>
                            <td>Stephane Boudreault (<a href="https://www.leasedadspace.com/members/Skipper2015">Skipper2015</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>81</td>
                            <td>01-18-2017</td>
                        </tr>

                        <tr>
                            <td>Carol Walczak (<a href="https://www.leasedadspace.com/members/carolw44">carolw44</a>)</td>
                            <td class="hidden-xs">Diamond (6)</td>
                            <td>80</td>
                            <td>04-19-2016</td>
                        </tr>

                        <tr>
                            <td>mark wieneke (<a href="https://www.leasedadspace.com/members/mwieneke">mwieneke</a>)</td>
                            <td class="hidden-xs">Ruby (5)</td>
                            <td>80</td>
                            <td>04-11-2016</td>
                        </tr>

                        <tr>
                            <td>Nuno Jacob (<a href="https://www.leasedadspace.com/members/nuno23">nuno23</a>)</td>
                            <td class="hidden-xs">Pearl (1)</td>
                            <td>79</td>
                            <td>05-22-2016</td>
                        </tr>

                        <tr>
                            <td>Emma Louise Charles (<a href="https://www.leasedadspace.com/members/emmac440">emmac440</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>78</td>
                            <td>08-24-2016</td>
                        </tr>

                        <tr>
                            <td>Tommy Westby (<a href="https://www.leasedadspace.com/members/forevertommy">forevertommy</a>)</td>
                            <td class="hidden-xs">Sapphire (4)</td>
                            <td>76</td>
                            <td>06-21-2016</td>
                        </tr>

                        <tr>
                            <td>Timothy Hanson (<a href="https://www.leasedadspace.com/members/thanson645">thanson645</a>)</td>
                            <td class="hidden-xs">Red Diamond (7)</td>
                            <td>73</td>
                            <td>04-11-2016</td>
                        </tr>

                        <tr>
                            <td>Brittany Johnson (<a href="https://www.leasedadspace.com/members/DaniB615">DaniB615</a>)</td>
                            <td class="hidden-xs">Emerald (3)</td>
                            <td>73</td>
                            <td>05-09-2016</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-6 bottom-banner">
                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/26" target="_blank">
                        <img src="./Affiliate Leaderboards_files/468x60.gif" class="img-responsive  center-block fourSixtyEightImage">
                    </a>
                </div>
                <div class="col-md-6 bottom-banner">
                    <a href="https://www.leasedadspace.com/ad/visitBannerLink/26" target="_blank" class="">
                        <img src="./Affiliate Leaderboards_files/468x60.gif" class="img-responsive center-block fourSixtyEightImage">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
