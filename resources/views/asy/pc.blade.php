<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0, minimum-scale=1, maximum-scale=1,,user-scalable=no">
    <link rel="stylesheet" href="{{asset('asy/css/index.css')}}"/>
    <title></title>

</head>
<body>
<div class="page page1">
    <img src="{{asset('asy/img/0.jpg')}}"/>
</div>
<div class="page page2 hidden">
    <img src="{{asset('asy/img/1.jpg')}}"/>
</div>
<div class="page page3 hidden">
    <div class="container">
        <img src="{{asset('asy/img/2.jpg')}}"/>
    </div>
    <div class="gremAll">
        <div class="grem redgrem">
            <img src="{{asset('asy/img/germ/grem1.png')}}"/>
        </div>
        <div class="grem blackgrem">
            <img src="{{asset('asy/img/germ/grem7.png')}}"/>
        </div>
        <div class="grem bluegrem">
            <img src="{{asset('asy/img/germ/grem5.png')}}"/>
        </div>
    </div>
</div>
<div class="page page4 hidden">
    <div class="container">
        <img src="{{asset('asy/img/3.jpg')}}"/>
    </div>
    <div class="gremAll">
        <div class="grem redgrem">
            <img src="{{asset('asy/img/germ/grem1.png')}}"/>
        </div>
        <div class="grem blackgrem">
            <img src="{{asset('asy/img/germ/grem7.png')}}"/>
        </div>
        <div class="grem bluegrem">
            <img src="{{asset('asy/img/germ/grem5.png')}}"/>
        </div>
        <div class="grem greengrem">
            <img src="{{asset('asy/img/germ/grem2.png')}}"/>
        </div>
        <div class="grem orangegrem">
            <img src="{{asset('asy/img/germ/grem6.png')}}"/>
        </div>
    </div>
</div>
<div class="page page5 hidden">
    <div class="container">
        <img src="{{asset('asy/img/4.jpg')}}"/>
    </div>
    <div class="gremAll">
        <div class="grem redgrem">
            <img src="{{asset('asy/img/germ/grem1.png')}}"/>
        </div>
        <div class="grem blackgrem">
            <img src="{{asset('asy/img/germ/grem7.png')}}"/>
        </div>
        <div class="grem bluegrem">
            <img src="{{asset('asy/img/germ/grem5.png')}}"/>
        </div>
        <div class="grem greengrem">
            <img src="{{asset('asy/img/germ/grem2.png')}}"/>
        </div>
        <div class="grem orangegrem">
            <img src="{{asset('asy/img/germ/grem6.png')}}"/>
        </div>
        <div class="grem greensmall">
            <img src="{{asset('asy/img/germ/grem3.png')}}"/>
        </div>
        <div class="grem orangesmall">
            <img src="{{asset('asy/img/germ/grem4.png')}}"/>
        </div>
    </div>
</div>
<div class="page page6 hidden">
    <img src="{{asset('asy/img/5.jpg')}}"/>
</div>
</body>

<script src="//{{ Request::getHost() }}:3000/socket.io/socket.io.js"></script>
<script src="{{asset('asy/js/jquery-1.11.3..min.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="application/javascript">
    var socket = io('http://{{ Request::getHost() }}:3000');

    socket.on('change', function (msg) {
        switch (msg) {
            case 1 :
                $('.page2').show().siblings().hide();
                break;
            case 2 :
                $('.page3').show().siblings().hide();
                break;
            case 3 :
                $('.page4').show().siblings().hide();
                break;
            case 4 :
                $('.page5').show().siblings().hide();
                break;
            case 5 :
                $('.page6').show().siblings().hide();
        }
    })
</script>
</html>