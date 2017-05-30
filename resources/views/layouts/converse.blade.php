<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=1, maximum-scale=1,,user-scalable=no">
    <meta name="format-detection" content="telephone=no,email=no"/>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <title>有人说了一些不是谁都懂的话,来看看你懂吗?</title>
    <link rel="stylesheet" href="{{asset('converse/css/common.css')}}"/>
    <link rel="stylesheet" href="{{asset('converse/css/index.css')}}"/>
    @yield('style')
</head>
<body>

@yield('content')

</body>
<script src="{{asset('converse/js/jquery-1.11.3.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('converse/js/lib/iscroll-zoom.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('converse/js/lib/hammer.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('converse/js/lib/lrz.all.bundle.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('converse/js/lib/PhotoClip.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('converse/js/index.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('converse/js/html2canvas.js')}}"></script>

@yield('javascript')
</html>
