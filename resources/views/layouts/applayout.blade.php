<!DOCTYPE html>
<head>
    <title>
        @yield('pageTitle') - Leased Ad Space
    </title>

    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="layout" content="homepage">

    <link rel="icon" href="https://www.leasedadspace.com/assets/favicon-49f7f73419797356830bc2e32e751f21.ico" type="image/x-icon" />

    <link rel="stylesheet" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min-3f9be4352903f3a7bce058016cf74cdc.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-f95626c760ed3dccfbf299f69539089c.css')}}">
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--}}
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

    <script async="" src="{{asset('js/analytics.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/frontend-2f1ef798b998ed0f118e75f86ca945a8.js')}}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js"></script>

    @yield('css')
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
</body>
<script>
    @yield('js')
</script>
</html>
