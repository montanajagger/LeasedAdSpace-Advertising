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
				<div class="row">
					<div class="col-sm-12">
						<h1>How it Works for Affiliates</h1>
						<hr>
						<p>Leased<strong>Ad</strong>Space is the most unique advertising opportunity online, but it's also the best marketing platform to sell the hottest commodity online:  <em>TRAFFIC!</em>.  That's right, not only can you advertise your own offers using our innovative marketing platform, but you can also profit from referals as an affiliate!  <strong>Straight up, you get paid on every sale you make, up to 75% commissions paid to you!</strong></p>
						<p>Every single business or person that is trying to make money online needs traffic.  Without it, we're all dead in the water! That is what we provide.  We give you the platform to sell it and you bring in the people or businesses that need it.  And we help you make the sale!</p>
						<p><strong>You can make up to 75% commissions off of 7 different levels of traffic packages sales, as well as our other products like <a href="https://leasedadspace.com/para_info">ParaAds</a>.</strong></p>
					</div>
				</div>
				<div class="row">
					@foreach($topBanners as $banner)
						<div class="col-md-6 bottom-banner">
							<a href="{{ $banner->destination_url }}" target="_blank">
								<img src="{{ $banner->banner_url }}" class="img-responsive center-block fourSixtyEightImage" width="468" height="60">
							</a>
						</div>
					@endforeach
				</div>
				<h2>How You Make Money</h2>
				<p>Leased<strong>Ad</strong>Space now uses a very straightforward commissions structure.  If you refer a customer, and they make a purchase... you get a commission.  Simple and elegant.  No complex matrix to understand, no binary trees, no cycling, and definitely no complex instructions on how to receive your money.</p>
				<p>Your referrals are your referrals forever.  Anything they buy, regardless of whether you own the product they are purchasing... <em>regardless if you own a Leased<strong>Ad</strong>Space product at all...</em> will generate a commission for you providing you meet the <a href="https://leasedadspace.com/howitworks_affiliate/#requirements">Requirements For Selling</a> noted below.  If they purchase 3 packages over the span of 3 years, and providing you meet the requirements for selling, you will receive a commission.</p>
				<p>This affiliate program is <em>not</em> a multi-level (MLM) compensation program, nor is it any kind of investment program.  If your direct referrals make purchases, you receive a commission.  If your direct referrals don't purchase, you won't.  But don't sweat it.  We're developing TONS of awesome instructional content and "how-to" information to make you successful.</p>
				<h3>Products Eligible for Commission</h3>
				<p>Currently our product catalog consists of 7 different traffic packages that customers purchase, in order.  They are purchased in order, and without jumping around, to ensure that the benefits of lower level packages (such as solo ad sending frequency and adboard posting) are in place and form the solid base of the higher level package benefits.  You are eligible to sell <em>any of these products</em> regardless of whether or not you yourself own the package, providing you meet the selling eligibility requriements.  Additionally, we offer stand alone advertising packages called <a href="https://leasedadspace.com/para_info">ParaAds</a> that are also eligible for commissions on sales.</p>
				<h3>Commission Rates and Payout Frequency</h3>
				<p>Our commission rates are based on the traffic package you yourself own.  However, <strong><em>owning a package is not required to be an affiliate, nor is it required to earn commissions.  You can earn commissions on sales without purchasing any packages yourself.</em></strong>  &nbsp;Having said that, we encourage all affiliates to also purchase and use the advertising that they are trying to sell.  It's a little hard to convince a lead to purchase something that you yourself don't actually own or haven't used yourself.  As such, we reward serious affiliates who have invested the time, money and energy in to really understanding our poducts, how to leverage their value, and how to sell them, with higher commission payouts.  The three commissions tiers are:</p>
				<dl class="dl-horizontal">
					<dt>Recruit</dt>
					<dd>25% commission on all sales they refer.  Recruits (free members) do not themselves own a traffic package.</dd>
					<dt>Soldier</dt>
					<dd>50% commission on all sales they refer.  Soldiers own at least one traffic package themselves.</dd>
					<dt>General</dt>
					<dd>75% commission on all sales they refer.  Generals own the Red Diamond traffic package.</dd>
				</dl>
				<p>Again, you are not required to purchase anything to become an affiliate, but you will probably also be less successful with the affiliate program if you do not.  </p>
				<p>Our commissions are paid out to affiliates on a monthly basis.  Commssion runs start on the 15th of the month and payout is usually complete by the 20th.<br><br></p>
				<div class="row">
					@foreach($middleSmallTextBlogs as $blog)
						<div class="col-sm-4">
							<div class="gutter-ad-txt">
								<a href="{{ $blog->link }}" target="_blank" class="text-center">
									<div class="title">{{ $blog->title }}</div>
									<!-- #{title}-->
									<div>{{ $blog->line_one }}</div>
									<!-- #{line1}-->
									<div>{{ $blog->line_two }}</div>
									<!-- #{line2}-->
									<div class="title">{{ $blog->call_to_action }}</div>
								</a>
							</div>
						</div>
					@endforeach
				</div>
				<h3 id="requirements">Requirements For Selling</h3>
				<p>You are qualified to receive the commission on a sale if you are what we refer to as "an affiliate in good standing". That is a fancy way of saying "you must be actively working at your affiliate business, and reachable by us to earn commissions".  The requirements for being "an affiliate in good standing" are really pretty straight forward:</p>
				<ol>
					<li>New affiliates must pay a one time setup fee of $10.  Longtime LAS members who already own traffic packages are grandfathered in and do not need to pay this fee.  The fee is payable only once, regardless of how many times you disable and enable your affiliate services.</li>
					<li>If you are a US resident, you must provide us with a fully executed copy of a IRS W9 form.  Instructions for providing this can be found in the affliiates tools area of your backoffice.</li>
					<li>You must have activity on your account in the prior 180 days.  Qualifying activity includes: logging in to your LAS account, using any of your purchased LAS advertising services and receiving inbound hits to your affiliate link.  If your account goes dormant for 180 days or more in any of the previously listed ways, we will immediately deactivate your affiliate account.</li>
					<li>You must maintain a valid, active, and "non bouncing" email address where we can reach you with information regarding your LAS affiliate account.  If your email bounces when we try and reach you we will <em>immediately</em> suspend your affiliate status.</li>
					<li>You must be able to receive your commission payments via one of: PayPal, Bitcoin.</li>
				</ol>
				<p>That's it!  Like we said, it's really very simple!  If your affiliate status is not in good standing, we will deactivate your affiliate account.  In this case, you still have access to all your advertising tools, but you will not be eligible for commissions, nor will your referral hits to your affiliate link be recorded.  Pay attention to your affiliate status!</p>
				<div class="row">
					@foreach($bottomBanners as $banner)
						<div class="col-md-3 bottom-banner">
							<a href="{{ $banner->destination_url }}" target="_blank">
								<img src="{{ $banner->banner_url }}" class="img-responsive center-block" width="125" height="125">
							</a>
						</div>
					@endforeach
				</div>
				<p>Our traffic products are one-time purchases, starting at $9.97 to a high of $147.00.  They can be used to promote
					the product and services of your choosing, as long as those products and services DO NOT propagate Hate, Racism,
					Religion or Political bias. Neither should any traffic packages be used for the purpose of selling porn, adult
					content or similar content that may be deemed disturbing or abusive to the LeasedAdSpace.com users and customers.
					Should there be any report of abuse of this term; the offensive advertisement will be deleted without notice.
					Any repeat violations of this policy may result in termination of your account without refund, and forfeiture of
					any remaining traffic and impressions.</p>
				<h2>This is the real deal...</h2>
				<p>No where else online, will you ever be able to find this much advertising, for such a low cost. Even with the first $9.97 Pearl traffic package you are able to send 1 email to the entire membership of Leased Ad Space every month, with no further cost to do so.</p>
				<p>Leased Ad Space is a very unique opportunity where you can earn some very serious income selling the most wanted commodity online, and advertise your own programs, products and opportunities at the same time!</p>
			</div>
		</div>
	</div>
@endsection