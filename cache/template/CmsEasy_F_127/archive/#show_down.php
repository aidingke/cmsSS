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
<div class="row">

<div class="product_info col-sm-6">
<div>
<table>
<tr>
<th><?php echo lang(dong_size);?>：</th>
<td><?php echo $archive['my_size'];?></td>
</tr>
<tr>
<th><?php echo lang(nowdownload);?>：</th>
 <td><?php if($archive['attachment_id']) { ?>
<?php echo attachment_js($archive['aid']);?>
<?php } else { ?>
<?php echo lang(nodownload);?>
<?php } ?>
</td>
</tr>
</table>
</div>
<div>
<table>
<tr>
<th><?php echo lang(view);?>：</th>
<td><?php echo view_js($archive['aid']);?></td>
</tr>
<tr>
<th><?php echo lang(adddate);?>：</th>
<td><?php echo $archive['adddate'];?></td>
</tr>
<tr>
<th><?php echo lang(strgrades);?>：</th>
<td><?php echo $archive['strgrade'];?></td>
</tr>
</table>
<p class="blank30"></p>
</div>
</div><!-- /product_info -->

<!-- 大图 -->
<div class="col-sm-6">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height:300px; margin-top:10px; overflow:hidden;">
<!-- Indicators -->
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<?php if(is_array($archive['pics']))
foreach($archive['pics'] as $pic) { ?>
<div class="item active img-auto">
<img src="<?php echo $pic['url'];?>" alt="<?php echo $pic['alt'];?>" class="img-responsive" onerror='this.src="<?php echo config::get('onerror_pic');?>"' />
</div>
<?php } ?>
</div>
<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div><!-- /carousel-example-generic -->
</div><!-- /col-md-6 -->
<!-- /大图 -->

</div><!-- /row -->
</div><!-- /container -->



<div class="blank60"></div>
<div class="blank60"></div>



<hr class="featurette-divider">


<div class="title">
<h3><a>introduction<small><?php echo lang(pintro);?></small></a></h3>
<p><?php echo $archive['description'];?></p>
<span>——</span>
</div>


<div class="container">

<!--用于打印和文字放大-->
<div class="content_tools_box">
<p class="content_tools">
<a href="javascript:CallPrint('print');"><?php echo lang(printcontent);?></a> &nbsp; &nbsp; &nbsp; <a href="javascript:doZoom(14)"><?php echo lang(small);?></a>&nbsp; &nbsp;<a href="javascript:doZoom(18)"><?php echo lang(middle);?></a>&nbsp; &nbsp;<a href="javascript:doZoom(20)"><?php echo lang(big);?></a>
</p>
<div class="clearfix"></div>
<script src="<?php echo $skin_path;?>/js/c_tool.js" type="text/javascript" ></script>
</div>
<!--/用于打印和文字放大-->

<!-- 正文 -->
<div class="lead" id="print">
<?php echo $archive['content'];?>
</div>


<?php if($archive['attr2']) { ?>
<!-- 价格 -->
<div class="blank10"></div>
<?php echo lang(productprice);?>： <?php echo $archive['attr2'];?>
<?php } ?>

<?php if($archive['tag']) { ?>
<!-- tag -->
<div class="blank10"></div>
<?php echo lang(tag);?>： <?php echo $archive['tag'];?>
<?php } ?>

<?php if($archive['special']) { ?>
<!-- 专题 -->
<div class="blank10"></div>
<?php echo lang(special);?>： <?php echo $archive['special'];?>
<?php } ?>

<?php if($archive['type']) { ?>
<!-- 分类 -->
<div class="blank10"></div>
<?php echo lang(type);?>： <?php echo $archive['type'];?>
<?php } ?>

<?php if($archive['area']) { ?>
<!-- 地区 -->
<div class="blank10"></div>
<?php echo lang(area);?>： <?php echo $archive['area'];?>
<?php } ?>

<div class="blank30"></div>

<?php if($pages>1) { ?>
<!-- 内页分页 -->
<div class="blank10"></div>
<div class="pages">
<?php echo archive_pagination($archive);?>
</div>
<div class="blank30"></div>
<?php } ?>

<!--自动调用自定义字段-->

<?php if(archive_attachment($archive['aid'],'id')) { ?>
<div class="blank20"></div>
<!-- 附件 -->
<p>
<?php echo lang(attachment);?>：<?php echo attachment_js($archive['aid']);?>
</p>
<?php } ?>

<?php if(hasflash()) { ?>
<div class="blank30"></div>
<div style="color:red;font-size:16px;"><?php echo showflash(); ?></div><?php } ?>

<!-- 投票 -->
<?php echo vote_js($archive['aid']);?>

<!-- 自定义表单开始 -->
<?php if($archive['showform']) { ?>
<?php echo template('myform/nrform.html'); ?>
<?php } ?>
<!-- 自定义表单结束 -->

<div class="blank60"></div>

<!-- 上下页开始 -->
<div id="page">
<?php if($archive['p']['aid']) { ?>
<strong><?php echo lang(archivep);?></strong><a href="<?php echo $archive['p']['url'];?>"><?php echo $archive['p']['title'];?></a>
<?php } else { ?>
<strong><?php echo lang(archivep);?></strong><?php echo lang(nopage);?>	
<?php } ?>
<div class="blank10"></div>
<?php if($archive['n']['aid']) { ?>
 <strong><?php echo lang(archiven);?></strong><a href="<?php echo $archive['n']['url'];?>"><?php echo $archive['n']['title'];?></a>
<?php } else { ?>
<strong><?php echo lang(archiven);?></strong><?php echo lang(nopage);?>	
<?php } ?>
</div>
<!-- 上下页结束 -->


</div><!-- /container -->



<!-- 相关文章开始 -->
<?php if(is_array($likenews)) { ?>
<div class="blank60"></div>
<!-- 页面标题开始 -->
<div class="title">
<h3><a><?php echo $archive['tag'];?><small><?php echo lang(relatedcontent);?></small></a></h3>
<p></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->
<hr class="featurette-divider">
<div class="container">
<!-- 内容列表开始 -->
<?php if(is_array($likenews))
foreach($likenews as $item) { ?>
<div class="news-list list-border">
<div class="list-date">
<span><?php echo sdate($item['adddate'],'d');?></span>
<p><?php echo sdate($item['adddate'],'Y-m');?></p>
</div>
<h4><a title="<?php echo $item['title'];?>" href="<?php echo archive::url($item);?>" target="_blank"><?php echo cut($item['title'],20);?></a></h4>
<p><?php echo cut(strip_tags($item['introduce']),140);?>… <a href="<?php echo archive::url($item);?>" target="_blank">[<?php echo lang(more);?>]</a></p>
</div>
<?php } ?>
<!-- 内容列表结束 -->
</div>
<?php } ?>
<!-- 相关文章结束 -->


<!-- 评论框开始 -->
<?php echo template('comment/comment.html'); ?>
<!-- 评论框结束 -->


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->


<script type="text/javascript" src="<?php echo $base_url;?>/ckplayer/ckplayer.min.js"></script>
<?php echo template('footer.html'); ?>