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
                        <h1 class="ad-word">PURCHASES</h1>
                        <div class="lead-in">All the wonderful things you bought!</div>
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
                <h1>Purchase History</h1>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr><th>Timestamp</th><th>Description</th><th>Price</th><th>Status</th><th>Status Description</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>9-5-2020 at 7:19:17 AM UTC</td>
                                <td>Pearl</td>
                                <td>USD9.97</td>
                                <td>COMPLETE</td>
                                <td>Complete</td>
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
