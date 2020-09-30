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
                        <h1 class="ad-word">LogIn</h1>
                        <div class="lead-in">Let's get to work!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-section')
    <div class="container">
        <div class="row" style="padding-top:2em;">
            <div class="col-sm-6" style="padding-right:3em;">
                <h2 style="margin-top:0;">Please Login</h2>
                <hr style="margin-top:0px;">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{env('APP_URL'). '/login'}}" method="POST" id="loginForm" autocomplete="off" class="">
                            @csrf
                            <div class="form-group">
                                <label for="username" class="control-label">Username</label>
                                <div class="">
                                    <input type="null" class="form-control" name="username" id="username" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <div class="">
                                    <input type="password" class="form-control" name="password" id="password" value="">
                                </div>
                            </div>
                            <label for="none" class="control-label">Confiation and Options</label>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <div class="g-recaptcha" style="margin-left:-15px;" data-sitekey="6LefdCITAAAAANlnBDeX4j8-2Tm6cIQNCFnk7xz4"><div style="width: 304px; height: 78px;"><div><iframe src="./Login_files/anchor.html" width="304" height="78" role="presentation" name="a-35sqkfix5jrg" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./Login_files/saved_resource(1).html"></iframe></div>
                                </div>
                                <div class="checkbox col-lg-4">

                                </div>
                                <div class="col-sm-12">
                                    <br>
                                    <input type="submit" name="_action_Login" value="Login" class="btn btn-primary btn-lg btn-block" id="submit">
                                    <div class="small text-center">(<a href="https://www.leasedadspace.com/login/auth#trouble">Having trouble logging in?</a>)</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="padding-left:2em;">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 style="margin-top:0;">Having Trouble Logging In?</h2>
                        <hr style="margin-top:0px;">
                        <!--<p class="text-left visible-md visible-sm">Watch this video, or <a href="#trouble">click for more options!</a></p>-->
                        <p class="text-left">If you're having trouble logging in, click one of the two buttons below to watch a video that covers solutions to common account related problems.</p>
                        <p><button class="btn btn-lg btn-info btn-block" id="loginhelpbutton">Click For A Login Help Video</button></p>
                        <p><button class="btn btn-lg btn-info btn-block" id="resetpasswordhelpbutton">Click For A Password Reset Help Video</button></p>
                        <p>If after watching these videos you are still having issues, <a href="https://www.leasedadspace.com/login/auth#trouble">click here for more options!</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Not a Member Yet?</h2>
                        <hr style="margin-top:0px;">
                        <p style="padding:.5em 2em;">
                            <a href="{{env('APP_URL'). '/register'}}" style="text-decoration:none;">
                                <button type="button" class="btn btn-lg btn-block btn-success">Register For An Account!</button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="trouble"></div>
            <div class="col-sm-12 last-page-section">

                <h2 style="padding-top:3em;">STILL Having Trouble Logging In?</h2>
                <hr>
                <p>If you've forgotten your username, password or need your confirmation email resent, try one of these buttons:</p>
                <div class="text-center">
                    <a href="https://www.leasedadspace.com/register/forgotPassword"><button type="button" class="btn btn-default">Forgot Password</button></a>
                    <a href="https://www.leasedadspace.com/register/forgotUsername"><button type="button" class="btn btn-default">Forgot Username</button></a>
                    <a href="https://www.leasedadspace.com/register/resendConfirmationEmail"><button type="button" class="btn btn-default">Resend Confirmation Email</button></a>
                </div>
                <br>
                <p>If none of those buttons apply, try this one:</p>
                <div class="text-center">
                    <a href="https://www.leasedadspace.com/login/loginHelp"><button type="button" class="btn btn-default">None of these Apply! I need more information and help!</button></a>
                </div>
                <br><p>Or if all else fails... please contact support.</p>
            </div>
        </div>
    </div>
@endsection
