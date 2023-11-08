<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ generalSetting('title') }} | @yield('title') </title>
    <link rel="shortcut icon" href="{{asset('img/logo/'.generalSetting('logo'))}}" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plugins/sweetalert/sweetalert.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plugins/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plugins/splide/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}">
</head>
<body>
    <div id="wrapper">
        @include('admin.layouts.parts.sidebar')
        <div id="page-wrapper" class="gray-bg">
            @include('admin.layouts.parts.header')
            <div class="wrapper wrapper-content">
                @yield('content')
                @include('admin.layouts.parts.footer')
            </div>  
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.symbol.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('js/demo/peity-demo.js') }}"></script>
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('js/plugins/easypiechart/jquery.easypiechart.js') }}"></script>
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{asset('/js/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('/js/plugins/switchery/switchery.js')}}"></script>
    <script src="{{asset('/js/plugins/splide/splide.min.js')}}"></script>
    <script src="{{ asset('js/ajax_method.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @include('admin.toastr_message')
    <script>
        $('.switchery').each(function() {
            new Switchery(this);
        });
    </script>
</body>
</html>
