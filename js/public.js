$(function () {
	//弹窗对象
	window.toast = {
		play:null,
		show:function(text,time){
			toast.hide();
			clearTimeout(toast.play);
			$(".mask .mask_text").html(text);
			$(".mask").fadeIn();
			toast.play = setTimeout(function(){
				toast.hide();
			},time?time:1500);
		},
		hide:function(){
			$(".mask").hide();
		}
	}
	var o = {
		//初始化
		init : function () {
			o.initHtml();
			o.setHeader();
			o.initLayer();
			o.initFloatBtn();
			o.initFooter();
			o.bind();
		},
		//初始化绑定事件
		bind : function () {
			$(".iconMenu").on("click", function () {
				$(".barMenu").show();
				setTimeout(function () {
					$(".barMenu").addClass("active");
				}, 10);
			});
			$(".barMenu_con").on("click", function (e) {
				e.stopPropagation();
			});
			$(".barMenu .closeBtn,.barMenu").on("click", function () {
				$(".barMenu").removeClass("active").fadeOut();
			});
			$(".barMenu .barMenu_list li").on("click", function () {
				var $this = $(this);
				var href= $this.attr("data-href");
				location.href=href;
			});
			$(".logo").on("click",function(){
				location.href="./index.html";
			});
			$(".scrollTop").on("click",function(){
				$('html,body').animate({scrollTop: '0px'}, 200);
			});
			$(window).scroll(function() {
				if($(window).scrollTop()>=$(window).height()/2){
					$(".floatBtn .scrollTop").css("display","inline-block");
				}else{
					$(".floatBtn .scrollTop").hide();
				}
			});
		},
		initFooter:function(){
			/*
			$("body").append('<section class="footer"><p style="color:white">Copyright © 2018 </p><p><a target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备1894号-1</a></p></section>');
			*/
		},
		//初始化ele
		initHtml:function(){
			$("body").prepend('<header><a href="./index.html"><img src="" class="header_logo m_header_logo"></a><span class="header_title"></span><a class="am-fr iconMenu"><span style="font-size: .43rem;color: #01adff;margin-right: 5px;display: inline-block;">菜单</span><img src="./img/linkBox.png" alt="menu"></a></header>');
			$("body").append('<section class="barMenu">\
				<section class="barMenu_con">\
					<section class="barMenu_con_header">\
						<span class="closeBtn"></span>\
					</section>\
					<ul class="barMenu_list">\
					</ul>\
				</section>\
			</section>');
			// console.log($('#navbar').clone()[0].innerHTML)
			$('.barMenu_list').append($('#navbar').clone()[0].innerHTML)
			$('.m_header_logo').attr('src',$('#logoimg').attr('src'))
		},
		//初始化弹窗
		initLayer:function(){
			$("body").append('<div class="mask">\
				<div class="mask_text">\
				</div>\
			</div>');
		},
		// 设置菜单当前页对应项激活
		setHeader:function(){
			var url = location.href;
			if(url.indexOf("detection.html")>-1){
				$(".barMenu_con .barMenu_list li").eq(1).addClass("active");
			}else if(url.indexOf("attestation.html")>-1){
				$(".barMenu_con .barMenu_list li").eq(2).addClass("active");
			}else if(url.indexOf("afterSale.html")>-1){
				$(".barMenu_con .barMenu_list li").eq(3).addClass("active");
			}else if(url.indexOf("serviceProvider.html")>-1){
				$(".barMenu_con .barMenu_list li").eq(4).addClass("active");
			}else if(url.indexOf("aboutUs.html")>-1){
				$(".barMenu_con .barMenu_list li").eq(5).addClass("active");
			}else if(url.indexOf("index.html")>-1){
				$(".barMenu_con .barMenu_list li").eq(0).addClass("active");
			}
		},
		// 初始化浮动按钮
		initFloatBtn:function(){
			/*
			$("body").append('<section class="floatBtn">\
				<a href="#" class="itemBtn app">体验</a>\
				<a href="#" class="itemBtn report">体验</a>\
				<a href="javascript:" class="itemBtn scrollTop">返回顶部</a>\
			</section>');
			*/
		},
		//传入对应参数名，返回url参数值
		getQueryString : function (name) {
			var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
			var r = window.location.search.substr(1).match(reg);
			if (r != null)
				return unescape(r[2]);
			return null;
		}
	}
	if (window.navigator.userAgent.indexOf("Mobile") > -1) {
		//手机版
		//初始化webSite对象
		o.init();
	}else{
		// $('#headnavbar').show()
	}
});


