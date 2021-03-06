<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>解密皇家第一道奶源</title>
    <meta name="viewport" content="width=640,target-densitydpi=device-dpi,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('yp/css/lottery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('yp/css/index.css') }}">
</head>
<body>
<!--领奖页面-->
<div class="prize all">
    <img class="prizebg" src="{{ asset('yp/img/prize/pri.png') }}"/>
    <!--获得的奖品名称-->
    @if($prize === 0)
    <p>Terry Palmer 皇家至臻毛巾礼盒</p>
    @elseif($prize === 1)
        <p>Safty 1st 轻柔入梦4件套</p>
    @elseif($prize === 2)
        <p>妙思乐贝贝护肤四件套</p>
    @elseif($prize === 3)
        <p>内野毛巾礼盒</p>
    @endif
        <!--获得奖品对应的图片-->
    <div class="priAll">
        <img src="{{ asset('yp/img/prize/'.$prize.'.png') }}" alt="" class="pri"/>

    </div>

    <div class="ewAll">
        <img class="ewbg" src="{{ asset('yp/img/prize/erweimabg.png') }}"/>
        <!--二维码-->
        <img class="ew" src="{{ $qrcode_url }}" alt=""/>

    </div>
    <a href="{{ url('draw/new') }}">
        <img src="{{ asset('yp/img/btn.png') }}" alt="" class="priBtn"/>
    </a>
</div>

<!--兑换奖品成功-->
<div class="all accPrize hidden">
    <img class="accbg" src="{{ asset('yp/img/accprize/success.png') }}"/>
    <a href="{{ url('draw/new') }}" class="accbtn">
        <img  src="{{ asset('yp/img/btn.png') }}"/>
    </a>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="//{{ Request::getHost() }}:8000/socket.io/socket.io.js"></script>
<script type="application/javascript">
    var openid = '{{$openid}}';
    var socket = io('http://{{ Request::getHost() }}:8000');
    socket.on('main-channel:App\\Events\\QrcodeVerify', function (data) {
        if ( openid == data.openid) {
            $('.accPrize').show().siblings().hide();
        }
    })
</script>

</html>

