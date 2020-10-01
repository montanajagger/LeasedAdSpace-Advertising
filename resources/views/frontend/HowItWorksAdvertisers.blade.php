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
						<h1>How it Works for Advertisers</h1>
						<hr>
						<p>Leased Ad Space is the most unique opportunity online. We've developed a viral traffic platform with many nuanced offerings to get eyeballs on your offers faster.  Additionally, most of our products and services provide long term and / or renewable benefits.  For instance, starting with our lowest priced Traffic Package, the Pearl Package, you get lifetime access to our SoloAdBlast safelist mailing system.  At the top of our traffic package list, the Red Diamond package gives you benefits that renew every month, including rollover of unused impressions!  We're also adding new products and services all the time, such as our <a href="https://leasedadspace.com/para_info">ParaAds Service</a> that focuses traffic streams and target your offers in multi-dimensional ways!</p>
						<p>But we don't stop there.  Many marketers struggle with building an online presence and name / brand recognition.  We provide many opportunities, <em>even to members who haven't purchased a traffic package</em> that allow them to start building their online presence through a personal blog and customizable profile pages.</p>
					</div>
				</div>
				<div class="row">
					@foreach($topBanners as $banner)
						<div class="col-md-3 bottom-banner">
							<a href="{{ $banner->destination_url }}" target="_blank">
								<img src="{{ $banner->banner_url }}" class="img-responsive center-block" width="125" height="125">
							</a>
						</div>
					@endforeach
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h2>What You Get</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10">
						<p>All traffic package purchasers will receive internal and external advertising and traffic, using the following types of ads.</p>
						<h3>Traffic Package Benefits</h3>
						<ol>
							<li>Text Ads</li>
							<li>Banner Ads</li>
							<li>Email Marketing/Solo ads</li>
							<li>A Public Profile Page</li>
							<li>A personal blog where you can post your own unique content</li>
							<li>Our AdBoard Directory</li>
							<li>Search Engine traffic/all content is public</li>
						</ol>
						<p>Our packages are listed below complete with the impression count and number of times you can send solo ads, etc.</p>
						<p><strong>All traffic packages are one-time purchases, not monthly</strong></p>
					</div>
					@if(isset($middleSmallTextBlogs))
						<div class="col-sm-2 gutter-ad-txt">
							<a href="{{ $middleSmallTextBlogs->link }}" target="_blank" class="text-center">
								<div class="title">{{ $middleSmallTextBlogs->title }}</div>
								<!-- #{title}-->
								<div>{{ $middleSmallTextBlogs->line_one }}</div>
								<!-- #{line1}-->
								<div>{{ $middleSmallTextBlogs->line_two }}</div>
								<!-- #{line2}-->
								<div class="title">{{ $middleSmallTextBlogs->call_to_action }}</div>
							</a>
						</div>
					@endif
				</div>
				<div class="row">
					<div class="col-sm-12 package-panel package-panel-zero">
						<div class="col-sm-3">
							<div class="description package-name">All Members</div>
							<div class="price">$0</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Personal Profile</div>
							<div class="">All members are given a free customizable personal profile page.  Get noticed!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Personal Blog</div>
							<div class="">Start generating content and getting your name out there using our free Personal Blog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">Post in our Ad Board Directory using click credits. 10 credits per post</div>
						</div>
					</div>
					<div class="col-sm-12 package-panel package-panel-pearl">
						<div class="col-sm-3">
							<div class="description package-name">Pearl Package</div>
							<div class="price">$9.97</div>
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
							<div class="">1 every 28 days, cross posted to our AdBlog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">1 free post per day in our Ad Board Directory.  Additional posts: 7 credits</div>
						</div>
					</div>
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
							<div class="">1 every 14 days, cross posted to our AdBlog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">2 free posts per day in our Ad Board Directory.  Additional posts: 7 credits</div>
						</div>
					</div>
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
							<div class="">1 every 9 days, cross posted to our AdBlog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">3 free posts per day in our Ad Board Directory.  Additional posts: 7 credits</div>
						</div>
					</div>
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
							<div class="">1 every 7 days, cross posted to our AdBlog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">4 free posts per day in our Ad Board Directory.  Additional posts: 7 credits</div>
						</div>
					</div>
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
							<div class="">1 every 5 days, cross posted to our AdBlog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">5 free posts per day in our Ad Board Directory.  Additional posts: 7 credits</div>
						</div>
					</div>
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
							<div class="">1 every 4 days, cross posted to our AdBlog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">6 free posts per day in our Ad Board Directory.  Additional posts: 7 credits</div>
						</div>
					</div>
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
							<div class="">1 every 48 hours, cross posted to our AdBlog!</div>
						</div>
						<div class="col-sm-3">
							<div class="description">Ad Board Directory Posts</div>
							<div class="">25 free posts per day in our Ad Board Directory.  Additional posts: 7 credits</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<p>Text and banner ad impressions are cumulative from package to package.  Solo email and permanent Ad Board Directory
							entries are not cumulative (you get what is listed in the package you own).  See <a href="{{env('APP_URL'). '/howitworks'}}">Package Benefits Explained</a> below for more details.</p>
						<p><small><span class="fa fa-asterisk"></span> Your traffic package purchases are <strong>NON-REFUNDABLE</strong>. All payments are final. We cannot refund money to you that has already been paid out to another member.  We never even handle that money - it is paid directly to our members.</small></p>
						<p><small><span class="fa fa-asterisk"></span> Because each package contains at least some "renewable" or repeat benefit (solo ads for instance), packages must be purchased in order.  You must purchase all lower level packages before purchasing a higher level package.</small></p>
					</div>
					<div class="col-sm-12">
						<h3 id="examples">Package Benefits Explained</h3>
						@if(isset($bottomSmallTextBlogs))
							<div class="col-sm-2 pull-right">
								<div class="gutter-ad-txt">
									<a href="{{ $bottomSmallTextBlogs->link }}" target="_blank" class="text-center">
										<div class="title">{{ $bottomSmallTextBlogs->title }}</div>
										<!-- #{title}-->
										<div>{{ $bottomSmallTextBlogs->line_one }}</div>
										<!-- #{line1}-->
										<div>{{ $bottomSmallTextBlogs->line_two }}</div>
										<!-- #{line2}-->
										<div class="title">{{ $bottomSmallTextBlogs->call_to_action }}</div>
									</a>
								</div>
							</div>
						@endif
						<p>Example, when you purchase the Pearl traffic package, for $9.97, you will receive 8,000 banner ad/4,000 text ad
							impressions. These impressions are not renewable monthly.  You will need to purchase the next traffic package to get more impressions.</p>
						<p>However, the Pearl package also gives you the ability to send 1 solo ad to the entire subscribed database of Leased<strong>Ad</strong>Space every 28 days, as well as 1 free post per day in our Ad Board Directory.  These <em>are</em> long term benefits as long as you are a member!</p>
						<p></p>
						<p>When you move on to purchase the Amethyst traffic package, for $17, you will get 12,000 more banner ad and 6,000
							more text ad impressions. Again these impressions are not renewable monthly and you will need to purchase the next traffic package to get more impressions.</p>
						<p>Owning the Amethyst package also allows you to send solo ads more frequently, 1 every 14 days. Additionally,
							you now have 2 free posts per day in our Ad Board Directory instead of one.</p>
						<p>This is how your advertising benefits grow as you continue to purchase the next traffic package in line. It also explains why you cannot choose to purchase "only" the Sapphire package for instance, because the benefits of each package are built upon the foundation of the packages beneath it.  This model holds true up until the Red Diamond package...</p>
						<p>Once you purchase the Red Diamond traffic package things change a little bit.  Your Banner ads, and text ads
							<strong>will refresh every month</strong> at the rate of 110,000 banner ads and 60,000 text ads each month (note
							this is the only packge where impressions refresh each month). At this level you can now send 1 solo ad to the
							entire database of Leased Ad Space every 48 hours. You will also be able to post 25 free posts per day in our Ad Board Directory.</p>
					</div>
				</div>
				<div class="row">
					@foreach($bottomBanners as $banner)
						<div class="col-md-6 bottom-banner">
							<a href="{{ $banner->destination_url }}" target="_blank">
								<img src="{{ $banner->banner_url }}" class="img-responsive  center-block fourSixtyEightImage" width="468" height="60">
							</a>
						</div>
					@endforeach
				</div>
				<p>You are not required to become an LAS affiliate or to refer anyone to our site in order to purchase and use our traffic products.  Becoming an affiliate and choosing to sell our traffic products for profit is completely optional.  If you're interested in becoming an affiliate for Leased<strong>Ad</strong>Space, <a href="{{env('APP_URL'). '/howitworks_affiliate'}}">you can find out more information here</a></p><p>
				</p><p>Our traffic products are one-time purchases, starting at $9.97 to a high of $147.00.  They can be used to promote
					the product and services of your choosing, as long as those products and services DO NOT propagate Hate, Racism,
					Religion or Political bias. Neither should any traffic packages be used for the purpose of selling porn, adult
					content or similar content that may be deemed disturbing or abusive to the Leased<strong>Ad</strong>Space.com users and customers.
					Should there be any report of abuse of this term; the offensive advertisement will be deleted without notice.
					Any repeat violations of this policy may result in termination of your account without refund, and forfeiture of
					any remaining traffic and impressions.</p>
				<h2>This is the real deal...</h2>
				<p>No where else online, will you ever be able to find this much advertising, for such a low cost. Even with the first $9.97 Pearl
					traffic package you are able to send 1 email to the entire membership of Leased Ad Space every month, with no further cost to do so.</p>
			</div>
		</div>
	</div>
@endsection