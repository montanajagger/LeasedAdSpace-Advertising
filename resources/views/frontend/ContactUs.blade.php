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
                        <h1 class="ad-word">Get In Touch!</h1>
                        <div class="lead-in">We love to hear from you!</div>
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
                <h1>Contact Us!</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">


                <p>We'd love to hear from you!  We at Leased<strong>Ad</strong>Space believe strongly in leveraging the power of the
                    Internet as a business tool.  As such, we have a limited physical office presence.  Below are the best ways to get
                    in contact with us!</p>
                <h2>Support</h2>
                <p>Please visit us at <a href="https://reply2frank.com/" target="_blank">https://reply2frank.com/</a></p>
            </div>
        </div>
    </div>
@endsection
