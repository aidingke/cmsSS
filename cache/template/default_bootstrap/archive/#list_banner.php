<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->
<style>
.textPicL{width:28%;float: left;}
.textPicR{width:70%;}	
.blank30,.blank60{height: 0px;}

.pagination {margin: 20px 0px;}
.post-masonry{margin-bottom: 10px;}
@media screen and (min-width: 0) and (max-width: 767px){
.textPicL{
    float: none;width: 95%;
    margin: 0 auto;
}
.textPicR {
    width: 95%;padding: 0 7%;
}
.container p{font-size: 0.8rem;padding: 0 .3rem;}
}


</style>

<!-- 中部开始 -->
<div class="container list-container">
<div class="row">
<div class="col-md-12">
<!-- 内容列表开始 -->
<?php if(is_array($archives))
foreach($archives as $i => $archive) { ?>
<div class="row news-list-text-pic textPicBox">
<div class="col-md-2 textPicL">
<a target="_blank" href="<?php echo $archive['url'];?>" class="img-auto"><img alt="<?php echo $archive['stitle'];?>" src="<?php echo $archive['thumb'];?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' class="img-responsive" data-src="<?php echo $archive['thumb'];?>" alt="<?php echo $archive['stitle'];?>" /></a>
</div>
<div class="col-md-10 textPicR">
<h4><a title="<?php echo $archive['stitle'];?>" href="<?php echo $archive['url'];?>" target="_blank"><?php echo $archive['title'];?></a></h4>
<p><?php echo cut(strip_tags($archive['introduce']),160);?>…<a href="<?php echo $archive['url'];?>" target="_blank">[<?php echo lang('more');?>]</a></p>  
                    <p><?php echo $archive['adddate'];?></p>      
</div>
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
</div><!-- /col-md-12 -->
</div><!-- /row -->
</div><!-- /container -->
<!-- /中部开始 -->


<div class="blank30"></div>


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->


<?php echo template('footer.html'); ?>