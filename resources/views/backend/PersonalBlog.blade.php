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
                        <h1 class="ad-word">YOUR BLOG</h1>
                        <div class="lead-in">It's poetry... pure poetry</div>
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
                <div class="row" style="margin-top:1em;">
                    <div class="col-sm-6">
                        <a href="{{env('APP_URL'). '/personal_blog'}}" class="sub-nav-link"><p class="text-center sub-nav-item">Blog Admin Home</p></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{env('APP_URL'). '/draft_post'}}" class="sub-nav-link"><p class="text-center sub-nav-item">Draft Post</p></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="margin-top:.75em;margin-bottom:0px;">
                    </div>
                </div>
                <h1>Personal Blog</h1>
                <hr>
                <p>Content posted to your personal blog is displayed in two ways on the Leased<strong>Ad</strong>Space site.
                    First is from your personal blog index page itself, and secondly, your 5 most recent posts are also quick linked from your profile page
                    in the section titled "Checkout My Writing".</p>
                <div class="well">
                    <p class="text-center">Personal Blog Index Page:&nbsp;&nbsp;&nbsp; <a href="https://www.leasedadspace.com/members/SI/blog">https://www.leasedadspace.com/members/SI/blog</a></p>
                    <p class="text-center"><strong>And...</strong></p>
                    <p class="text-center">Public Profile Page:&nbsp;&nbsp;&nbsp;  <a href="https://www.leasedadspace.com/members/SI">https://www.leasedadspace.com/members/SI</a></p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Blog Posts <small>by publication date</small></h2>
                        <div class="">
                            <table class="table">
                                <thead>
                                <tr><th>Title</th><th>Status</th><th>Create Date</th><th>Last Updated</th><th>Publication Date</th><th>Views</th><th>Actions</th></tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
