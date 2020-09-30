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
                        <h1 class="ad-word">SOLO AD SETUP</h1>
                        <div class="lead-in">Did you forget something?...</div>
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
                <h1>Missing Solo Ad Receipt Address</h1>
                <hr>
                <p>Looks like you haven't set up the email address where you would like to <em>receive</em> solo ad blasts from other members.</p>
                <p>The solo ad blast service works like this:
                </p><ol>
                    <li>You provide us with an email address where other members can send solo ads to you</li>
                    <li>In exchange, you <em>yourself</em> get to send solo ads to other members.  Providing...</li>
                    <li>You have enough solo ad view credits in your account (thresholds based on your package level) and enough
                        time has elapsed since the last time you sent a solo ad (again, based on your package level)</li>
                </ol>
                <p></p>
                <p>But not to worry!  Setting up your solo ad email preferences is easy! Simply login and go to your
                    address.  We'll send you an email confirmation to prove you own the account and that it's real.  Click the link in that email and
                    <a href="{{env('APP_URL'). '/edit_profile'}}">Profile</a>, Find the section for solo ad preferences, and then add your email
                    and you're all set!  Easy Peazy!</p>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
