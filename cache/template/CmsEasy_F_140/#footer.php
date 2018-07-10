<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<div class="clearfix"></div>
<!--foot -->
<footer>
<div class="foot">
<div class="container">


<h5 class="col-lg-10"><?php echo getDescription($archive,$category,$catid,$type);?></h5>

<div class="col-md-7 foot-nav">
<div class="row">
<div class="col-sm-4">
<?php echo templatetag::tag('页底栏目一');?>
</div>
<div class="col-sm-4">
<?php echo templatetag::tag('页底栏目二');?>
</div>
<div class="col-sm-4">
<?php echo templatetag::tag('页底栏目三');?>
</div>
</div>
</div>

<div class="col-md-5 fweixin">
<div class="row">
<div class="col-sm-6">
<?php if(config::get('qrcodes')=='1') { ?>
<p><img width="150" src="<?php echo url('tool/qrcode');?>" /></p>
<p><?php echo lang(scanning);?><?php echo lang(access);?><br><?php echo lang(sitewap);?></p>
<?php } ?>
</div>
<div class="col-sm-6">
<p><img src="<?php echo get(weixin_pic);?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' /></p>
<p><?php echo lang(attention);?><br><?php echo lang(official);?><?php echo lang(wechat);?></p>
</div>
</div>
</div>




<div class="copyright">
<p><?php echo lang(address);?>：<?php echo get(address);?>&nbsp;&nbsp;<?php echo lang(email);?>：<?php echo get(email);?>&nbsp;&nbsp;<?php echo lang(tel);?>：<?php echo get(tel);?>&nbsp;&nbsp;<?php echo lang(fax);?>：<?php echo get(fax);?></p>
<p>
<?php echo get(site_right);?><a href="<?php echo $base_url;?>/sitemap.html" target="_blank"><?php echo lang(sitemap);?></a>,Inc.All rights reserved.&nbsp;&nbsp;<a rel="nofollow" href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank"><?php echo get('site_icp');?>
</p>
<p><?php if(get('guestbook_enable')) { ?>&nbsp;&nbsp;<a rel="nofollow" title="<?php echo lang(feedback);?>" href="<?php echo url('guestbook');?>" target="_blank"><?php echo lang('feedback');?></a><?php } ?><?php if(config::get('opguestadd')=='1') { ?>&nbsp;&nbsp;<a rel="nofollow" href="<?php echo $base_url;?>/?g=1"><?php echo lang(opguestadd);?></a><?php } ?></a>&nbsp;&nbsp;<?php echo getCopyRight();?><?php if(get('guestbook_enable')) { ?>&nbsp;&nbsp;<a rel="nofollow" title="<?php echo lang(feedback);?>" href="<?php echo url('guestbook');?>" target="_blank"><?php echo lang('feedback');?></a><?php } ?>
</p>
<?php if(config::get('hotsearch')=='1') { ?><p><?php if(config::get('hotsearch')=='1') { ?><?php echo lang('hotkeys');?>： <?php echo gethotsearch(10);?><?php } ?></p><?php } ?>
</div>







</div>
</div>
</footer>
<!-- foot end --><?php if($topid==0) { ?>
<div class="home-links">
<div class="hr"></div>
<div class="container">
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-1 home-links-left">
<?php echo lang(links);?>：
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
</div><!-- /container -->
</div><!-- /home-links -->
<?php } ?>


<!-- search -->
<div class="container-fluid">

<div class="modal fade bs-example-modal-lg-search" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="row">
<form name='search' action="<?php echo url('archive/search');?>" onsubmit="search_check();" method="post">
<div class="col-lg-1"></div>
<div class="col-lg-10">
<div class="input-group">

<input type="text" name="keyword" class="form-control" placeholder="<?php echo lang(pleaceinputtext);?>">
<span class="input-group-btn">
<button class="btn btn-default" name='submit' type="submit">Go!</button>
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

<script type="text/javascript" src="<?php echo $base_url;?>/js/common.js"></script>







<?php if(get('share')=='1') { ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php } ?>


<?php if(config::get('site_push')=='1') { ?>
<script>
(function(){
var bp = document.createElement('script');
bp.src = '//push.zhanzhang.baidu.com/push.js';
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(bp, s);
})();
</script>
<?php } ?>

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

</body>
</html>