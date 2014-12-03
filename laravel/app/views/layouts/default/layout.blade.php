<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Football Manager</title>

        <link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/frontend.min.css" />

        <script type="text/javascript" src="/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- you need to include the shieldui css and js assets in order for the charts to work -->
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
        <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

        @section('additionalCSS')
        @show

        @section('additionalJS')
        @show

        <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
    </head>
<body>

@if(isset($hideNav))
    @yield('content')
@else
<div @if(!isset($hideSideNav)) id="wrapper" @endif>
    @include('layouts/default/parts/nav')
    @yield('content')
</div>
@endif

@yield('footerScript')
<!-- /#wrapper -->

</body>
</html>
