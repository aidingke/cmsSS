<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<?php echo template('system/cslide.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->

<!-- 页面标题开始 -->

<div class="title">
<h3><a><?php echo $special['title'];?><small>Special</small></a></h3>
<p></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->


<hr class="featurette-divider">


<!-- 中部开始 -->
<div class="container list-container">

<div class="blank30"></div>
<!-- 专题图片 -->
<img src="<?php echo $special['banner'];?>" class="img-responsive" onerror='this.src="<?php echo config::get('onerror_pic');?>"' />
<!-- 专题介绍 -->
<?php echo $special['description'];?>
<div class="blank30"></div>

<!-- 内容列表开始 -->
<div class="row">
<div class="col-md-12">
<?php if(is_array($archives))
foreach($archives as $i => $sp) { ?>
<div class="row news-list-text-pic">
<div class="col-md-2">
<a target="_blank" href="<?php echo $sp['url'];?>" class="img-auto"><img alt="<?php echo $sp['stitle'];?>" src="<?php echo $sp['thumb'];?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' class="img-responsive" data-src="<?php echo $sp['thumb'];?>" alt="<?php echo $sp['stitle'];?>" /></a>
</div>
<div class="col-md-10">
<p><?php echo $archive['adddate'];?></p>
<h4><a title="<?php echo $sp['stitle'];?>" href="<?php echo $sp['url'];?>" target="_blank"><?php echo $sp['title'];?></a></h4>
<p><?php echo cut(strip_tags($sp['introduce']),160);?>…<a href="<?php echo $sp['url'];?>" target="_blank">[<?php echo lang('more');?>]</a></p>        
</div>
</div>
<?php } ?>
</div><!-- /col-md-12 -->
</div><!-- /row -->
<!-- 内容列表结束 -->

<div class="blank30"></div>

<!-- 列表分页开始 -->
<?php if(isset($pages)) { ?>
<div class="blank30"></div>
<?php echo special::pagination($tag);?>
<div class="blank30"></div>
<?php } ?>
<!-- 列表分页结束 -->

</div><!-- /container -->
<!-- 中部结束 -->







<div class="blank30"></div>
<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->





<?php echo template('footer.html'); ?>