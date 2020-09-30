<header role="banner" class="navbar navbar-fixed-top">
    <div class="container" id="nav-container">

            <div class="navbar-header col-sm-12">
                            <span data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle collapsed">
                              <span class="sr-only">toggle navigation</span>
                              <span id="touch-menu-toggle" class="fa fa-bars"></span>
                            </span>
                <div class="skew">
                    <div class="skew-inner"><a href="{{env('APP_URL'). '/'}}" class="navbar-brand"><span class="las-logo"></span> Leased<strong>Ad</strong>Space</a></div>
                </div>

                <nav id="mainNav" role="navigation" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!--<li><a href="/" data-toggle="collapse" data-target=".navbar-collapse.in"><small><em>Online Now: <strong>36460</strong></em></small></a></li>-->
                        <li class="hidden-sm">
                            <a href="{{env('APP_URL'). '/howitworks'}}" data-toggle="collapse" data-target=".navbar-collapse.in">How it Works</a>
                        </li>
                        <li>
                            <a href="{{env('APP_URL'). '/adblog'}}" data-toggle="collapse" data-target=".navbar-collapse.in">AdBlog</a>
                        </li>
                        <li>
                            <a href="{{env('APP_URL'). '/adboard'}}" data-toggle="collapse" data-target=".navbar-collapse.in">AdBoard</a>
                        </li>
                        @if(!isset($isLoggedIn))
                            <li>
                                <a href="{{env('APP_URL'). '/register'}}" data-toggle="collapse" data-target=".navbar-collapse.in">Join</a>
                            </li>
                            <li>
                                <a href="{{env('APP_URL'). '/login'}}" id="login" data-toggle="collapse" data-target=".navbar-collapse.in">Login</a>
                            </li>
                        @endif
                        @if(isset($isLoggedIn))
                            <li class="dropdown">
                                <a href="https://www.leasedadspace.com/dashboard#" class="dropdown-toggle" id="nav-dropdown" data-toggle="dropdown" rel="purchase" aria-expanded="false">Member Area <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Account Tools</li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/dashboard'}}">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/edit_profile'}}">Edit Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/purchase_traffic_pack'}}">Purchase Traffic Pack</a>
                                    </li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/purchases_histroy'}}">Purchase History</a>
                                    </li>
                                    <li>
                                        <a href="https://reply2frank.com/" target="_blank">Support</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Advertising Tools</li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/submit_textad'}}">Submit Text Ad</a>
                                    </li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/submit_bannerad'}}">Submit Banner Ad</a>
                                    </li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/submit_adboard_post'}}">Submit Ad Board Post</a>
                                    </li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/send_soloemail'}}">Send Solo Email</a>
                                    </li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/personal_blog'}}">Personal Blog</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Affiliate Tools</li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/affiliate_singup'}}">Affiliate Signup</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Logout</li>
                                    <li>
                                        <a href="{{env('APP_URL'). '/'}}" data-toggle="collapse" data-target=".navbar-collapse.in">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>

    </div>
</header>
