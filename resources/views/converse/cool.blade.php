@extends('layouts.converse')

@section('style')

@endsection

@section('content')
    <div class=" page3 face " id="page3">
        <div class="container">
            <div class="bg">
                <img src="{{asset('converse/img/man.png')}}"/>
            </div>
            <div class="pic" id="view"></div>
            <div class="page page3Container">
            	<div class="cueText">
					<p>请输入少于<span>10</span>个中文字</p>
				</div>
                <form class="personInfo2" action="{{ url('kw/cool/poster') }}" method="post">
                    {{ csrf_field() }}
                    <div class="top">
                        <!--<input type="hidden" value="" />-->
                        <p>我是<input class="text1 text" type="text" name="text1">，</p>
                        <p>不是谁都懂我的<input class="text2 text" type="text" name="text2">，</p>
                        <p>但这正是让我成为"我"的原因。</p>
                    </div>
                    <div class="bottom">
                        <p>就像这双有表情的鞋</p>
                        <p>不是谁都理解那道弧度的存在</p>
                        <p>不懂？</p>
                        <p>那就<input class="text3 text" type="text" name="text3">吧。</p>
                    </div>
                    <input class="text" type="hidden" name="avatar" id="postImg">
                    <input type="submit" id="submitBtm"/>
                </form>
                <div class="footerBtn">
                    <img src="{{asset('converse/img/photoword/reset.png')}}" class="footerBtnLeft">
                    <label class="footerBtnRightLabel"><img
                                src="{{asset('converse/img/photoword/generate.png')}}" class="footerBtnRight"></label>
                </div>
                <div class="popup ">
                    <label class="modal modal1">
                        <img src="{{asset('converse/img/photoword/head.png')}}">
                        <!--<input type="file" accept="image/*" capture="camera"style="display: none">-->
                        <input id="gocamera" style="display: none">

                    </label>
						<div class="hall">
							<div class="hpic">
								<img src="{{asset('converse/img/hpic.png')}}"/>
							</div>
							<a href="{{ url('kw/rule') }}" class="activity">
								<img src="{{asset('converse/img/hlink.png')}}" />
							</a>
						</div>
                    <div class="side">
                        <img src="{{asset('converse/img/photoword/side.png')}}"/>
                    </div>
                </div>
                <div class="popup2 hidden">
                    <div class=" modal modal2 ">
                        <img src="{{asset('converse/img/photoword/he.png')}}">
                    </div>
                    <div class="inputText">
                        <img src="{{asset('converse/img/photoword/text.png')}}"/>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="page page4 hidden">
        <div class="bg pos">
            <img src="{{asset('converse/img/camera/Brightness-Contrast-1.png')}}"/>
        </div>
        <div class="picture" id="clipArea"></div>
        <div class="backBtm cBtm">
            <img src="{{asset('converse/img/camera/back.png')}}"/>
        </div>
        <div class="goBtm cBtm" id="goBtm">
            <img src="{{asset('converse/img/camera/ok.png')}}"/>
        </div>
        <div class="popup" id="handHidden">
            <div class="logo">
                <img src="{{asset('converse/img/camera/ti.png')}}"/>
            </div>
            <div class="headText">
                <img src="{{asset('converse/img/camera/tihand.png')}}"/>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="application/javascript">

        var pc = new PhotoClip('#clipArea', {
            outputSize: 140,
            //adaptive: ['60%', '80%'],
            file: '#gocamera',
            view: '#view', //显示截取后图像的容器的选择器或者DOM对象。
            ok: '#goBtm', //确认截图按钮的选择器或者DOM对象。
            //img: 'img/mm.jpg',
            loadStart: function () {
                //开始加载的回调函数。this指向 fileReader 对象，并将正在加载的 file 对象作为参数传入
            },
            //加载完成的回调函数。this指向图片对象，并将图片地址作为参数传入。
            loadComplete: function () {

                $('.page4').show().siblings().hide();

                $('.page4 .logo').addClass('logoHand');

                $('.page4 .headText').addClass('logoText');

            },
            //
            done: function (dataURL) {

//                console.log(dataURL);//打印照片base64

                $('.face').show().siblings().hide();

                $('.popup').hide();

                $('.popup2').show();

                $('.page3 .popup2 .inputText').addClass('ani');

                $("#postImg").val(dataURL);
            },
            fail: function (msg) {
                
            }
        });

        $('.popup2').click(function () {

            $(this).hide();

            $('.text1').focus();
			$('.cueText').show();
        })

        var handHidden = document.getElementById('handHidden');

        handHidden.addEventListener('touchstart', function () {

            $(this).hide();
        })

        $('.page3 .popup').click(function () {

            $('.page3 .popup .hall').hide();

            $('.page3 .popup .side').show();

            $('.page3 .popup .side').addClass('sideAni');

            setTimeout(function () {

                $('#gocamera').attr('type', 'file');
                


            });


        })
        
        
		//显示

		var length = [5, 5, 6]

		$('.personInfo2 .text').each(function(index) {

			this.onfocus = function() {

				$('.cueText').find('span').html(length[index]);
			}
		})

		$(".text").blur(function() {
			
			if(allInput($('.text'))) {
				
				$('.cueText').hide();
				
			}
		});

		function allInput(val) {

			for(var i = 0; i < val.length; i++) {
				if(val[i].value == "") {
					return false;
				}
			}
			return true;
		}
		


    </script>
@endsection