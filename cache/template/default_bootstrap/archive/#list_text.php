<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->
<style>
.blank30,.blank60{height: 0px;}
.container p{font-size: 0.5rem;padding: 0 .3rem;}
.post-masonry{margin-bottom: 10px;}
.list-date p{width: 7rem;}
.list-container .row{margin-bottom: 0}
</style>

<!-- 中部开始 -->
<div class="container list-container">
<div class="row">
<div class="col-md-12">
<!-- 内容列表开始 -->
<?php if(is_array($archives))
foreach($archives as $i => $archive) { ?>
<div class="news-list list-border list-border-w">
<div class="list-date">
<span><?php echo $i+1;?></span>
<p><?php echo sdate($archive['adddate'],'Y-m-d');?></p>
</div>
<h4><a title="<?php echo $archive['stitle'];?>" href="<?php echo $archive['url'];?>" target="_blank" ><?php echo $archive['title'];?></a></h4>
<p><?php echo cut(strip_tags($archive['introduce']),120);?>… <a href="<?php echo $archive['url'];?>" target="_blank">[<?php echo lang('more');?>]</a></p>
</div>
<?php } ?>
<!-- 内容列表结束 -->
<div class="blank30"></div>
<!-- 内容列表分页开始 -->
<?php if(isset($pages)) { ?>
<div class="blank30"></div>
<?php echo category_pagination($catid);?>
<div class="blank30"></div>
<?php } ?>
<!-- 内容列表分页结束 -->
</div>
</div><!-- /row -->
</div><!-- /container -->
<!-- /中部开始 -->

<div class="blank30"></div>


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->


<?php echo template('footer.html'); ?>