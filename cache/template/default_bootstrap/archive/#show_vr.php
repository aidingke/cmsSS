<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<!DOCTYPE html>
<html lang="ja" class="no-js">
<head>
<meta name="Generator" content="CmsEasy 6_2_0_20180611_UTF8" />
  <meta charset="UTF-8">
<script src="<?php echo $skin_path;?>/vr/js/jquery.min.js"></script>
<script src="<?php echo $skin_path;?>/vr/js/modernizr-2.7.1-csstransforms3d-canvas-touch.js"></script>
  <script src="<?php echo $skin_path;?>/vr/js/megapix-image.js"></script>
<script src="<?php echo $skin_path;?>/vr/js/three.min.js"></script>
  <script src="<?php echo $skin_path;?>/vr/js/Detector.js"></script>
  <script src="<?php echo $skin_path;?>/vr/js/CSS3DRenderer.js"></script>
  <script src="<?php echo $skin_path;?>/vr/js/theta-viewer.min.js"></script>
  <link rel="stylesheet" href="<?php echo $skin_path;?>/vr/css/styles.css">
  <link href="<?php echo $skin_path;?>/css/bootstrap.min.css" rel="stylesheet">
<link href="data:text/css;charset=utf-8," data-href="<?php echo $skin_path;?>/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
<link href="<?php echo $skin_path;?>/css/style.css" rel="stylesheet">
<link href="<?php echo $skin_path;?>/css/bootstrap-submenu.css" rel="stylesheet">
  <title><?php echo $archive['title'];?></title>
</head>
<body>
<!-- nav -->
<nav class="navbar navbar-default<?php if(get('nav_top')=='1') { ?> navbar-fixed-top<?php } ?>">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only"><?php echo get('sitename');?></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>


<div class="top-nav-right navbar-right">
<ul>
<li id="fat-menu" class="dropdown">
<a class="dropdown-toggleglyphicon glyphicon glyphicon-globe" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
<ul class="dropdown-menu" aria-labelledby="drop3">
<?php if(get('lang_type')=='cn') { ?><li><a id="StranLink" name="StranLink">繁體</a></li><?php } ?>
<?php if(is_array(getwebsite()))
foreach(getwebsite() as $d) { ?>
<li><a href="<?php echo $d['url'];?>" target="_blank"><?php echo $d['name'];?></a></li>
<?php } ?>
</ul>
</li>
<?php if(get('shoppingcart')=='1') { ?><li class="glyphicon glyphicon-shopping-cart nav-shopping"><a href="<?php echo url('archive/orders',true);?>" target="_blank"></a></li><?php } ?>
<li class="glyphicon glyphicon-search" data-toggle="modal" data-target=".bs-example-modal-lg-search" aria-hidden="true"></li>
</ul>
</div>
<!-- logo -->
<a href="<?php echo $base_url;?>/" class="navbar-brand text-center"><img src="<?php echo get('site_logo');?>" class="img-responsive" alt="<?php echo get('sitename');?>" /></a>
<!-- logo end -->
</div>

<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li class="oen<?php if($topid==0) { ?> active<?php } ?>"><a href="<?php echo $base_url;?>/"><?php echo lang('homepage');?></a></li>
<?php if(is_array(categories_nav()))
foreach(categories_nav() as $t) { ?>
<li class="oen<?php if(isset($topid) && $topid==$t['catid']) { ?> active<?php } ?><?php if(count(categories($t['catid']))) { ?> dropdown<?php } ?>">
<a href="<?php echo $t['url'];?>"<?php if(config::get('nav_blank')==1) { ?> target=" _blank"<?php } ?><?php if(count(categories($t['catid']))) { ?> data-toggle="dropdown" data-submenu=""<?php } ?>
><?php echo $t['catname'];?><?php if(count(categories($t['catid']))) { ?><span class="caret"></span><?php } ?></a>
<?php if(count(categories($t['catid']))) { ?>
<ul class="two dropdown-menu">
<?php if(is_array(categories_nav($t['catid'])))
foreach(categories_nav($t['catid']) as $t1) { ?>
<li<?php if(count(categories($t1['catid']))) { ?> class="dropdown-submenu"<?php } ?>>
<a title="<?php echo $t1['catname'];?>" href="<?php echo $t1['url'];?>"><?php echo $t1['catname'];?></a>
<?php if(count(categories($t1['catid']))) { ?>
<ul class="three dropdown-menu">
<?php if(is_array(categories_nav($t1['catid'])))
foreach(categories_nav($t1['catid']) as $t2) { ?>
<li<?php if(count(categories($t2['catid']))) { ?> class="dropdown-submenu"<?php } ?>>
<a title="<?php echo $t2['catname'];?>" href="<?php echo $t2['url'];?>"><?php echo $t2['catname'];?></a>
<?php if(count(categories($t2['catid']))) { ?>
<ul class="four dropdown-menu">
<?php if(is_array(categories_nav($t2['catid'])))
foreach(categories_nav($t2['catid']) as $t3) { ?>
<li<?php if(count(categories($t3['catid']))) { ?> class="dropdown-submenu"<?php } ?>>
<a title="<?php echo $t3['catname'];?>" href="<?php echo $t3['url'];?>"><?php echo $t3['catname'];?></a>
<?php if(count(categories($t3['catid']))) { ?>
<ul class="five dropdown-menu">
<?php if(is_array(categories_nav($t3['catid'])))
foreach(categories_nav($t3['catid']) as $t4) { ?>
<li>
<a title="<?php echo $t4['catname'];?>" href="<?php echo $t4['url'];?>"><?php echo $t4['catname'];?></a>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>
<?php } ?>
</li>
<?php } ?>
</ul>

</div>
</div>
</nav>
  <div id="theta-viewer"></div>
  <script>
/*global jQuery */
(function ($) {
    'use strict';
    $("#theta-viewer").createThetaViewer('<?php echo $archive['my_vr'];?>');
}(jQuery));
  </script>
  <div class="clearfix"></div>
<!--foot -->
<footer>
<div class="foot">
<div class="container">
<div class="row">

<h5><?php echo getDescription($archive,$category,$catid,$type);?></h5>


<div class="row foot-nav">
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<?php echo templatetag::tag('页底栏目一');?>
</div>
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<?php echo templatetag::tag('页底栏目二');?>
</div>
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 clear">
<?php echo templatetag::tag('页底栏目三');?>
</div>
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
<?php echo templatetag::tag('页底栏目四');?>
</div>

</div>



</div>

<div class="row">
<div class="foot-contactus col-xs-12 col-sm-6 col-md-5 col-lg-3">

<ul>
<li><?php echo lang('address');?>：<?php echo get('address');?></li>
<li><?php echo lang('postcode');?>：<?php echo get('postcode');?></li>
<li><?php echo lang('tel');?>：<?php echo get('tel');?></li>
<li><?php echo lang('mobile');?>：<?php echo get('mobile');?></li>
<li><?php echo lang('fax');?>：<?php echo get('fax');?></li>
<li><?php echo lang('email');?>：<?php echo get('email');?></li>
</ul>
</div>

<div class="foot-guestbook col-xs-12 col-sm-6 col-md-5 col-lg-5">
<?php echo callGuestbook();?>
</div>

<div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 fweixin">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<?php if(config::get('qrcodes')=='1') { ?>
<p><div id="qrcode"></div></p>
<p><?php echo lang('scanning');?><?php echo lang('access');?><br><?php echo lang('sitewap');?></p>
<?php } ?>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<p class="foot-weixin"><img src="<?php echo get('weixin_pic');?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' /></p>
<p><?php echo lang('attention');?><br><?php echo lang('official');?><?php echo lang('wechat');?></p>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo $base_url;?>/js/jquery.qrcode.min.js"></script>
<script>
        $(function() {
            $('#qrcode').qrcode({width: 150,height: 150,text: window.location.href});
        });
</script>
</div>




<div class="copyright">
<p>
<?php echo get('site_right');?><a href="<?php echo get('site_url');?>" target="_blank"><?php echo get('sitename');?></a>,Inc.All rights reserved.&nbsp;&nbsp;<a href="<?php echo $base_url;?>/sitemap.html" target="_blank"><?php echo lang('sitemap');?></a><?php if(config::get('site_icp')) { ?>&nbsp;&nbsp;<a rel="nofollow" href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank"><?php echo get('site_icp');?></a><?php } ?><?php if(config::get('site_beian_number')) { ?>&nbsp;&nbsp;<a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=<?php echo get('site_beian_number');?>" rel="nofollow" target="_blank"><?php echo get('site_beian');?><?php echo lang('site_beian');?><?php echo get('site_beian_number');?><?php echo lang('number');?></a><?php } ?>
</p>
<p>
<?php if(config::get('site_login')=='1') { ?>&nbsp;&nbsp;<?php echo login_js();?><?php } ?>&nbsp;&nbsp;<?php echo getCopyRight();?><?php if(get('guestbook_enable')) { ?>&nbsp;&nbsp;<a rel="nofollow" title="<?php echo lang('feedback');?>" href="<?php echo url('guestbook');?>" target="_blank"><?php echo lang('feedback');?></a><?php } ?>&nbsp;&nbsp;<a href="<?php echo $base_url;?>/index.php?case=archive&act=rss&catid=<?php echo $catid;?>">Rss</a><?php if(config::get('opguestadd')=='1') { ?>&nbsp;&nbsp;<a rel="nofollow" href="<?php echo $base_url;?>/?g=1"><?php echo lang('opguestadd');?></a><?php } ?></a><?php if(get('countjs')) { ?><script src="<?php echo get('countjs');?>" language="JavaScript"></script><?php } ?>
</p>
</div>







</div>
</div>
</footer>
<!-- foot end --><?php if($topid==0) { ?>
<div class="home-links">
<div class="hr"></div>
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-1 home-links-left">
<?php echo lang('links');?>：
</div>
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-11">
<div class="links-logo">
<?php if(is_array(friendlink('image',0,24)))
foreach(friendlink('image',0,24) as $flink) { ?>
<a href="<?php echo $flink['url'];?>" title="<?php echo $flink['name'];?>"><img src="<?php echo $flink['logo'];?>"width="88" height="31" /></a>
<?php } ?>
</div>
<div class="links-a">
<?php if(is_array(friendlink('text',0,24)))
foreach(friendlink('text',0,24) as $flink) { ?>
<a href="<?php echo $flink['url'];?>" target="_blank"><?php echo $flink['name'];?></a>/
<?php } ?>
</div>
</div>
<p class="links-a"><?php echo lang('hotkeys');?>： <?php echo gethotsearch(10);?></p>
</div>
</div><!-- /container -->
</div><!-- /home-links -->
<?php } ?>


<!-- search -->
<div class="container-fluid">

<div class="modal fade bs-example-modal-lg-search" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<div class="blank5"></div>
      </div>
<div class="row">

<form name='search' action="<?php echo url('archive/search');?>" onsubmit="search_check();" method="post">
<div class="col-lg-1"></div>
<div class="col-lg-10">
<div class="input-group">

<input type="text" name="keyword" class="form-control" placeholder="<?php echo lang('pleaceinputtext');?>">
<span class="input-group-btn">
<button class="btn btn-default" name='submit' type="submit"><?php echo lang('search');?></button>
</span>

</div>
</div>
<div class="col-lg-1"></div>
</form>

</div>
</div>
</div>

</div>
<!-- search end -->



<div class="servers">
<!--[if (gte IE 7)|!(IE)]><!-->
<!-- 在线客服 -->
<?php echo template('system/servers.html'); ?>
<![endif]-->
<!-- 短信 -->
<?php echo template('system/sms.html'); ?>
</div>

<div class="servers-wap">
<?php if(config::get('wap_foot_nav')=='1') { ?>
<?php echo template('system/foot_nav_a.html'); ?>
<?php } elseif (config::get('wap_foot_nav')=='2') { ?>
<?php echo template('system/foot_nav_b.html'); ?>
<?php } elseif (config::get('wap_foot_nav')=='3') { ?>
<?php echo template('system/foot_nav_c.html'); ?>
<?php } else { ?>
<?php } ?> 
</div>

<?php if(get('lang_type')=='cn') { ?><script type="text/javascript" src="<?php echo $base_url;?>/js/common.js"></script><?php } ?>


<?php if(config::get('site_push')=='1') { ?>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<?php } ?>




<?php if(get('share')=='1') { ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php } ?>

<script type="text/javascript">
<!--
$(document).ready(function(){
$(window).scroll(function() {
var top = $(".slide-text h1,.sub_menu").offset().top; //获取指定位置
var scrollTop = $(window).scrollTop();  //获取当前滑动位置
if(scrollTop > top){                 //滑动到该位置时执行代码
$(".navbar").addClass("active");
}else{
$(".navbar").removeClass("active");
}
});
});
//-->
</script>

<!-- Bootstrap core Javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="<?php echo $skin_path;?>/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="<?php echo $skin_path;?>/js/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo $skin_path;?>/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo $skin_path;?>/js/bootstrap-submenu.js"></script>
<script src="<?php echo $skin_path;?>/js/docs.js"></script>
<!--[if lt IE 9]><!-->
<script src="<?php echo $skin_path;?>/js/ie/html5shiv.min.js"></script>
<script src="<?php echo $skin_path;?>/js/ie/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
<!--
$(function () {
    $(".dropdown").mouseover(function () {
        $(this).addClass("open");
    });

    $(".dropdown").mouseleave(function(){
        $(this).removeClass("open");
    })

})
//-->
</script>

<?php if(config::get('html_wow')=='1') { ?>
<link rel="stylesheet" href="<?php echo $skin_path;?>/css/animate.min.css" />
<script src="<?php echo $skin_path;?>/js/wow.min.js"></script>
<script>
if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
new WOW().init();
};
</script>
<?php } ?>



<script type="text/javascript">
$('#bootstrap-touch-slider').bsTouchSlider();
</script>




</body>
</html>
</body>
</html>