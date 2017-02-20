<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<title></title>
		<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
		<script type="text/javascript">
			//通过config接口注入权限验证配置
			wx.config({
			    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
			    appId: 'wxf2ca6ef5e573dceb', // 必填，公众号的唯一标识
			    timestamp: '1479872661', // 必填，生成签名的时间戳
			    nonceStr: 'csm', // 必填，生成签名的随机串
			    signature: '8240f0b9382502ec71b1959e21354749f607129e',// 必填，签名
			    jsApiList: ['checkJsApi',    
'onMenuShareTimeline',    
'onMenuShareAppMessage',    
'onMenuShareQQ',    
'onMenuShareWeibo',    
'hideMenuItems',    
'showMenuItems',    
'hideAllNonBaseMenuItem',    
'showAllNonBaseMenuItem',    
'translateVoice',    
'startRecord',    
'stopRecord',    
'onRecordEnd',    
'playVoice',    
'pauseVoice',    
'stopVoice',    
'uploadVoice',    
'downloadVoice',    
'chooseImage',    
'previewImage',    
'uploadImage',    
'downloadImage',    
'getNetworkType',    
'openLocation',    
'getLocation',    
'hideOptionMenu',    
'showOptionMenu',    
'closeWindow',    
'scanQRCode',    
'chooseWXPay',    
'openProductSpecificView',    
'addCard',    
'chooseCard',    
'openCard'
] // 必填，需要使用的JS接口列表
			});
			//通过ready接口处理成功验证
			wx.ready(function(){
				// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后
				document.querySelector('#onMenuShareAppMessage').onclick = function () {
					wx.onMenuShareAppMessage({
					    title: '根云产品发布会邀请函', // 分享标题
					    desc: '中国最具客户价值的互联网平台', // 分享描述
					    link: 'http://www.irootech.com/jingying.html', // 分享链接
					    imgUrl: 'http://www.irootech.com/img/forwardicon.png', // 分享图标
					    type: '', // 分享类型,music、video或link，不填默认为link
					    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
					    success: function () { 
					        // 用户确认分享后执行的回调函数
					        console.log("成功");
					    },
					    cancel: function () { 
					        // 用户取消分享后执行的回调函数
					    }
					});
				}
				
				document.querySelector('#onMenuShareTimeline').onclick = function () {
				 	wx.onMenuShareTimeline({
					    title: '根云产品发布会邀请函', // 分享标题
					    desc: '中国最具客户价值的互联网平台', // 分享描述
					    link: 'http://www.irootech.com/jingying.html', // 分享链接
					    imgUrl: 'http://www.irootech.com/img/forwardicon.png', // 分享图标
					    success: function () { 
					        // 用户确认分享后执行的回调函数
					         console.log("成功");
					    },
					    cancel: function () { 
					        // 用户取消分享后执行的回调函数
					    }
					});
				}
				
				
			});
		</script>
	</head>
	<body>
		<div class="lbox_close wxapi_form">
			<h3 id="menu-share">分享接口</h3>    
			<span class="desc">获取“分享到朋友圈”按钮点击状态及自定义分享内容接口</span>    
			<button class="btn btn_primary" id="onMenuShareTimeline">分享到朋友圈</button>    
			<span class="desc">获取“分享给朋友”按钮点击状态及自定义分享内容接口</span>    
			<button class="btn btn_primary" id="onMenuShareAppMessage">分享微信好友</button> 
		</div>
	</body>
</html>
