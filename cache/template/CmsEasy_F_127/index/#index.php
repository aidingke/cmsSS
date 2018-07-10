<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<?php echo template('system/slide.html'); ?>




 <div class="welcome text-center">
<div class="container">
    <?php echo templatetag::tag('首页第二行栏目说明');?>
 </div>
</div>

<!--latest designs-->
<div id="cate" class="categories">
 <div class="container">
<div class="cat-head">
<h3><?php echo templatetag::tag('首页第三行栏目');?></h3>
</div>
 <div class="categorie-grids cs-style-1">
<?php echo templatetag::tag('首页第三行栏目图片6条');?>
 <div class="clearfix"></div>
 </div>
 </div>
</div>
<!--//latest designs-->
<!-- testimonials -->
<div class="second-slider">
<div class="container">
<h3 class="tes text-center"><?php echo templatetag::tag('首页第四行栏目');?></h3>
<div  id="top1" class="callbacks_container">
<ul class="rslides" id="slider4">
<?php echo templatetag::tag('首页第四行滚动内容');?>
</ul>
</div>
</div>
</div>	
<!-- //testimonials -->
<!-- news -->
<div class="news" id="blog">
<div class="container">
<div class="news-head text-center">
<?php echo templatetag::tag('首页第五行栏目说明');?>
</div>
<div class="news-grids">
<?php echo templatetag::tag('首页第五行栏目6条');?>
<div class="clearfix"> </div>
</div>
</div>
</div>
<!-- //news -->


<?php echo template('footer.html'); ?>