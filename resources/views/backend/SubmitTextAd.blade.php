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
                        <h1 class="ad-word">PURCHASE</h1>
                        <div class="lead-in">Time to grow your business!</div>
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
                <h1>Looks like it's time to purchase another traffic package!</h1>
                <hr>
                <p>Looks like it's time to <a href="{{env('APP_URL'). '/purchase_traffic_pack'}}">Purchase another Traffic Package!</a></p><p>
                </p><h2>Package Benefits Summary</h2>
                <hr>
                <p>Your current package level of 1 allows you to have the following number of ads:</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr><th>Type</th><th>Ads Allowed</th><th>Your Total Ads</th></tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Text Ads</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>125x125 Banner Ads</td>
                            <td>1</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>468x60 Banner Ads</td>
                            <td>1</td>
                            <td>0</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
