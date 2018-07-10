<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<!-- footer-section -->
<div class="footer">
<div class="footer-top">
<div class="container">
<div class="col-md-4 footer-grid">
<?php echo templatetag::tag('页底左侧栏目说明');?>
</div>
<div class="col-md-4 footer-grid">
<h5><?php echo templatetag::tag('页底中间栏目');?></h5>
<?php echo templatetag::tag('页底中间栏目列表2条');?>
</div>
<div class="col-md-4 footer-grid">
<h5><?php echo templatetag::tag('页底右侧栏目');?></h5>
<ul>
<li><?php echo lang(address);?>：<?php echo get(address);?></li>
<li><?php echo lang(tel);?>：<?php echo get(tel);?></li>
<li><?php echo lang(fax);?>：<?php echo get(fax);?></li>
<li><?php echo lang(email);?>：<?php echo get(email);?></li>
<li><?php echo lang(postcode);?>：<?php echo get('postcode');?></li>
</ul>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="footer-bottom">
<div class="container">
<div class="copyrights col-md-10">
<p><span><?php echo get('sitename');?>  <?php echo get(site_right);?></span><span><?php echo get('site_icp');?></span><span><?php echo getCopyRight();?><?php if(get('guestbook_enable')) { ?>&nbsp;&nbsp;<a rel="nofollow" title="<?php echo lang(feedback);?>" href="<?php echo url('guestbook');?>" target="_blank"><?php echo lang('feedback');?></a><?php } ?></span><?php if($topid==0) { ?><span><?php if(config::get('hotsearch')=='1') { ?><?php echo lang('hotkeys');?>： <?php echo gethotsearch(10);?><?php } ?></span><?php } ?></p>					
</div>

<div class="clearfix"></div>
</div>
</div>
</div>
<!-- //footer-section -->

 

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

<?php if(get('share')=='1') { ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php } ?>


<!-- responsiveslides -->
<script src="<?php echo $skin_path;?>/js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
    // Slideshow 4
$("#slider4").responsiveSlides({
auto: true,
pager: true,
nav: true,
speed: 500,
namespace: "callbacks",
before: function () {
$('.events').append("<li>before event fired.</li>");
},
after: function () {
$('.events').append("<li>after event fired.</li>");
}
});
});
</script>
<!-- responsiveslides -->

<?php if(get('lang_type')=='cn') { ?><script type="text/javascript" src="<?php echo $base_url;?>/js/common.js"></script><?php } ?>
<script src="<?php echo $skin_path;?>/js/modernizr.custom.js"></script>
<!-- Bootstrap core JavaScript
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





</body>
</html>