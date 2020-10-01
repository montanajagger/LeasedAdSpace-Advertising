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
		p {
			display: inline-block;
		}
		p.txt-more-details {
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
				<div class="row justify-content-end">
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
					<small class="pull-right" style="padding-top:.5em;"><strong><a href="https://leasedadspace.com/login.php">Post Your Free Ad Now!</a></strong></small>
				</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2 p-0">
				<div class="panel panel-default" style="margin-bottom:6em;">
					<div class="panel-heading">
						<h4 class="panel-title text-center">Ad Board Stats</h4>
					</div>
					<div class="panel-body">
						<div class="d-flex justify-content-between">
							<span class="hidden-sm hidden-md"><strong>Todays Posts:</strong></span>
							<span class="pull-right">{{ $todayCount }}</span>
						</div>
						<div class="d-flex justify-content-between">
							<p><span class="hidden-sm">7 Day Posts:</span></p>
							<p><span class="pull-right">{{ $weekPostsCount }}</span></p>
						</div>
						<div class="d-flex justify-content-between">
							<p><span class="hidden-sm">30 Day Posts:</span></p>
							<p><span class="pull-right">{{ $monthPostsCount }}</span></p>
						</div>
						<div class="d-flex justify-content-between">
							<p><span class="hidden-sm"><strong>Todays Views:</strong></span></p>
							<p><span class="pull-right">{{ $todayViewsCount }}</span></p>
						</div>
						<div class="d-flex justify-content-between">
							<p><span class="hidden-sm">7 Day Views:</span></p>
							<p><span class="pull-right">{{ $weekViewsCount }}</span></p>
						</div>
						<div class="d-flex justify-content-between">
							<p><span class="hidden-sm">30 Day Views:</span></p>
							<p><span class="pull-right">{{ $monthViewsCount }}</span></p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 gutter-ad-img-sm" style="margin-bottom:6em;">
					<a href="https://leasedadspace.com/ad/visitBannerLink/31" target="_blank" class="">
						<img src="http://richardweberg.com/images/125x125.gif" class="img-responsive center-block">
					</a>
				</div>

				<div class="col-sm-12 gutter-ad-txt" style="margin-bottom:6em;">
					<a href="https://leasedadspace.com/ad/visitTextLink/3167" target="_blank" class="text-center">
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
					<a href="https://leasedadspace.com/ad/visitBannerLink/33" target="_blank" class="">
						<img src="http://richardweberg.com/images/125x125.gif" class="img-responsive center-block">
					</a>
				</div>
				<div class="col-sm-12 gutter-ad-txt">
					<a href="https://leasedadspace.com/ad/visitTextLink/685141" target="_blank" class="text-center">
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
						<div class="col-sm-10 p-2" style="font-size: 18px;">
							<p>
								<a href="https://leasedadspace.com/adboard/preVisit/1489490" target="_blank" style="font-size: 18px">
									{{ $post->title }}
								</a>
							</p>
							<p class="text-left"></p>
							<br>
							{!! $post->shortDescription !!}
							<p class="txt-more-details" style="cursor: pointer;"  data-toggle="modal" data-target="#modal-{{$post->id}}">(<span style="color: #ff0000">More Details →</span>)</p>
							<p></p>
							<p></p>
							<hr style="margin:0px">
							<p class="small">
								<strong>{{ $post->thing_count }} views</strong> — posted
								<strong>
									<span title="9-9-2020 4:45:57 AM">3 hours</span>
								</strong>
								ago by
								<a href="https://leasedadspace.com/members/afisher">
									{{ $post->first_name . ' ' . $post->last_name }}
								</a>
							</p>
						</div>
						<div class="modal fade" id="modal-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="moreContainerModalLabel">
							<div class="modal-dialog modal-medium" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="moreContainerModalLabel">{{ $post->title }}</h4>
									</div>
									<div class="modal-body">
										{{ $post->description }}
										<br>
										<br>
										<p><a href="https://leasedadspace.com/adboard/preVisit/1489308" target="_blank">https://www.mylistleverage.com/vp/seelyclark/lasadboard</a></p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
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
						<h4 class="panel-title text-center"><a href="https://leasedadspace.com/red_diamonds" style="color:white;"><u>Hot Content From Market Leaders</u></a></h4>
					</div>
					<div class="panel-body">
						<a href="https://leasedadspace.com/promo" style="color:white;">
							<div class="text-center stat-panel stat-panel-two">
								<strong>Want to see your blog posts here?</strong>
							</div>
						</a>
						<p class="small text-center">
							<a href="https://leasedadspace.com/members/anantshakti/blog/1489483/automate-your-affiliate-income-effortlessly" target="_blank">Automate your affiliate income effortlessly...</a>
						</p>
						<hr style="margin:0px">
						@foreach($lastTenPosts as $post)
							<p class="small" style="margin-bottom:1em;">
								<span class="visible-lg visible-xs text-left">
									<strong>{{ $post->thing_count }}</strong>
									views — posted
									{{ $post->ago }}
								</span>
							</p>
							<p class="small text-center">
								<a href="https://leasedadspace.com/members/ShaunPrice/blog/1488903/bitcoin-whale-transfers-641-million-of-btcs" target="_blank">{{ $post->title }}</a>
							</p>
						@endforeach
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title text-center"><a href="https://leasedadspace.com/leaders" style="color:white;"><u>Recent Sales &amp; Leader Boards</u></a></h4>
					</div>
					<div class="panel-body">
						<a href="https://leasedadspace.com/leaders" style="color:white;"><div class="text-center stat-panel stat-panel-three"><strong>See all recent sales and leader boards here!</strong></div></a>
						<p class="small text-center">Frank Bauer (<a href="https://leasedadspace.com/members/add2it">add2it</a>)
							earned $4.84 for the sale of -  Pearl!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="9-5-2020 6:30:41 AM">4 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="9-5-2020 6:30:41 AM">4 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Emma Baker (<a href="https://leasedadspace.com/members/LuxLife">LuxLife</a>)
							earned $13.10 for the sale of -  Emerald Traffic Package!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="8-31-2020 4:17:08 PM">8 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="8-31-2020 4:17:08 PM">8 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Emma Baker (<a href="https://leasedadspace.com/members/LuxLife">LuxLife</a>)
							earned $8.24 for the sale of -  Amethyst Traffic Package!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="8-23-2020 6:28:07 PM">16 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="8-23-2020 6:28:07 PM">16 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Devesh Krishna (<a href="https://leasedadspace.com/members/DeveshKrishna">DeveshKrishna</a>)
							earned $4.84 for the sale of -  Pearl!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="8-23-2020 2:42:11 AM">17 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="8-23-2020 2:42:11 AM">17 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Emma Baker (<a href="https://leasedadspace.com/members/LuxLife">LuxLife</a>)
							earned $4.84 for the sale of -  Pearl Traffic Package!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="8-4-2020 11:17:06 PM">35 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="8-4-2020 11:17:06 PM">35 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Edward Keyte (<a href="https://leasedadspace.com/members/edkeyte">edkeyte</a>)
							earned $20.35 for the sale of -  10 Day!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="7-25-2020 2:46:10 PM">45 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="7-25-2020 2:46:10 PM">45 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Darren Olander (<a href="https://leasedadspace.com/members/darrenolander">darrenolander</a>)
							earned $19.64 for the sale of -  Emerald Traffic Package!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="7-19-2020 6:32:12 AM">52 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="7-19-2020 6:32:12 AM">52 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Robert Fraser (<a href="https://leasedadspace.com/members/robf">robf</a>)
							earned $12.37 for the sale of -  Amethyst Traffic Package!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="7-11-2020 1:30:13 AM">60 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="7-11-2020 1:30:13 AM">60 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Bryan Stoker (<a href="https://leasedadspace.com/members/rbstoker">rbstoker</a>)
							earned $12.35 for the sale of -  5 Day Para Ad!</p>
						<hr style="margin:0px">
						<p class="small" style="margin-bottom:1em;">
							<span class="visible-lg visible-xs text-right"><strong><span title="6-26-2020 9:25:07 PM">74 days</span></strong> ago</span>
							<span class="hidden-lg hidden-xs text-right"><strong><span title="6-26-2020 9:25:07 PM">74 days</span></strong> ago</span>
						</p>
						<p class="small text-center">Joe Bulik (<a href="https://leasedadspace.com/members/homebizjoe">homebizjoe</a>)
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

@section('js')
	<script>
		$(document).ready(function() {
		});
	</script>
@endsection
