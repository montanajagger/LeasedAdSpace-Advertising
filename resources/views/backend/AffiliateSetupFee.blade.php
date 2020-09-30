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
                        <h1 class="ad-word">ACCOUNT SETUP</h1>
                        <div class="lead-in">One time setup fee</div>
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
                <h1>Affiliate Setup Fee Collection</h1>
                <p>In order to provide stellar service for our many affiliates, we charge a very low, one time fee of $10 USD to set up your affiliate account and maintain the services required to pay out commissions for our affiliates.  You will only be charged this fee once, regardless of how many times you disable or enable your affiliate account. </p>
                <p>If you need help with how to pay using Bitcoin, Litecoin, Ethereum, Bitcoin Cash or Altcoin click the blue buttons below.<br><br></p>
                <div class="row">
                    <div class="col-lg-6 col-md-offset-3">
                        <p class="text-center"><button class="btn btn-lg btn-info btn-block" id="bitcoinbutton">Click Here<br>For Crypto Purchasing Help</button></p>
                    </div>
                </div>

                <div>
                    <br>
                    <p>When you're finished watching the tutorial and you're ready to pay, proceed to the payment screen using the green button below!<br></p>
                    <hr><br>
                    <div class="col-sm-6">
                        <a href="{{env('APP_URL'). '/dashboard'}}" style="text-decoration:none;"><button type="button" class="btn btn-lg btn-block btn-danger">Cancel</button></a>
                    </div>
                    <div class="col-sm-6">
                        <form action="https://www.coinpayments.net/index.php" method="post">
                            <input type="hidden" name="cmd" value="_pay">
                            <input type="hidden" name="reset" value="1">
                            <input type="hidden" name="custom" value="1488031">
                            <input type="hidden" name="first_name" value="Serhii">
                            <input type="hidden" name="last_name" value="Ilchuk">
                            <input type="hidden" name="email" value="surgijilcuk@gmail.com">
                            <input type="hidden" name="want_shipping" value="0">
                            <input type="hidden" name="merchant" value="9047788721666ffb8cccb0d347be46c8">
                            <input type="hidden" name="currency" value="USD">
                            <input type="hidden" name="amountf" value="10.00">
                            <input type="hidden" name="item_name" value="LeasedAdSpace Affiliate Setup Fee">
                            <input type="hidden" name="item_number" value="99">
                            <input type="hidden" name="allow_extra" value="1">
                            <input type="hidden" name="ipn_url" value="https://www.leasedadspace.com/ipn/receiveCoinpaymentsIPN">
                            <input type="hidden" name="success_url" value="https://www.leasedadspace.com/purchase/confirmation?itemNumber=99">
                            <input type="hidden" name="cancel_url" value="https://www.leasedadspace.com/member/affiliateFeeNotPaid">
                            <button type="submit" class="btn btn-lg btn-block btn-success">
                                Proceed to Pay Setup Fee
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="payinstructions">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Purchasing with PayPal, Debit / Credit Cards or Bitcoin</h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="560" height="315" src="./LeasedAdSpace Affiliate Terms and Conditions_files/saved_resource.html" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <p class="text-center"><button type="button" id="dismissVideo" class="btn btn-lg btn-primary " data-dismiss="modal" style="margin-top:2em;">Close</button></p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('js')
    $('#paypalbutton').click(function () {
    var src = 'https://www.youtube.com/embed/oS4k6-IdJtY?autoplay=1';
    $('#payinstructions').modal('show');
    $('#payinstructions iframe').attr('src', src);
    });

    $('#bitcoinbutton').click(function () {
    var src = 'https://player.vimeo.com/video/347037446?title=0&byline=0&portrait=0';
    $('#payinstructions').modal('show');
    $('#payinstructions iframe').attr('src', src);
    });

    $('#payinstructions').on('hidden.bs.modal', function () {
    $('#payinstructions iframe').removeAttr('src');
    })
@endsection
