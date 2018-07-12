<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->
<style>
.blank30,.blank60{height: 0px;}

.pagination {margin: 20px 0px;}
.post-masonry{margin-bottom: 10px;}
.nav-pills{display: none;}
@media screen and (min-width: 0) and (max-width: 767px){

.container p{font-size: 0.8rem;padding: 0 .3rem;}
.col-sm-6{padding-right: 0}
}
</style>
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
<div style="display: none;">
<table>
<?php if($archive['attr2']) { ?>
<tr>
<th><?php echo lang('price');?>：</th>
<td><?php echo lang('unit');?><strong><?php echo $archive['attr2'];?></strong></td>
</tr>
<?php if($archive['attr2']==$archive['oldprice']) { ?>
<?php } else { ?>

<tr>
<th><?php echo lang('list_price');?>：</th>
<td><?php echo lang('unit');?><strong style="text-decoration:line-through;"><?php echo $archive['oldprice'];?></strong></td>
</tr>

<tr>
<th><?php echo lang('discount');?>：</th>
<td><?php echo lang('unit');?><strong><?php echo jsPrice($archive['aid']);?></span></td>
</tr>
<?php } ?>
<?php } ?>
</table>
</div><!-- /div -->
<div>
<table>
<?php if(config::get('isecoding')=='1') { ?>
<tr>
<th><?php echo lang('ecoding');?>：</th>
<td><?php if($archive['ecoding']) { ?><?php echo $archive['ecoding'];?><?php } else { ?><?php echo lang('not');?><?php } ?></td>
</tr>
<?php } ?>

<tr>
<th><?php echo lang('adddate');?>：</th>
<td><?php echo $archive['adddate'];?></td>
</tr>
<tr>
<th><?php echo lang('strgrades');?>：</th>
<td><?php echo $archive['strgrade'];?></td>
</tr>
</table>
</div><!-- /div -->
<?php if($archive['attr2']) { ?>
<p class="blank30"></p>
<ul class="nav nav-pills" role="tablist">
<li role="presentation" class="active"><a target="_blank" href="<?php echo url('archive/orders/aid/'.$archive['aid'],true);?>"><?php echo lang('buy');?> <span class="badge">Buy</span></a></li>
<li role="presentation" class="active"><a href="<?php echo url('archive/doorders/aid/'.$archive['aid'],true);?>" id="dialog_link" data-toggle="modal" data-target=".bs-example-modal-lg-shopping" aria-hidden="true"><?php echo lang('makeorders');?> <span class="badge">Shopping Cart</span></a></li>
</ul>
<p class="blank30"></p>
<?php } ?>
</div>
<!-- product_info col-sm-6 -->

 <link href="<?php echo $skin_path;?>/js/lightgallery/css/lightgallery.css" rel="stylesheet">
<div class="col-sm-6">
<div id="carousel-example-generic" class="carousel slide section clearfix" data-ride="carousel" style="max-height:380px; margin-top:10px; overflow:hidden;">
<!-- 大图切换 -->
<div class="carousel-inner demo-gallerylist-unstyled row" id="lightgallery" role="listbox">
<?php if(is_array($archive['pics']))
foreach($archive['pics'] as $i => $pic) { ?>
<div class="item img-auto<?php if($i==1) { ?> active<?php } ?>" data-src="<?php echo $pic['url'];?>" data-sub-html="<?php echo $pic['alt'];?>">
<a href="" rel="lightbox['roadtrip']"><img src="<?php echo $pic['url'];?>" alt="<?php echo $pic['alt'];?>" class="img-responsive" onerror='this.src="<?php echo config::get('onerror_pic');?>"' /></a>
</div>
<?php } ?>
</div>
<!-- 左右按钮 -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div><!-- /carousel-example-generic -->
</div><!-- /col-sm-6 -->

</div><!-- /row -->
</div><!-- /container -->


<div class="blank60"></div>
<div class="blank60"></div>
<hr class="featurette-divider">


<div class="title">
<h3><a>introduction<small><?php echo lang('pintro');?></small></a></h3>
<p><?php echo $archive['description'];?></p>
<span>——</span>
</div>


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

<div id="print" class="content">
<!-- 正文 -->
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


<!-- shopping 购物车 -->
<div class="modal fade bs-example-modal-lg-shopping" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm">
<div class="modal-content">
</div>
</div>
</div>
<!-- s/shopping 购物车 -->


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->

<script src="<?php echo $skin_path;?>/js/lightgallery/js/lightgallery.min.js"></script>
        <script src="<?php echo $skin_path;?>/js/lightgallery/js/lg-pager.min.js"></script>

        <script src="<?php echo $skin_path;?>/js/lightgallery/js/lg-fullscreen.min.js"></script>
        <script src="<?php echo $skin_path;?>/js/lightgallery/js/lg-zoom.min.js"></script>
        <script src="<?php echo $skin_path;?>/js/lightgallery/js/lg-hash.min.js"></script>

        <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>
<script type="text/javascript" src="<?php echo $base_url;?>/ckplayer/ckplayer.min.js"></script>
<?php echo template('footer.html'); ?>