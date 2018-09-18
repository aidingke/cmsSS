$(function () {
	var o = {
		//获取url上type参数
		type : null,
		//初始化
		init : function () {
			o.initHtml();
			o.setHeader();
			o.bind();
			o.scroll();
			var type = location.hash.replace("#type=","");
			$(".pageNav li").eq(type).click();
			//window.location.href="file:///E:/project/website/aboutUs.html#type=3"
		},
		//初始化绑定事件
		bind : function () {
			//卡片切换
			$(".pageNav li").on("click", function () {
				if ($(this).hasClass("active")) {
					return false;
				}
				var index = $(this).index();
				$(".pageNav li").eq(index).addClass("active").siblings().removeClass("active");
				$(".pageCon-list .pageCon-item").eq(index).addClass("active").siblings().removeClass("active");
				$(".pageCon-list-bar span").eq(index).addClass("active").siblings().removeClass("active");
				$(".newCon .talentsPlat_text_tip a").click();
				location.hash='type='+index;
			});
			$(".header a").on("click",function(){
				var $this = $(this);
				if($this.hasClass("active")){return false;}
				var href= $this.attr("data-href");
				location.href=href;
			});
			$(".navTo").on("click",function(){
				$(".pageNav li").eq(3).click();
			});
			$(".talentsPlat .talentsPlat_nav span").on("click",function(){
				var index = $(this).index();
				$(this).addClass("active").siblings().removeClass("active");
				$(".talentsPlat .talentsPlat_ul").eq(index).show().siblings(".talentsPlat_ul").hide();
			});
			$(".talentsPlat_item_title").on("click",function(){
				var _this = $(this);
				var title = $(".talentsPlat_nav span.active").text();
				var htmlTitle = _this.find("span").text();
				var htmlCon = _this.parent().find(".talentsPlat_item_text").html();
				$(".talentsPlat_text .talentsPlat_text_tip span").html(title);
				$(".talentsPlat_text .talentsPlat_text_con h3").html(htmlTitle);
				$(".talentsPlat_text .talentsPlat_text_new").html(htmlCon);
				$(".talentsPlat").hide();
				$(".talentsPlat_text").show();
			});
			$(".plat .talentsPlat_text .talentsPlat_text_tip").on("click",function(){
				$(".talentsPlat").show();
				$(".talentsPlat_text").hide();
			});
			$(".new .newTip").on("click",function(){
				var $this = $(this);
				var ssrc = $this.attr("data-src");
				var sh = $this.attr("data-height");
				var eI = '<iframe src="'+ssrc+'" style="height:'+sh+'"></iframe>';
				$(".new").hide();
				$(".newCon .talentsPlat_text_new").html(eI);
				$(".newCon").show();
				$(window).scrollTop(620);
			});
			$(".newCon .talentsPlat_text_tip a").on("click",function(){
				$(".newCon .talentsPlat_text_new").html('');
				$(".newCon").hide();
				$(".new").show();
			});
		},
		scroll:function(){
			if($(".windowBar").length>0){
				//监听滚动条
				$(window).on('scroll', function() {
					var h = $(".pageNav").offset().top;
					if($(window).scrollTop() >= h) {
						$(".pageNav ul").addClass("fixTop");
					}else{
						$(".pageNav ul").removeClass("fixTop");
					}
				});
			}
		},
		setHeader:function(){
			var url = location.href;
			if(url.indexOf("insurance.html")>-1){
				$(".header .li").eq(0).addClass("active");
			}else if(url.indexOf("maintenance.html")>-1){
				$(".header .li").eq(1).addClass("active");
			}else if(url.indexOf("secondHand.html")>-1){
				$(".header .li").eq(2).addClass("active");
			}else if(url.indexOf("owner.html")>-1){
				$(".header .li").eq(3).addClass("active");
			}else if(url.indexOf("aboutUs.html")>-1){
				$(".header .li").eq(4).addClass("active");
			}
		},
		//初始化ele
		initHtml:function(){
			$(".header").html('<div class="ul">\
					<a href="index.html" class="logo"><img src="./img/logo.png"></a>\
					<a data-href="insurance.html" href="javascript:" class="li">保险金融</a>\
					<a data-href="maintenance.html" href="javascript:" class="li">维保企业</a>\
					<a data-href="secondHand.html" href="javascript:" class="li">二手车行</a>\
					<a data-href="owner.html" href="javascript:" class="li">车主平台</a>\
					<a data-href="aboutUs.html" href="javascript:" class="li">关于我们</a>\
				</div>');
				
			$(".footer").html('<span>copyright © 2017 广州万国汽车技术有限公司&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn" target="_blank">粤ICP备17042548号-1</a>\
				<span>地址：广州市天河区林和西路157号保利中汇广场A座1510</span>\
				<span>电话：020-36297230</span>');
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
	//初始化webSite对象
	o.init();
});
