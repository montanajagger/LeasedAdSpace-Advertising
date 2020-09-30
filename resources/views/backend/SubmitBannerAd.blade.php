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
                        <h1 class="ad-word">CREATE BANNER AD</h1>
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
                <h1>Create New Banner Ad</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 last-page-section">
                <div class="col-sm-12">
                    <div id="bannerPreview" class="well text-center collapse">
                    </div>
                </div>
                <form action="https://www.leasedadspace.com/ad/index" method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="title" class="col-lg-3 control-label">Title:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="title" value="" placeholder="Banner titles are for your reference only to help remind you what the banner is" id="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bannerType" class="col-lg-3 control-label">Banner Type (size)</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="bannerType" id="bannerType">
                                <option value="ONE_TWENTY_FIVE">125x125</option>
                                <option value="FOUR_SIXTY_EIGHT">468x60</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bannerUrl" class="col-lg-3 control-label">Banner URL:</label>
                        <div class="col-lg-8">
                            <input type="url" class="form-control" name="bannerUrl" value="" placeholder="The link to the banner image file. i.e. http://www.mysite.com/my-image.jpg" id="bannerUrl">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="destinationUrl" class="col-lg-3 control-label">Destination URL:</label>
                        <div class="col-lg-8">
                            <input type="url" class="form-control" name="destinationUrl" value="" placeholder="The link to the page you&#39;re advertising, such as a splash or squeeze page" id="destinationUrl">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="impressionsAllocated" class="col-lg-3 control-label">Impressions:</label>
                        <div class="col-lg-8">
                            <input type="number" class="form-control" name="impressionsAllocated" value="" id="impressionsAllocated">
                            <span class="label label-success"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" name="_action_saveBannerAd" value="Submit" class="btn btn-primary">

                            <span></span>
                            <input type="submit" name="_action_Cancel" value="Cancel" class="btn btn-default">
                            <input type="hidden" name="version" value="" id="version">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    $('#bannerUrl').focusout(function(){
    var bannerType = $('#bannerType').val();
    var bannerSize
    if(bannerType == 'FOUR_SIXTY_EIGHT'){
    bannerSize = 468
    } else {
    bannerSize = 125
    }
    if($(this).val()){
    var previewIsVisible = $('#bannerPreview').is(":visible");
    if(previewIsVisible){
    $('#bannerPreview').fadeTo("slow", 0.00, function(){
    $(this).slideUp("slow", function() {
    $(this).css('opacity', '0.0').html("<p class='text-center'>Banner Preview</p><img id='bannerImgUrl' src='"+ $('#bannerUrl').val() + "' style='width:" + bannerSize + "px;'/><p class='text-center' style='margin-top:1em;'>If it looks wrong here, it will look wrong on the website!</p>")
    $(this).slideDown("slow", function(){
    $(this).fadeTo("slow", 1.0);
    })
    });
    });
    } else {
    $('#bannerPreview').css('opacity', '0.0').html("<p class='text-center'>Banner Preview</p><img id='bannerImgUrl'  src='"+ $('#bannerUrl').val() + "' style='width:" + bannerSize + "px;'/><p class='text-center' style='margin-top:1em;'>If it looks wrong here, it will look wrong on the website!</p>")
    $('#bannerPreview').slideDown("slow", function(){
    $(this).fadeTo("slow", 1.0);
    })
    }
    } else {
    var previewIsVisible = $('#bannerPreview').is(":visible");
    if(previewIsVisible){
    $('#bannerPreview').fadeTo("slow", 0.00, function(){
    $(this).slideUp("slow");
    });
    }
    }
    });

    $('#bannerType').change(function(){
    var bannerSize;
    if($(this).val() == 'FOUR_SIXTY_EIGHT'){
    bannerSize = 468;
    } else {
    bannerSize = 125;
    }
    $('#bannerImgUrl').attr('style','width: ' +  bannerSize + 'px');
    });
@endsection
