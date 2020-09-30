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
                        <h1 class="ad-word">EDIT TEXT AD</h1>
                        <div class="lead-in">Let's craft something beautiful...</div>
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
                <h1>Edit Text Ad</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 last-page-section">
                <div class="row">
                    <div class="col-sm-12">
                        <p>Small Text Ads are displayed throughout the Leased<strong>Ad</strong>Space network of content. Use these to advertise your
                            other programs and offerings to visitors of our site!</p>
                        <p class="small"><strong>Note:</strong> Small Text Ads have a maximum line length of 35 characters to ensure proper display
                            on the various pages of our site!</p>
                    </div>
                </div>
                <hr>
                <form action="https://www.leasedadspace.com/ad/index/1488039" method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="title" class="col-lg-3 control-label">Title</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="title" value="Free advertising" id="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lineOne" class="col-lg-3 control-label">Line One</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="lineOne" value="Hello" id="lineOne">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lineTwo" class="col-lg-3 control-label">Line Two</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="lineTwo" value="How are you?" id="lineTwo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="link" class="col-lg-3 control-label">Destination Link</label>
                        <div class="col-lg-8">
                            <input type="url" class="form-control" name="link" value="https://google.com" placeholder="The link to the page you&#39;re advertising, such as a splash or squeeze page" id="link">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="callToAction" class="col-lg-3 control-label">Call To Action</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="callToAction" value="OK" id="callToAction">
                            <small>(In marketing, a <a href="https://en.wikipedia.org/wiki/Call_to_action_(marketing)" target="_blank">Call to Action (CTA)</a> is an instruction to the audience to provoke an immediate response)</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" name="_action_updateTextAd" value="Submit" class="btn btn-primary">

                            <span></span>
                            <input type="submit" name="_action_Cancel" value="Cancel" class="btn btn-default">
                            <input type="hidden" name="version" value="6" id="version">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
