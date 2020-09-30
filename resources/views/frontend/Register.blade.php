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
            <div class="container">
                <h1>Register Now!</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="container">

                <form action="https://www.leasedadspace.com/register/save" method="post" class="form-horizontal" name="regForm" id="regForm">
                    <div class="form-group ">
                        <label for="firstName" class="control-label col-xs-2">First Name</label>
                        <div class="col-xs-10">
                            <input type="null" class="form-control" name="firstName" value="" placeholder="First Name" id="firstName">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="lastName" class="control-label col-xs-2">Last Name</label>
                        <div class="col-xs-10">
                            <input type="null" class="form-control" name="lastName" value="" placeholder="Last Name" id="lastName">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="email" class="control-label col-xs-2">Email</label>
                        <div class="col-xs-10">


                            <input type="null" class="form-control" name="email" value="" placeholder="Email Address" data-placement="top" data-toggle="popover" data-trigger="focus" data-html="true" title="&lt;strong&gt;Email Provider Reliability - Use GMail!&lt;/strong&gt;" data-content="We &lt;strong&gt;strongly encourage&lt;/strong&gt; the use of a gmail address. Other providers have unreliable delivery rates!&lt;br/&gt;&lt;br/&gt;&lt;strong&gt;If you do not get your confirmation email, this is likely why!&lt;/strong&gt;" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmEmail" class="control-label col-xs-2">Retype Email</label>
                        <div class="col-xs-10">
                            <input type="null" class="form-control" id="confirmEmail" name="confirmEmail" value="" placeholder="MAKE SURE IT&#39;S RIGHT!!">
                            <small class="text-muted">Accounts created with false or "one time use" disposable email addresses will be deleted and those members will be permanently banned!</small>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="username" class="control-label col-xs-2">Desired Username</label>
                        <div class="col-xs-10">
                            <input type="null" class="form-control" name="username" value="" placeholder="username" id="username">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="control-label col-xs-2">Password</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" name="password" value="" placeholder="Password" id="password">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="confirmPassword" class="control-label col-xs-2">Confirm Password</label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" name="confirmPassword" value="" placeholder="Confirm Password" id="confirmPassword">
                            <small class="text-muted">passwords must be between 8 and 64 characters, and contain a letter, a number and a special character from the following list: !@#$%^&amp;</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <input type="submit" name="_action_save" value="Register" class="btn btn-primary">
                        </div>
                    </div>
                    <input type="hidden" name="country" value="UA" id="country">
                </form>
            </div>
        </div>
    </div>
@endsection
