<!DOCTYPE html>
    <head>
        <title>
            @yield('pageTitle') - Leased Ad Space
        </title>

        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="layout" content="homepage">

        <link rel="icon" href="https://leasedadspace.com/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="{{asset('css/css.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('css/bootstrap.min-3f9be4352903f3a7bce058016cf74cdc.css')}}">--}}
        <link rel="stylesheet" href="{{asset('css/style-f95626c760ed3dccfbf299f69539089c.css')}}">

        <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
{{--        <script async="" src="{{asset('js/analytics.js')}}"></script>--}}
{{--        <script type="text/javascript" src="{{asset('js/frontend-2f1ef798b998ed0f118e75f86ca945a8.js')}}"></script>--}}
{{--        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>--}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @yield('css')
        <style>
            header.navbar {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                z-index: 1030;
                background-color: #fff;
                font-family: 'Sense', sans-serif;
                box-sizing: border-box;
                height: 50px;
                min-height: 50px;
                margin-bottom: 0;
                padding: 0;
                border-top: solid 0 #f21329;
                border-bottom: solid thin #353b3f;
                border-width: 0 0 1px;
                border-radius: 0;
            }

            @media (min-width: 768px) {
                .navbar-toggle {
                    display: none;
                }
            }

            @media (min-width: 768px) {
                .navbar-header {
                    float: left;
                    width: 100%;
                    display: inline-flex;
                }
            }

            @media (min-width: 768px) {
                .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
                    margin-left: -15px;
                }
            }

            #nav-container {
                padding-left: 15px;
                padding-right: 15px;
                margin-right: auto;
                margin-left: auto;
                display: block;
                height: 100%;
            }

            span.navbar-toggle {
                float: right;
            }

            nav#mainNav {
                display: none;
                max-height: 340px;
                padding-left: 0;
                padding-right: 0;

            }

            @media (min-width: 768px) {
                .navbar-collapse.collapse {
                    display: block !important;
                    height: auto !important;
                    padding-bottom: 0;
                    overflow: visible !important;
                }
            }

            @media (min-width: 768px) {
                .navbar-collapse {
                    width: auto;
                    border-top: 0;
                    box-shadow: none;
                }
            }

            @media (min-width: 768px) {
                .navbar-right {
                    float: right !important;
                    margin-right: -15px;
                }
            }

            @media (min-width: 768px) {
                .navbar-nav {
                    float: left;
                    margin: 0;
                }
            }

            .nav {
                margin-bottom: 0;
                padding-left: 0;
                list-style: none;
            }
            @media (min-width: 768px) {
                .navbar-nav>li {
                    float: left;
                }
            }

            .nav>li {
                position: relative;
                display: block;
            }

            @media (min-width: 768px) {
                .navbar-nav>li>a {
                    padding-top: 15px;
                    padding-bottom: 15px;
                }
            }

            .navbar-nav>li>a {
                padding-top: 10px;
                padding-bottom: 10px;
                line-height: 20px;
            }

            nav>ul {
                height: 100%;
            }

            nav>ul>li {
                height: 100%;
            }

            .nav>li>a {
                position: relative;
                display: block;
                padding: 10px 15px;
                text-decoration: none;
                height: 100%;
                line-height: 1.5;
            }

            a {
                color: #037292;
                text-decoration: none;
            }

            a {
                background-color: transparent;
            }

            ul.nav {
                display: block;
            }

            .navbar-header {
                height: 100%;
            }

            .page-header {
                margin: 40px 0 20px;
            }

            ul.pagination {
                display: inline-block;
                height: unset;
            }

            ul.pagination>li {
                float: left;
            }

            p {
                /*display: inline!important;*/
            }

            h1, h2, h3, h4, h5, h6 {
                font-weight: 400;
            }

            .small, small {
                font-size: 100%;
            }

            b, strong {
                font-weight: 600;
            }

            .navbar-brand {
                font-size: 2.2em!important;
            }

            .navbar-brand strong {
                font-size: 1em;
                color: #ffffff;
            }

            a:link, a:visited {
                color: #f21329;
            }

            header.navbar ul.nav.navbar-nav>li a {
                font-weight: 500;
            }
        </style>
    </head>

    <body>
        <div id="main" class="transition-scene">
            <div id="pseudoBody" data-spy="scroll" data-target="#mainNav" data-offset="50" class="index dashboard">
                @include('layouts.navbar')

                @yield('header-section')

                <div class="container-fluid">
                    @yield('content-section')
                </div>

                @include('layouts.footer')
            </div>
        </div>
        @yield('js')
    </body>
</html>
