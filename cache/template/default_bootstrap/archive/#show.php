<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->

<!-- 页面标题开始 -->
<div class="title">
<h3><a><?php echo $archive['title'];?><small><?php echo $archive['subtitle'];?></small></a></h3>
<p><?php echo $archive['description'];?></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->


<hr class="featurette-divider">


<!-- 中部开始 -->
<div class="container">


<!--用于打印和文字放大-->
<div class="content_tools_box">
<p class="content_tools">
<a href="javascript:CallPrint('print');"><?php echo lang('printcontent');?></a> &nbsp; &nbsp; &nbsp; <a href="javascript:doZoom(14)"><?php echo lang('small');?></a>&nbsp; &nbsp;<a href="javascript:doZoom(18)"><?php echo lang('middle');?></a>&nbsp; &nbsp;<a href="javascript:doZoom(20)"><?php echo lang('big');?></a>
</p>
<div class="clearfix"></div>
<script src="<?php echo $skin_path;?>/js/c_tool.js" type="text/javascript" ></script>
</div>
<!--/用于打印和文字放大-->



<!-- 正文 -->
<div id="print" class="lead content">
<?php echo $archive['content'];?>
</div>

<?php if($pages>1) { ?>
<!-- 内页分页 -->
<div class="blank30"></div>
<div class="pages">
<?php echo archive_pagination($archive);?>
</div>
<div class="blank30"></div>
<?php } ?>



<?php if(archive_attachment($archive['aid'],'id')) { ?>
<!-- 附件 --><div class="blank30"></div>
<p>
<?php echo lang('attachment');?>：<?php echo attachment_js($archive['aid']);?>
</p>
<?php } ?>
<div class="blank30"></div>


<!-- 自定义表单开始 -->
<?php if($archive['showform']) { ?>
<?php echo template('myform/nrform.html'); ?>
<?php } ?>
<!-- 自定义表单结束 -->

<div class="blank60"></div>

<!-- 上下页开始 -->
<div id="page">
<?php if($archive['p']['aid']) { ?>
<strong><?php echo lang('archivep');?></strong><a href="<?php echo $archive['p']['url'];?>"><?php echo $archive['p']['title'];?></a>
<?php } else { ?>
<strong><?php echo lang('archivep');?></strong><?php echo lang('nopage');?>	
<?php } ?>
<div class="blank10"></div>
<?php if($archive['n']['aid']) { ?>
 <strong><?php echo lang('archiven');?></strong><a href="<?php echo $archive['n']['url'];?>"><?php echo $archive['n']['title'];?></a>
<?php } else { ?>
<strong><?php echo lang('archiven');?></strong><?php echo lang('nopage');?>	
<?php } ?>
</div>
<!-- 上下页结束 -->


</div><!-- /container -->



<!-- 相关文章开始 -->
<?php if(is_array($likenews)) { ?>
<div class="blank60"></div>
<!-- 页面标题开始 -->
<div class="title">
<h3><a><?php echo $archive['tag'];?><small><?php echo lang('relatedcontent');?></small></a></h3>
<p></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->
<hr class="featurette-divider">
<div class="container list-container">
<!-- 内容列表开始 -->
<?php if(is_array($likenews))
foreach($likenews as $item) { ?>
<div class="news-list list-border list-border-w">
<div class="list-date">
<span><?php echo sdate($item['adddate'],'d');?></span>
<p><?php echo sdate($item['adddate'],'Y-m');?></p>
</div>
<h4><a title="<?php echo $item['title'];?>" href="<?php echo archive::url($item);?>" target="_blank"><?php echo cut($item['title'],20);?></a></h4>
<p><?php echo cut(strip_tags($item['introduce']),140);?>… <a href="<?php echo archive::url($item);?>" target="_blank">[<?php echo lang('more');?>]</a></p>
</div>
<?php } ?>
<!-- 内容列表结束 -->
</div>
<?php } ?>
<!-- 相关文章结束 -->



<div class="blank60"></div>
<!-- 评论框开始 -->
<?php echo template('comment/comment.html'); ?>
<!-- 评论框结束 -->



<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->

<script src="<?php echo $skin_path;?>/js/jQuery.autoIMG.js"></script>
<script type="text/javascript">
<!--
jQuery(function ($) {
$('.lead p').autoIMG();
});
//-->
</script>
<script type="text/javascript" src="<?php echo $base_url;?>/ckplayer/ckplayer.min.js"></script>
<?php echo template('footer.html'); ?>