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
                        <div class="lead-in">Let's kick this in to high gear!</div>
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
                <h1>Purchase Traffic Packages</h1>
                <hr>
                <div class="panel-group" id="accordion">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="https://www.leasedadspace.com/purchase/index#collapseTwo" rel="purchase">
                            <div class="panel-heading">
                                <h4 class="panel-title">Pay with Bitcoin</h4>
                            </div>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse in">

                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Purchase your <strong>Amethyst traffic package</strong> using Bitcoin</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-sm-12 purchase-inst-block">
                                                <div class="row">
                                                    <div class="col-sm-10 col-sm-offset-1">
                                                        <br>
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h3 class="text-center panel-title">To Pay with Bitcoin...</h3>
                                                            </div>
                                                            <div class="panel-body">
                                                                <p class="text-left">Click the <em>"Pay Now With Coinpayments!"</em> button below and then <strong>click the blue "BTC" button</strong> on the right side of the screen (it will turn green when selected) in the "Choose Your Coin" section.  Then click <strong>Complete Checkout.</strong></p><p>
                                                                </p><p class="text-center"><button class="btn btn-lg btn-info btn-block" id="bitcoinbutton">Click For More Bitcoin Purchasing Help</button></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <br>
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



                                                            <input type="hidden" name="amountf" value="17.00">

                                                            <input type="hidden" name="item_name" value="Amethyst Traffic Package">
                                                            <input type="hidden" name="item_number" value="2">
                                                            <input type="hidden" name="allow_extra" value="1">
                                                            <input type="hidden" name="ipn_url" value="https://www.leasedadspace.com/ipn/receiveCoinpaymentsIPN">
                                                            <input type="hidden" name="success_url" value="https://www.leasedadspace.com/purchase/confirmation?itemNumber=2">
                                                            <input type="hidden" name="cancel_url" value="https://www.leasedadspace.com/purchase/cancel">

                                                            <input type="submit" name="_action_Pay Now With Coinpayments!" value="Pay Now With Coinpayments!" style="margin-top:1.25em;white-space:normal;" class="btn btn-lg btn-block btn-success">

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="disclaimerModal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Purchase Disclaimer</h4>
                </div>
                <div class="modal-body">
                    <p class="text-left">You are about to purchase an online advertising and traffic package!  This is an <strong>intangible, electronically delivered product</strong>.  Purchasing a package implies acceptance of the following terms:</p>
                    <ol>
                        <li>You accept our <a href="https://www.leasedadspace.com/tos" rel="purchase" target="_blank">Advertiser Terms of Service</a> and our <a href="https://www.leasedadspace.com/privacy-policy" rel="purchase" target="_blank">Privacy Policy</a>.</li>
                        <li>Purchases of packages are <strong>NON REFUNDABLE</strong> and <strong>all purchases are final</strong>.  See our <a href="https://www.leasedadspace.com/faq/index" rel="purchase" target="_blank">FAQ</a> for more information.</li>
                        <li>No warranty, either expressed or implied is offered.  Furthermore, we make no guarantees as to the effectiveness of the ads you place via these packages as we cannot control how you choose to use them.</li>
                        <li>All ParaAd Purchases are digitally delivered online, and are available in your members area, once purchase and payment have been confirmed.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Accept</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade" id="payinstructions">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Purchasing with PayPal, Debit / Credit Cards or Bitcoin</h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="560" height="315" src="./Purchase Traffic Package_files/saved_resource.html" frameborder="0" allowfullscreen=""></iframe>
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
    $('#disclaimerModal').modal('show');

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
    });
@endsection
